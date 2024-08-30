<?php

namespace App\Http\Controllers;

use App\Models\Tatuagem;
use App\Models\Profissional;
use Illuminate\Http\Request;

class TatuagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Tatuagem::all();

        // dd($dados);

        return view("tatuagem.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profissional = Profissional::all();

        return view("tatuagem.form",['profissional'=>$profissional]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tatuagem::create(
            [
                'profissional_id' => $request->profissional_id,
                'descricao' => $request->descricao,
                'local' => $request->local,
                'tamanho' => $request->tamanho,
                'estilo' => $request->estilo,
                'data' => $request->data,


            ]
        );
        return redirect('tatuagem');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tatuagem $tatuagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tatuagem $tatuagem)
    {
        $dado = Tatuagem::findOrFail($id);

        $profisional = Profissional::all();


        return view("tatuagem.form", [
            'dado' => $dado,
            'profissional'=> $profissional
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tatuagem $tatuagem)
    {
        Tatuagem::updateOrCreate(
            ['id' => $request->id],
            [
                'profissional_id' => $request->profissional_id,
                'descricao' => $request->descricao,
                'local' => $request->local,
                'tamanho' => $request->tamanho,
                'estilo' => $request->estilo,
                'data' => $request->data,
            ]
        );
        return redirect('tatuagem');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Tatuagem::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('tatuagem');
    }

    public function search(Request $request)
    {


        if (!empty($request->nome)) {
            $dados = Tatuagem::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Tatuagem::all();
        }
        // dd($dados);

        return view("tatuagem.list", ["dados" => $dados]);
    }

}
