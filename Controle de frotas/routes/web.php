<?php



Route::resource('/lista-veiculo', 'Painel\VeiculoController');
Route::resource('/cad-edit-veiculo', 'Painel\VeiculoController');
Route::resource('/lista-motorista', 'Painel\MotoristaController');
Route::get('/teste' , 'Painel\MotoristaController@teste');
Route::resource('/cad-edit-motorista', 'Painel\MotoristaController');
Route::get('/manutencoes', 'Painel\ManutencaoController@index');



//Route::get('/veiculos/cadastra-veiculo', 'Painel\VeiculoController@cadastraVeiculo');

