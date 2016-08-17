<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $table = 'decks';

    protected $guarded = ['id'];

    public $timestamps = false;
}
