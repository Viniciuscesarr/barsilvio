<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Note;
use App\Models\Product;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('site.note', ['notes' => $notes]);
    }
    public function create(){
        $products = Product::all();
        $clients = Client::all();

        return view('create.createnotes', ['clients' => $clients], ['products' => $products]);
    }
    public function store(Request $request){
        $note = new Note;

        $note->name = $request->name;
        $note->products = $request->products;
        $note->value = $request->value;

        $note->save();

        return redirect('/notinhas');
    }
    public function destroy($id){
        Note::findOrFail($id)->delete();
        return redirect('/notinhas');
    }
    public function detail($id){
        $note = Note::findOrFail($id);
        return view('site.detail', ['note' => $note]);
    }
    public function edit($id){
        $note = Note::findOrFail($id);

        return view('edit.noteedit', ['note' => $note]);
    }
    public function update(Request $request){
        Note::findOrFail($request->id)->update($request->all());

        return redirect('/notinhas');
    }
}
