<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{ route('contact.store') }}">
                @csrf
                <label class="text-white" for="name">Contact Name</label>
                <input class="form-input" type="text" name="name" required/> <br/>

                @error('name')
                    <p style="color:red;">{{ $message }}</p>
                @enderror

                <label class="text-white" for="number">Number</label>
                <input class="form-input" type="text" name="number" required /> <br/>

                @error('number')
                    <p style="color:red;">{{ $message }}</p>
                @enderror

                <label class="text-white" for="note">Note</label>
                <input class="form-input" type="text" name="note" /> 

                @error('note')
                    <p style="color:red;">{{ $message }}</p>
                @enderror     
                
                <button type="submit" class="btn btn-primary bg-white">Submit</button>

            </form>
        </div>
    </div>
</x-app-layout>
