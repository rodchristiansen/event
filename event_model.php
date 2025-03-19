<?php

use munkireport\models\MRModel as Eloquent;

class Event_model extends Eloquent
{
    protected $table = 'event';

    protected $fillable = [
        'serial_number',
        'os_version_win',
        'cpu_win',
        'ram_win',
        'disk_win',
        'type',
        'module',
        'msg',
        'data',
        'timestamp',
    ];

    public $timestamps = false;
}