<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torcedores;
use App\Exports\TorcedoresExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Admin\TorcedorFormRequest;
use DB;

class TorcedorController extends Controller
{

    private $torcedores;
    protected $totalPage = 15;
    
    public function __construct(Torcedores $torcedores) {
        
        $this->torcedores = $torcedores;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torcedores = $this->torcedores->orderBy('nome', 'asc')->paginate($this->totalPage);

        return view('admin.torcedores.index', compact('torcedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.torcedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TorcedorFormRequest $request)
    {
        $data = $request->all();        
              
        $insert = $this->torcedores->create($data);

        DB::table('torcedores')->where('id', $insert->id)->update(['ativo' => 'Sim']);
        
        if( $insert )
            return redirect()
                        ->route('torcedores.index')
                        ->with(['success' => 'Cadastro realizado com sucesso!']);
        else
            return redirect()->route('torcedores.create')
                            ->withErrors(['errors' => 'Falha ao cadastrar!'])
                            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $torcedor = $this->torcedores->find($id);

        return view('admin.torcedores.edit', compact('torcedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TorcedorFormRequest $request, $id)
    {
        $torcedores = $this->torcedores->find($id);

        $data = $request->all();
        
        if ( $torcedores->update($data) )
            return redirect()
                        ->route('torcedores.index')
                        ->with(['success' => 'Alteração realizada com sucesso!']);
        else
            return redirect()
                        ->route('torcedores.edit', ['id' => $id])
                        ->withErrors(['errors' => 'Falha ao editar'])
                        ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // desativar torcedor
    {
        $torcedores = $this->torcedores->find($id);

        $desativa = $torcedores->update(['ativo' => 'Não']);

        if( $desativa ) {
            return redirect()->route('torcedores.index')->with(['success' => 'Desativado com sucesso!']);
        } else {
            return redirect()->route('torcedores.index', ['id' => $id])
                                        ->withErrors(['errors' => 'Falha ao desativar']);
        }
    }

    public function ativaTorcedor(TorcedorFormRequest $request, $id) // ativar torcedor
    {
        $torcedores = $this->torcedores->find($id);

        $ativa = $torcedores->update(['ativo' => 'Sim']);
        
        if( $ativa ) {
            return redirect()->route('torcedores.index')->with(['success' => 'Ativado com sucesso!']);
        } else {
            return redirect()->route('torcedores.index', ['id' => $id])
                                        ->withErrors(['errors' => 'Falha ao ativar']);
        }
    }

    public function export() 
    {
        return Excel::download(new TorcedoresExport, 'clientes.xlsx');
    }

    public function formMail() 
    {
        $torcedores = $this->torcedores->orderBy('nome', 'asc')->get();

        return view('admin.torcedores.form-mail', compact('torcedores'));
    }

    public function enviaEmail(Request $request)
    {
        $email = $request->email;
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;

        Mail::send('admin.torcedores.mensagem-mail', ['mensagem' => $mensagem], function ($message) use ($email, $assunto) {
            $message->from('dfmanu06@gmail.com', 'Emanuell Santos');
            $message->subject($assunto);
            $message->to($email);
        });
        
        return redirect()->route('torcedores.email')->with(['success' => 'E-mail enviado com sucesso!']);
    }
}