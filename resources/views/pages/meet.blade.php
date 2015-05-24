@extends('app')

@section('content')
    <h2>Meet the Team</h2>
    @foreach($team as $member )
    {{ $member->first_name }}
    @endforeach
@stop
