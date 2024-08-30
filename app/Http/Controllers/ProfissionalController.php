<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Profissional::all();

        // dd($dados);

        return view("profissional.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidade = Especialidade::all();

        return view("profissional.form",['especialidade'=>$especialidade]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Profissional::create(
            [
                'nome' => $request->nome,
                'especialidade_id' => $request->especialidade_id,
                'contato' => $request->contato,
                'descricao' => $request->descricao,



            ]
        );
        return redirect('profissional');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profissional $profissional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profissional $profissional)
    {
        $dado = Profissional::findOrFail($id);

        $especialidade = Especialidade::all();


        return view("profissional.form", [
            'dado' => $dado,
            'profissional'=> $profissional
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profissional $profissional)
    {
        Profissional::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'especialidade_id' => $request->especialidade_id,
                'contato' => $request->contato,
                'descricao' => $request->descricao,
            ]
        );
        return redirect('profissional');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Profissional::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('profissional');
    }

    public function search(Request $request)
    {


        if (!empty($request->nome)) {
            $dados = Profissional::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Profissional::all();
        }
        // dd($dados);

        return view("profissional.list", ["dados" => $dados]);
    }

}
