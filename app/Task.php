<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = "task"; //Eloquent sets table names in plural by default. If we don't like it this way, we need to override it 
}
