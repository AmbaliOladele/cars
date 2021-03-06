@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/9 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Post
            </h1>
        </div>
    </div>

    <div class="flex justify-center py-20">
        <form action="/cars/{{$car->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                    name="name"
                    value="{{$car->name}}"
                >

                <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                    name="founded"
                    value="{{$car->founded}}"
                > 

                <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                    name="description"
                    value="{{$car->description}}"
                > 

                <button 
                    type="submit"
                    class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                    uppercase font-bold">
                        Submit
                </button>
            </div>
        </form>
    </div>
@endsection