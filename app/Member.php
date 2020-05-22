<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";
    public $primarykey = "id";
    public $timestamp = true;

    protected $fillable = [
        'fname', 'lname', 'position','img_path',
    ];
}
