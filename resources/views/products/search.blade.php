@extends('layouts.app')

@section('content')
    <h1>Recherche de produits</h1>

    <form action="{{ route('products.search') }}" method="GET">
        <input type="text" name="name" placeholder="Nom du produit" value="{{ request('name') }}">
        <input type="number" name="min_price" placeholder="Prix minimum" value="{{ request('min_price') }}">
        <input type="number" name="max_price" placeholder="Prix maximum" value="{{ request('max_price') }}">
        <input type="number" name="stock" placeholder="Stock minimum" value="{{ request('stock') }}">
        <select name="sort_by">
            <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Nom</option>
            <option value="price" {{ request('sort_by') == 'price' ? 'selected' : '' }}>Prix</option>
            <option value="stock" {{ request('sort_by') == 'stock' ? 'selected' : '' }}>Stock</option>
        </select>
        <select name="sort_dir">
            <option value="asc" {{ request('sort_dir') == 'asc' ? 'selected' : '' }}>Ascendant</option>
            <option value="desc" {{ request('sort_dir') == 'desc' ? 'selected' : '' }}>Descendant</option>
        </select>
        <button type="submit">Rechercher</button>
    </form>

    <ul>
        @foreach ($products as $product)
            <li>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Prix: {{ $product->price }} €</p>
                <p>Stock: {{ $product->stock }}</p>
            </li>
        @endforeach
    </ul>

    {{ $products->appends(request()->input())->links() }}
@endsection