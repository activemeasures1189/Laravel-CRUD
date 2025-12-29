<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get('/', function () {
    return view('home');
});

// MENU ROUTE
Route::get('/menu', function(){
    $sql = "select * from burgers";
    $data = DB::select($sql);
    return view('menu')->with('data', $data);

});

// ITEM DETAILS ROUTE
Route::get('/item/{id}', function($id){

    $sql = "SELECT * FROM burgers WHERE id = ?";
    $data = DB::select($sql, [$id]);
    // $data = $data[0];

    return view('itemdetails')->with('data', $data);
});

// UPDATE ITEM FORM ROUTE
Route::get('/edit/{id}', function($id){

     $sql = "SELECT * FROM burgers WHERE id= ?";
     $data = DB::select($sql, [$id]);

    return view('edititem')->with('data', $data);
});

// UPDATE ROUTE
Route::post('/item/{id}', function($id){


    $itemname = request('name');
    $itemdescription = request('description');
    $sql = "UPDATE burgers SET name = ?, description = ? WHERE id = ?";
    DB::update($sql, [$itemname, $itemdescription, $id]);
     return redirect('/menu');
});

// DELETE ROUTE
Route::delete('/menu/{id}', function($id){
    $sql = "DELETE FROM burgers WHERE id = ?";
    DB::delete($sql, [$id]);
    return redirect('/menu');
});










