public function processWindows($serial_number, $json_data)
{
    $data = json_decode($json_data, true);

    Event_model::updateOrCreate(
        ['serial_number' => $serial_number, 'module' => 'Windows'],
        [
            'os_version_win' => $data['os_version'],
            'cpu_win' => $data['cpu'],
            'ram_win' => $data['ram'],
            'disk_win' => json_encode($data['disk']),
            'type' => $data['type'],
            'msg' => $data['msg'],
        ]
    );
}