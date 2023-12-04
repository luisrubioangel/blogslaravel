<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updates_at', '_token'];

    //Relacion uno a muchos inveersa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function catergory()
    {
        return $this->belongsTo(catergory::class);
    }

    //Relacion muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //RElacion uno a uno polimmorfia
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
