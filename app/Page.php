<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // We don't want anything writing to these fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

}
