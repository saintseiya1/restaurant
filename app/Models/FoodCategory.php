<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;
    protected $table = 'food_categories';
    public function food_items() {
        return $this->hasMany('App\Models\FoodItem', 'category_id');
    }
}
