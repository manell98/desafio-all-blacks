<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class XmlController extends Controller
{
    public function clientesXml() 
    {
        $xml = simplexml_load_file('../storage/app/public/xml/clientes.xml');

        return view('admin.xml.clientes-xml', compact('xml'));
    }

    public function cadastraClienteXml($email)
    {
        $xml = simplexml_load_file('../storage/app/public/xml/clientes.xml');

        return view('admin.xml.cadastra-cliente-xml', compact('xml', 'email'));
    }

    public function formXml() 
    {
        return view('admin.xml.upload-xml');
    }

    public function uploadXml(Request $request) 
    {
        if( $request->hasFile('xml') ) {
 
            $file = $request->file('xml');

            $upload = $file->storeAs('xml', 'clientes.xml');
            
            if( $upload ) 
                return redirect()->route('torcedores.clientesXml')->with(['success' => 'Arquivo XML salvo com sucesso!']);
            else
                return redirect()->route('torcedores.clientesXml')
                            ->withErrors(['errors' => 'Erro no Upload'])
                            ->withInput();
        }
    }
}
