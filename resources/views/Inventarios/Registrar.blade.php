
@extends('Index')

@section('Contenido')


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Inventarios') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                
                <form action="{{url('/inventarios')}}" method="post">
                @csrf

                @include('Inventarios.Form',['modo'=>'Registrar']);
                </form>

                
            </div>
        </div>
    </div>
@endsection