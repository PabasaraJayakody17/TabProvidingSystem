@extends('layouts.admin')

@section('content')

Hello {{auth()->user()->name}} ...
@endsection