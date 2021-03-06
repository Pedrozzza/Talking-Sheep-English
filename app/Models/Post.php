<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function folders(){
        return $this->belongsTo('App\Models\Folder');
    }
}
