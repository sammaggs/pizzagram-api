<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IngredientListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "ingredient" => $this->ingredient,
            "description" => $this->description,
            "isBase" => $this->isBase,
            "isSauce" => $this->isSauce,
            "isTopping" => $this->isTopping,
            "isMeat" => $this->isMeat,
            "isFish" => $this->isFish,
            "isCheese" => $this->isCheese,
            "isVegetable" => $this->isVegetable,
            "isSalad" => $this->isSalad,
            "isFungi" => $this->isFungi,
            "isExtra" => $this->isExtra,
            "isVegan" => $this->isVegan,
            "isVegetarian" => $this->isVegetarian,
            "isGlutenFree" => $this->isGlutenFree,
            "isKosher" => $this->isKosher,
            "isHalal" => $this->isHalal
        ];
    }
}
