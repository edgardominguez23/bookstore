<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $fillable = ['username','book','editorial','quantity','status','id_mensajeria'];
}
