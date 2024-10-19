@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Lista de Livros</h1>

                    <a href="{{ route('livros.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Novo Livro</a>

                    <div class="overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 dark:text-gray-300 uppercase tracking-wider">Titulo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 dark:text-gray-300 uppercase tracking-wider">Autor</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 dark:text-gray-300 uppercase tracking-wider">Editora</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 dark:text-gray-300 uppercase tracking-wider">Isbn</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 dark:text-gray-300 uppercase tracking-wider">Ano de publicação</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-800">
                                @forelse ($livros as $livros)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $livros->titulo}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $livros->autor}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $livros->editora}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $livros->isbn}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $livros->ano_de_nascimento}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('livros.edit', $livros->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                                            <form action="{{ route('livros.destroy', $livros->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-gray-500 dark:text-gray-300">Nenhum aluno encontrado.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Exibe os links de paginação -->
                        <div class="mt-4">
                            {{ $livros->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
