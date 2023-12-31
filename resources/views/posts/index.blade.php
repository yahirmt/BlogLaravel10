<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="mb-4">
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">
                                    {{$post->title}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="http://" target="_blank" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4" id="">
                                    <form action="{{route('posts.destroy', $post)}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="bg-gray-800 text-white rounded px-4 py-2" onclick="return confirm('Desea Eliminar?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
