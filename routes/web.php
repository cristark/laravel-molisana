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

// | HOMEPAGE
Route::get('/', function () {
    return view('home');
})->name('homepage');

// | PAGINA PRODOTTI con collegamento ad array in config
Route::get('/prodotti', function () {
    $pasta = config('pasta');

    $pasta_lunga = array_filter($pasta, function($element) {
        return $element['tipo'] == 'lunga';
    });

    $pasta_corta = array_filter($pasta, function($element) {
        return $element['tipo'] == 'corta';
    });

    $pasta_cortissima = array_filter($pasta, function($element) {
        return $element['tipo'] == 'cortissima';
    });

    $data = [
        'tipi' => [
            'Le Lunghe' => $pasta_lunga,
            'Le Corte' => $pasta_corta,
            'Le Cortissime' => $pasta_cortissima
        ]
    ];

    return view('products', $data);
})->name('pag-prodotti');

// | PAGINA DETTAGLIO PRODOTTI
Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');

    // Controllo numero id per limitare i risultati a quelli contenuti nell'array
    if(is_numeric($id) && $id >= 0 $$ $id < count($pasta)) {
        $product = $pasta[$id];

        $data = ['dettagli' => $product];
        
        return view('details', $data);
    } else {
        abort('404');
    }

})->name('pag-details');

// | PAGINA NEWS con collegamento ad array creato personalmente in config
Route::get('/news', function () {
    $data = ['news' => config('news')];

    return view('news', $data);
})->name('pag-news');
