<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Folder extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'folders';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
