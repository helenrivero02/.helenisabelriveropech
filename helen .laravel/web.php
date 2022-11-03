route:: get ('/', function () {
    return view ('welcome ');
});

Route::get('fotos/{numero?}', funvtion ($numero = 'sin numero'){

    returm 'Estas en la galria de fotos :'.$numero;

})->where('numero', '[0-9]+');

Route:view8'galeria' ; 'fotos' , [ 'numero' => 125]);