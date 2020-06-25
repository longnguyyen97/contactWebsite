@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsam ex ratione porro dolor omnis dolores nihil necessitatibus aperiam recusandae natus quia tenetur quae earum soluta, pariatur ipsum deleniti! Repellendus!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection
