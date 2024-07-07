@extends('layouts.app')

@section('main')
<ul>
    @foreach($products as $product)
    <li>@include('shared.product')</li>
    @endforeach
</ul>
@endsection