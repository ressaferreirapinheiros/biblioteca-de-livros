<!-- resources/views/alunos/edit.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-10,xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-9 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Livros</h1>

                    <form action="{{ route('livros.update', $livros->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Titulo</label>
                            <input type="text" name="titulo" id="titulo" class="form-input mt-1 block w-full" value="{{ $livros->titulo}}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor:</label>
                            <input type="autor" name="email" id="autor" class="form-input mt-1 block w-full" value="{{ $livros->autor }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="matricula" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Editora</label>
                            <input type="text" name="editora" id="editora" class="form-input mt-1 block w-full" value="{{ $livros->editora}}" required>
                        </div>
                        <label for="isbn" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Isbn</label>
                        <input type="text" name="isbn" id="isbn" class="form-input mt-1 block w-full" value="{{ $livros->isbn}}" required>
                    </div>
                    <label for="ano_de_publicação" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ano de publicação</label>
                    <input type="text" name="ano_de_publicação" id="ano_de_publicação" class="form-input mt-1 block w-full" value="{{ $livros->ano_de_publicação}}" required>
                </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
