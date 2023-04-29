<?php

namespace App\Http\Controllers;

use App\Http\Resources\Categoriy\CategoriyResource;
use App\Services\Categoriy\StoreCategoriy;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class CategoriyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $return=app(StoreCategoriy::class)->execute($request->all());
      try {
          return new CategoriyResource($return);
      }catch (ValidationException $exception){
          return $exception->validator->errors()->all();
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
         */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
