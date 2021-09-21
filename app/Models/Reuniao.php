<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $fillable = ['unidade_id'];
    protected $connection = 'mysql';
    protected $table = 'reuniao';
    public $timestamps = false;

}
