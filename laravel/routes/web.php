<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = config('pasta');

    $lunghe = [];
    $corte = [];
	$cortissime = [];
				
    foreach ($data as $key => $pasta) {

		$pasta['position'] = $key;

			if ($pasta['tipo'] == 'lunga') {
				$lunghe[] = $pasta;
			} else if ($pasta['tipo'] == 'corta') {
				$corte[] = $pasta;
			} else if ($pasta['tipo'] == 'cortissima') {
				$cortissime[] = $pasta;
			}
    }
	return view('home' , compact('lunghe', 'corte', 'cortissime')
	// [
    //   "lunghe" => $lunghe,
    //   "corte" => $corte,
    //   "cortissime" => $cortissime
	// ]
	);
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');



Route::get('/prodotto/{id}', function ($id) {
	$data = config('pasta');

	$prev = $id - 1;
	$next = $id + 1;

	if ($id == 0) {
		$prev = count($data) - 1;
	} else if ($id == count($data) - 1){
		$next = 0;
	}

	return view('product', [
		'product' => $data[$id],
		'id' => $id,
		'prev' => $prev,
		'next' => $next

	]);
})->name('prodotto');