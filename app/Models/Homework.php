<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Homework extends Model
{
    use HasFactory;

    public $table = 'homeworks';

    public function user() {

        return $this->belongsTo(User::class);
    }
}
