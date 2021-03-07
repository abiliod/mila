<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product\Colecao;
use App\Models\Product\Modelo;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use App\Models\Admin\Pagina;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{


    public function search(Request $request)
    {
//        $modelos = Modelo::all();
//        $colecaos = Colecao::all();
//        $registros = DB::table('products')
//            ->join('modelos', 'products.modelo_id', '=', 'modelos.id')
//            ->join('colecaos', 'products.colecao_id', '=', 'colecaos.id')
//            ->select('products.*','modelos.modelo_description','colecaos.colecao_description')
//            ->where('referencia', '=',$request->all()['search'])
//            ->OrWhere('sub_category', '=',$request->all()['search'])
//            ->OrWhere([['descricao', 'LIKE', '%' . $request->all()['search'] .'%' ]])
//            ->OrWhere([['composicao', 'LIKE', '%' . $request->all()['search'] .'%' ]])
//            ->orderBy('products.id')
//            ->paginate(16);
//        return view('welcome', compact('registros', 'modelos','colecaos'));
        return view('welcome');
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $modelos = Modelo::all();
//        $colecaos = Colecao::all();
//        $registros = DB::table('products')
//            ->join('modelos', 'products.modelo_id', '=', 'modelos.id')
//            ->join('colecaos', 'products.colecao_id', '=', 'colecaos.id')
//            ->select('products.*','modelos.modelo_description','colecaos.colecao_description')
//            ->orderBy('products.id')
//            ->paginate(16);
//        return view('welcome', compact('registros', 'modelos','colecaos'));
        return view('welcome');

    }
    public function contato() //
    {
        $pagina = Pagina::where('tipo','=','contato')->first();

        return view('contact_site',compact('pagina'));
       // return view('contact_site');
    }
    public function sobre() //
    {
        $pagina = Pagina::where('tipo','=','sobre')->first();

        return view('about_site',compact('pagina'));
     //   return view('about_site');
    }



}
