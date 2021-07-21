@extends('layouts.app')


@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Cars</h1>
        </div>

        <div class="pt-10">
            <a href="cars/create" class="border-b-2 border-dotted italic text-gray">
                Add a new car &rarr;
            </a>
        </div>

        <div class="py-10 w-5/6">
            @foreach ($cars as $car)

            <div class="m-auto">
                <div class="float-right">

                    <a href="cars/{{ $car->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">
                        Edit &rarr;
                    </a>

                    <form action="/cars/{{ $car->id }}" method="post" class="pt-3">
                        @csrf
                        @method("delete")
                        <button type="submit" class="border-b-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>

                </div>

                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span>

                <h2 class="text-gray-700 text-5xl">{{ $car->name }}</h2>
                <p class="text-lg text-gray-700 py-6">{{ $car->description }}.</p>
                <hr class="mt-4 mb-4">
            </div>
            @endforeach
        </div>
    </div>
@endsection