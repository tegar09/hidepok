<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = 'volunteers';

    protected $primarykey ='id_volunteer';

    public $timestampss =false;
}
