@extends('theme.base')

@section('content')
    <div class="container py-5">
        <h1>Hola Mundo!</h1>
        <a href="{{ route('client.index') }}" class="btn btn-primary">Clientes</a>

    </div>    
@endsection