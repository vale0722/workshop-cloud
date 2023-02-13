@extends('layout')
@section('content')
    <div class="text-gray-600 body-font bg-gray-50 h-min-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center">
            <div class="container px-5 mx-auto">
                <h2 class="text-gray-900 text-lg font-bold w-full py-4">Participantes:</h2>
               <logs-list>
               </logs-list>
            </div>
        </div>
    </div>
@endsection
