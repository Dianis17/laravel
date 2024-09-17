<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class);

Route::get('cursos', function (){
    return "Bienvenido a la pagina cursos";
});


//cursos/javascript


Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});


Route::get('cursos/{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso:$curso";
    }

});





































 



