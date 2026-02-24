@extends('layouts.app')

@section('content')

<h2>Categories</h2>

@foreach($categories as $cat)

<div>

<h3>{{ $cat['icon'] }} {{ $cat['name'] }}</h3>

<p>{{ $cat['description'] }}</p>

<a href="{{ route('categorie.produits',$cat['id']) }}">
Voir Produits
</a>

</div>

@endforeach

@endsection