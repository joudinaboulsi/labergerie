<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    //
    protected $table= "data_bookings";
    public $timestamps = false;
    protected $fillable = ['name','email','phone','start','end'];
}
