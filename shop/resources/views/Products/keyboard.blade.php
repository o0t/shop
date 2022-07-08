@extends('layouts.app')
@section('title','الكيبورد')
@push('css')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" /> --}}
@endpush

@section('content')

                <br><br><br>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach ($keyboard as $item)
                    <div class="card mb-3" style="width:70%;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/'.$item->image )}}" class="img-fluid rounded-start" width="200" height="50" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title"> {{ $item->title }} </h5>
                            <p class="card-text">
                                    {{ $item->content }}
                            </p>
                            <p class="card-text"><h4> <small class="text-muted"> السعر: </small>  {{ $item->price }} </h4></p>

                            <br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <br>
                                <a href="{{ route('show', $item->id ) }}" class="btn btn-dark">عرض المزيد</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
                </div>
@endsection

