<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post">

                <label class="text-white" for="name">Contact Name</label>
                <input class="form-input" type="text" name="name" value="{{$contact->name}}" required/> <br/>

              

                <label class="text-white" for="number">Number</label>
                <input class="form-input" type="text" name="number" value="{{$contact->phone_number}}" required /> <br/>


                <label class="text-white" for="note">Note</label>
                <input class="form-input" type="text" name="note" value="{{$contact->note}}"/> 



            </form>
        </div>
    </div>

</x-app-layout>