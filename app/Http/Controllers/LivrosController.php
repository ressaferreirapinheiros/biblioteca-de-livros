<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LIvros;

class LivrosController extends Controller
{
    
        public function index() {
            $livros=Livros::paginate(10);
            return view('livros.index', compact('livros'));
        }
    
        public function create() {
            return view ('Livros.create');
    
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'titulo' => 'required',
                'autor' => 'required',
                'editora' => 'required',
                'isbn' => 'required|unique:livros,isbn',
                'ano_publicacao' => 'required|integer'
            ]);
            Livros::create($request->all());
            return redirect()->route('livros.index');
        }
    
        public function edit(Livros $livros) {
            return view('livros.edit', compact('livros'));
        }
    
        public function update(Request $request, Livros $livros){
            $request->validate([
                'titulo' => 'required',
                'autor' => 'required',
                'editora' => 'required',
                'isbn' => 'required|unique:livros,isbn,' . $livro->id,
                'ano_publicacao' => 'required|integer',
            ]);
            $livros->update($request->all());
            return redirect()->route('livros.index');
        }
    
        public function destroy(livros $livros) {
            $livro->delete();
            return redirect()->route('livros.index');
        
    
    }
    
}
