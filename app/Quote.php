<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

final class Quote extends Model
{
    protected $table = 'quotes';
    protected $fillable = ['text', 'author', 'background'];
}