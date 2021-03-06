<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class protfolio extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'name','desc', ];
    
    public $translatable = ['name'];
}
