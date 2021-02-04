<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Folder extends Model
{
    use HasFactory;

    protected $table = 'folders';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
