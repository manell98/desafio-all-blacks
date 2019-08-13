<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torcedores;
use DB;

class TorcedorController extends Controller
{

    private $torcedores;
    protected $totalPage = 10;
    
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
    public function store(Request $request)
    {
        $data = $request->all();        
              
        $insert = $this->torcedores->create($data);

        DB::table('torcedores')->where('id', $insert->id)->update(['ativo' => '1']);
        
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clientesXml() 
    {
        $xml = simplexml_load_file('../public/xml/clientes.xml');

        return view('admin.torcedores.clientes-xml', compact('xml'));

    }

    public function cadastraClienteXml($email)
    {
        $xml = simplexml_load_file('../public/xml/clientes.xml');

        return view('admin.torcedores.cadastra-cliente-xml', compact('xml', 'email'));
    }
}
