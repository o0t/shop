@extends('layouts.app')
@section('title','الماوس')
@push('css')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" /> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/_cards.css') }}" />
@endpush

@section('content')


        @include('_inc.cards')

@endsection
