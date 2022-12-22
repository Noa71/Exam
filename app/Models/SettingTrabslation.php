<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTrabslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'setting_id', 'locale', 'title', 'content', 'address'];
}
