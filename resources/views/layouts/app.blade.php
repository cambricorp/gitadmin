@extends('layouts.main')

@section('main_content')
    <div class="ui secondary pointing menu">
        <a href="{{ route('dashboard') }}" class="item {{ ($active == 'dashboard') ? 'active' : '' }}">
            <i class="fa fa-tachometer"></i>&nbsp;Dashboard
        </a>
        @if ($theUser->admin)
            <a href="{{ route('user.index') }}" class="item {{ ($active == 'user') ? 'active' : '' }}">
                <i class="fa fa-user"></i>&nbsp;Benutzer
            </a>
        @endif
        @if ($theUser->admin)
            <a href="{{ route('repository.index') }}" class="item {{ ($active == 'repository') ? 'active' : '' }}">
                <i class="fa fa-database"></i>&nbsp;Repositories
            </a>
        @endif
        <div class="right menu">
            {!! Form::open(['route' => 'auth.logout', 'class' => 'ui item']) !!}
                <button type="submit" class="text-button">({{ $theUser->username }}) Abmelden</button>
            {!! Form::close() !!}
        </div>
    </div>

    @include('flash::message')

    <div class="ui segment">
        @yield('content')
    </div>
@endsection
