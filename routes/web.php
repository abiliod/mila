<?php


use App\Http\Controllers\Admin\PaginasController;
use App\Http\Controllers\Admin\PapelController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pessoa\PessoaController;
use App\Http\Controllers\Site\PaginaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;



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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ClientController::class, 'index'])->name('/');
Route::get('/welcome', [ClientController::class, 'index'])->name('index');
Route::get('/product_detail/{id}', [ClientController::class, 'product_detail'])->name('product_detail');

Route::get('/about_site', [ClientController::class, 'sobre'])->name('sobre');
Route::get('/contact_site', [ClientController::class, 'contato'])->name('contato');
Route::get('/cart_site', [ClientController::class, 'cart'])->name('cart');

Route::get('/checkout_site', [ClientController::class, 'checkout'])->name('checkout');
Route::get('/order_complete', [ClientController::class, 'order_complete'])->name('order_complete');
Route::get('/add_to_wishlist', [ClientController::class, 'add_to_wishlist'])->name('add_to_wishlist');
Route::get('/women', [ClientController::class, 'women'])->name('women');
Route::get('/men', [ClientController::class, 'men'])->name('men');
Route::post('/search', [ClientController::class, 'search'])->name('search');

//Cliente integaringo com paginas do site
Route::get('site/sobre', [PaginaController::class, 'sobre'])->name('site.sobre');
Route::get('site/contato', [PaginaController::class, 'contato'])->name('site.contato');
Route::put('site/contato/enviar', [PaginaController::class, 'enviarContato'])->name('site.contato.enviar');

Auth::routes();

//Administando o paginas do site
Route::get('/admins/paginas/', [PaginasController::class, 'index'])->name('admins.paginas');
Route::get('/admins/paginas/editar/{id}', [PaginasController::class, 'editar'])->name('admins.paginas.editar');
Route::put('/admins/paginas/atualizar/{id}', [PaginasController::class, 'atualizar'])->name('admins.paginas.atualizar');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('sair');



//Administando slides do site
Route::get('/admins/slides', [SlideController::class, 'index'])->name('admins.slides');
Route::get('/admins/slides/adicionar', [SlideController::class, 'adicionar'])->name('admins.slides.adicionar');
Route::post('/admins/slides/salvar', [SlideController::class, 'salvar'])->name('admins.slides.salvar');
Route::get('/admins/slides/editar/{id}', [SlideController::class, 'editar'])->name('admins.slides.editar');
Route::get('/admins/slides/deletar/{id}', [SlideController::class, 'deletar'])->name('admins.slides.deletar');
Route::put('/admins/slides/atualizar/{id}', [SlideController::class, 'atualizar'])->name('admins.slides.atualizar');


// Administrando Pessoas
Route::get('/admins/pessoas', [PessoaController::class, 'index'])->name('admin.pessoas');

Route::get('/admins/pessoas/entradaCPF_CNPJ/{id}', [PessoaController::class, 'showEntradaCPF_CNPJ'])->name('admin.pessoas.entradaCPF_CNPJ');
Route::post('/admins/pessoas/show', [PessoaController::class, 'show'])->name('admin.pessoas.show');
Route::delete('/admins/pessoas/deletar/{id}', [PessoaController::class, 'destroy'])->name('admin.pessoas.deletar');
Route::put('/admins/pessoas/atualizaPessoa', [PessoaController::class, 'atualizaPessoa'])->name('admin.pessoas.atualizaPessoa');
Route::get('/admins/pessoas/editarEndereco/{id}', [PessoaController::class, 'edicaoEndereco'])->name('admin.pessoas.editarEndereco');



