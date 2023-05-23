<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 'id', 'setting_id', 'address', 'locale', 'title', 'content' ];
}
