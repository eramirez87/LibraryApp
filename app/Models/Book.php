<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='books';
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'name',
        'author',
        'category',
        'published_date',
        'user'
    ];

    public function _category(){
        return $this->belongsTo(Category::class, 'category');
    }
    public function _user(){
        return $this->belongsTo(User::class, 'user', 'user_id');
    }
}
