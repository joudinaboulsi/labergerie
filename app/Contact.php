<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table="contacts";
    protected $fillable= ['page_title','page_subtitle','title_form'];
}
