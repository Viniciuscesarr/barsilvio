<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        

        return view('site.clients', ['clients' => $clients]);
    }
    public function create(){
        return view('create.createclients');
    }
    public function store(Request $request){
        
        $client = new Client;

        $client->name = $request->name;
        $client->andress = $request->andress;
        $client->apelido = $request->apelido;

        $client->save();

        return redirect('/clientes');
    }
    public function destroy($id){
        Client::findOrFail($id)->delete();
        return redirect('/clientes');
    }
    public function edit($id){
        
        $client = Client::findOrFail($id);

        return view('edit.clientedit', ['client' => $client]);
    }
    public function update(Request $request){
        Client::findOrFail($request->id)->update($request->all());
        

        return redirect('/clientes');
    }
}
