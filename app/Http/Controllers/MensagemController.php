<?php
namespace App\Http\Controllers;
use App\Mensagem;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class MensagemController extends Controller
{
    public function index()
    {
        $listaMensagens = Mensagem::all();
        return view('mensagem.list',['mensagens' => $listaMensagens]);
    }
    public function create()
    {
        return view('mensagem.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título',
            'description.required' => 'É obrigatório uma descrição',
            'author.required' => 'É obrigatório um autor',
            );
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'author' => 'required|string',
            );
        $validador = Validator::make($request->all(), $regras, $messages);
        if ($validador->fails()){
            return redirect('mensagens/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        $obj_Mensagem = new Mensagem();
        $obj_Mensagem->title = $request['title'];
        $obj_Mensagem->description = $request['description'];
        $obj_Mensagem->author = $request['author'];
        $obj_Mensagem->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!');
    }
    public function show($id)
    {
        $Mensagem = Mensagem::find($id);
        return view('mensagem.show',['mensagens' => $Mensagem]);
    }
    public function edit(Atividade $atividade)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        //
    }
}