@extends('layouts.app')

@section('content')

<h2>Produits</h2>

@foreach($products as $product)

<div>

<h3>{{ $product['name'] }}</h3>

<p>{{ $product['description'] }}</p>

<p>Prix : {{ $product['price'] }} €</p>

<a href="{{ route('produit.detail',$product['id']) }}">
Voir détail
</a>

</div>

@endforeach

@endsection