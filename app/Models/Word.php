<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $table = 'words';

    protected $fillable = ['word'];

    public $timestamps = false;

    // public function histories()
    // {
    //     return $this->hasMany(History::class);
    // }

    // public function favorites()
    // {
    //     return $this->hasMany(Favorite::class);
    // }
}
