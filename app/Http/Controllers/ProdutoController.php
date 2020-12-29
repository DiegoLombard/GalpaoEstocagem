<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Marca;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(5);
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        return view('produtos.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Produto::create($dados);

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function exibir($id)
    {
        $produto = Produto::find($id);
        return view('produtos.exibir', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $marcas = Marca::all();

        return view('produtos.edit', compact('produto', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $dados = $request->all();
        $produto->update($dados);
        return redirect()->route('produtos.index');
    }
    public function delete($id)
    {
        $produto = Produto::find($id);

        return view('produtos.delete', compact('produto'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id)->delete();
        return redirect()->route('produtos.index');
    }
    public function buscar(Request $request)
    {
        $produtos = Produto::where('descricao','LIKE', "%{$request->buscar}%") ->paginate();
        return view('produtos.index', compact('produtos'));
    }
}
