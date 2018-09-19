<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    // Only allow the title and article field to get updated via mass assignment
    protected $fillable = [

         "ingredient",
         "description",
         "isBase",
         "isSauce",
         "isTopping",
         "isMeat",
         "isFish",
         "isCheese",
         "isVegetable",
         "isSalad",
         "isFungi",
         "isExtra",
         "isVegan",
         "isVegetarian",
         "isGlutenFree",
         "isKosher",
         "isHalal"
         
        ];
}
