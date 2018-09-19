<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;


class Ingredients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ingredient::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // get post request data for title and article
    $data = $request->only([
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
        ]);

    // create article with data and store in DB
    $ingredient = Ingredient::create($data);

    // return the article along with a 201 status code
    return response($ingredient, 201);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ingredient::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $ingredient = Ingredient::find($id);
    $ingredient->delete();

    // use a 204 code as there is no content in the response
    return response(null, 204);
}
}
