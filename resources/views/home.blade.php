@extends('layouts.app')
@section('title','Trade Retail | Home')
@section('content')
<center><br><br>
<h1>Anda sudah login, {{ Auth::user()->name }}</h1>
</center>
@endsection
