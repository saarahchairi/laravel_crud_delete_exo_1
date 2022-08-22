@extends('layout.index')

@section('content')
<form action="/membres/create" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="age" placeholder="age">
    <input type="text" name="gender" placeholder="gender">
    <input type="submit" name="submit">
</form>
@endsection
