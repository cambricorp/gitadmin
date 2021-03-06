@php
    $active = 'dashboard';
@endphp

@extends('layouts.app')

@section('content')
    <h2><i class="fa fa-tachometer"></i> Dashboard</h2>

    @include('user._show', [
        'repositories' => $repositories,
        'keys' => $keys,
        'user' => $theUser,
        'dashboard' => true,
    ])
@endsection
