<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

     protected $fillable = [
        'title', 'content', 'fen','semester','created','times','status'
    ];
}