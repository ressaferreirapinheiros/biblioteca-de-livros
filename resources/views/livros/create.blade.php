<!-- resources/views/alunos/create.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo livro</h1>

                    <form action="{{ route('livros.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Titulo</label>
                            <input type="text" name="titulo" id="titulo" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                           
                            <label for="Autor" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor</label>
                            <input type="autor" name="autor" id="email" class="form-input mt-1 block w-full" required>
                            <label for="editora" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Editora</label>
                            <input type="editora" name="editora" id="email" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="isbn" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Isbn:</label>
                            <input type="isbn" name="isbn" id="isbn" class="form-input mt-1 block w-full" required>
                            <label for="ano_de_publicação" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ano de publicação</label>
                            <input type="ano_de_publicação" name="ano_de_publicação" id="isbn" class="form-input mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
