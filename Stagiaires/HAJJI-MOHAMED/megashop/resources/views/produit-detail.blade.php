@extends('layouts.app')

@section('content')

<h2>{{ $product['name'] }}</h2>

<p>{{ $product['description'] }}</p>

<p>Prix : {{ $product['price'] }} €</p>

<p>Stock : {{ $product['stock'] }}</p>

<h3>Specifications</h3>

<ul>

@foreach($product['specs'] as $key=>$value)

<li>{{ $key }} : {{ $value }}</li>

@endforeach

</ul>

@endsection