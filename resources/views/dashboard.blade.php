<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('contact.create')}}">Crear contacto</a>
                </div>
                <div class="bg-white">
                   <ul>
                @forelse($contacts as $con)
                    <li><p>{{$con->name}}</p>
                        <a href="{{route('contact.show', $con->id)}}">View</a> ||
                        <a href="{{ route('contact.edit', ['contact' => $con->id]) }}">EDIT</a> |
                        <form method="post" action="{{route('contact.destroy', $con->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" />
                        </form>
                    </li>
                        @empty
                            <p>No data.</p>
                    @endforelse
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
