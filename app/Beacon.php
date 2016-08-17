<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    const TYPES = [
        0 => 'Eddystone'
    ];

    const STATUS = [
        0 => 'Inactive',
        1 => 'Active'
    ];

    protected $table = 'beacons';

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $attributes = [
        'type'      => 0,
        'status'    => 1
    ];

    public function getReadableStatus()
    {
        return self::STATUS[$this->status];
    }

    public function getReadableType()
    {
        return self::TYPES[$this->type];
    }

    public function hasUrl()
    {
        return !empty($this->url);
    }

    public function hasCard()
    {
        return $this->card_id > 0;
    }


}
