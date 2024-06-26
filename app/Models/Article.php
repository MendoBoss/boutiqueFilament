<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'prix',
        'stock',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
