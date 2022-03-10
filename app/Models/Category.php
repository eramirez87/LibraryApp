<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function _category(){
        return $this->hasMany(Book::class, 'category');
    }
}
