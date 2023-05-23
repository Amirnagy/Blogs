<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    protected $table = 'posts';

    public $translatedAttributes = [
        'title',
        'content',
        'smallDesc'
    ];
    protected $fillable = [
        'id',
        'category_id',
        'image',
        'smallDesc',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
