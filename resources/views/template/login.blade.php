@extends('template.layout')

@section('title','Login Page')

@section('main')
<div class="main">
    <h1>User Login</h1>
    <form method="get" action="">
        <input type="text" name="name" placeholder="Enter Name">
        <br/>
        <br/>
        <input type="password" name="password" placeholder="Enter Password">
        <br/>
        <br/>
        <button type="button" class="btn btn-primary">Login</button>
    </form>
</div>

@endsection