@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    @parent
    @parent

    <p>This is appended to the master sidebar.</p>

    @parent
    @parent
    @parent
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
