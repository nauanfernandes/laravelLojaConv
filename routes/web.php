<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FeedbackController;


Route::get('/', [ProdutoController::class, 'indexsite']);
Route::get('/sobre', [SobreController::class, 'index']);
Route::get('/fornecedores', [FornecedorController::class, 'indexsite']);
Route::post('/salvar_form', [FormController::class, 'salvar_novo']);
Route::get('/feedbacks', [FeedbackController::class, 'site']);
Route::post('/salvar_feedback', [FeedbackController::class, 'salvar_novo']);

Route::get('/contato', function () {
   return view(
      'form'
   );
});

Route::group(['prefix' => 'admin'], function () {
   Route::get('/', [HomeController::class, 'index']);
   Route::get('/fornecedores', [FornecedorController::class, 'index']);
   Route::get(
      '/novo_fornecedor',
      [FornecedorController::class, 'novo_fornecedor']
   );
   Route::post(
      '/salvar_fornecedor',
      [FornecedorController::class, 'salvar_novo']
   );
   Route::get(
      '/excluir_fornecedor/{cnpj}',
      [FornecedorController::class, 'excluir']
   );
   Route::get(
      '/editar_fornecedor/{cnpj}',
      [FornecedorController::class, 'editar']
   );
   Route::post(
      '/salvar_alteracao_fornecedor',
      [FornecedorController::class, 'salvar_alteracao']
   );
   Route::get(
      '/pesquisa_fornecedor',
      [FornecedorController::class, 'pesquisa']
   );
   Route::get('/produtos', [ProdutoController::class, 'index']);
   Route::get(
      '/novo_produto',
      [ProdutoController::class, 'novo_produto']
   );
   Route::post(
      '/salvar_produto',
      [ProdutoController::class, 'salvar_novo']
   );
   Route::get(
      '/editar_produto/{id}',
      [ProdutoController::class, 'alterar']
   );
   Route::post(
      '/salvar_alteracao_produto',
      [ProdutoController::class, 'salvar_alteracao']
   );
   Route::get(
      '/excluir_produto/{id}',
      [ProdutoController::class, 'excluir']
   );
   Route::get(
      '/sobre',
      [SobreController::class, 'editar']
   );
   Route::post(
      '/salvar_alteracao_sobre',
      [SobreController::class, 'salvar_alteracao']
   );
   Route::get(
      '/pesquisa_formulario',
      [FormController::class, 'pesquisa']
   );
   Route::get(
      '/form',
      [FormController::class, 'index']
   );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