Route::get('/admins/pessoas/adicionarEndereco/{id}', [PessoaController::class, 'adicionarEndereco'])->name('admin.pessoas.adicionarEndereco');
Route::delete('/admins/pessoas/deletarEndereco/{id}', [PessoaController::class, 'destroyEndereco'])->name('admin.pessoas.deletarEndereco');
Route::get('/admins/pessoas/entradaCEP/{id}', [PessoaController::class, 'showEntradaCEP'])->name('admin.pessoas.entradaCEP');
Route::get('/admins/pessoas/createEndereco', [PessoaController::class, 'createEndereco'])->name('admin.pessoas.createEndereco');
Route::post('/admins/pessoas/enderecoSalvar', [PessoaController::class, 'enderecoSalvar'])->name('admin.pessoas.enderecoSalvar');
Route::put('/admins/pessoas/atualizaEndereco', [PessoaController::class, 'atualizaEndereco'])->name('admin.pessoas.atualizaEndereco');
Route::get('/admins/pessoas/adicionarPessoa', [PessoaController::class, 'showFormAdicionarPessoa'])->name('admin.pessoas.adicionarPessoa');
Route::post('/admins/pessoas/addPessoa', [PessoaController::class, 'addPessoa'])->name('admin.pessoas.addPessoa');
Route::post('/admins/pessoas/{search?}', [PessoaController::class, 'search'])->name('admin.pessoas.search');



//Administando o Autorizações para Usuários do site
Route::get('/admins/papel', [PapelController::class, 'index'])->name('admin.papel');
Route::get('/admins/papel/adicionar', [PapelController::class, 'adicionar'])->name('admin.papel.adicionar');
Route::post('/admins/papel/salvar', [PapelController::class, 'salvar'])->name('admin.papel.salvar');
Route::get('/admins/papel/editar/{id}', [PapelController::class, 'editar'])->name('admin.papel.editar');
Route::put('/admins/papel/atualizar/{id}', [PapelController::class, 'atualizar'])->name('admin.papel.atualizar');
Route::get('/admins/papel/deletar/{id}', [PapelController::class, 'deletar'])->name('admin.papel.deletar');


//Administando o Usuários do site
Route::get('/admins/usuarios', [UsuarioController::class, 'index'])->name('admin.usuarios');
Route::get('/admins/usuarios/adicionar', [UsuarioController::class, 'adicionar'])->name('admin.usuarios.adicionar');
Route::post('/admins/usuarios/salvar', [UsuarioController::class, 'salvar'])->name('admin.usuarios.salvar');
Route::get('/admins/usuarios/editar/{id}', [UsuarioController::class, 'editar'])->name('admin.usuarios.editar');
Route::put('/admins/usuarios/atualizar/{id}', [UsuarioController::class, 'atualizar'])->name('admin.usuarios.atualizar');
Route::get('/admins/usuarios/deletar/{id}', [UsuarioController::class, 'deletar'])->name('admin.usuarios.deletar');
Route::post('/admins/usuarios/{search?}', [UsuarioController::class, 'search'])->name('admin.usuarios.search');


//Administando o Papeis Usuários do site

Route::get('/admins/usuarios/papel/{id}', [UsuarioController::class, 'papel'])->name('admin.usuarios.papel');
Route::post('/admins/usuarios/papel/salvar/{id}', [UsuarioController::class, 'salvarPapel'])->name('admin.usuarios.papel.salvar');
Route::get('/admins/usuarios/remover/{id}/{papel_id}', [UsuarioController::class, 'removerPapel'])->name('admin.usuarios.papel.remover');


//Administando o Permissões para Usuários do site
Route::get('/admins/papel/permissao/{id}', [PapelController::class, 'permissao'])->name('admin.papel.permissao');
Route::post('/admins/papel/permissao/{id}/salvar', [PapelController::class, 'salvarPermissao'])->name('admin.papel.permissao.salvar');
Route::post('/admins/papel/permissao/{id}/remover/{id_permissao}', [PapelController::class, 'removerPermissao'])->name('admin.papel.permissao.remover');



//Administando Produtos do site


/**
 * index – Lista os dados da tabela
 * create – Retorna a View para criar um item da tabela
 * show – Mostra um item específico
 * store – Salva o novo item na tabela
 * edit – Retorna a View para edição do dado
 * update – Salva a atualização do dado
 * destroy – Remove o dado
 */
