<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;

class Post extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function folders(){
        return $this->belongsTo('App\Models\Folder');
    }
}
