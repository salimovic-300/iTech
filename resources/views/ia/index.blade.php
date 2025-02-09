<!-- resources/views/ia/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Services IA Personnalisés</h1>
@foreach ($services as $service)
    <div>
        <h2>{{ $service->name }}</h2>
        <p>{{ $service->description }}</p>
        <p>Prix : {{ $service->price }} €</p>
    </div>
@endforeach
@endsection