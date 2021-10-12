<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $fillable = ['unidade_id'];
    protected $connection = 'app';
    protected $table = 'reuniaos';
    public $timestamps = false;

}
