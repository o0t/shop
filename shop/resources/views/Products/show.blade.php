@extends('layouts.app')
@section('title','الماوس')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/show.css') }}" />

@endpush

@section('content')

                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($all as $item)
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

                            <br><br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <br>
                                <a href="#" class="btn btn-dark"> شراء المنتج </a>
                            </div>
                            </div>
                            <br><br><br><br>
                            <div>

                                <br><br>
                            </div>
                        </div>
                                {{-- Coment --}}
                                <div class="card-body">
                                    <h3 class="card-subtitle mb-2 text-muted">التعليقات</h3>
                                </div>


                                <form action="{{ route('coment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }} ">
                                    <div class="form-floating">
                                        <textarea name="coment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <br><br>

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-outline-success">ارسال</button>
                                        </div>
                                        <br><br>
                                    </div>
                                </form>

                                @foreach ($coments as $coments)
                                <div class="card mb-3" >
                                    <div class="card-header"> {{ $coments->name }} </div>
                                    <div class="card-body">
                                    <p class="card-text"> {{ $coments->coment }} </p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"> {{ $coments->created_at }} </p>
                                    </div>
                                </div>
                                <br><br>
                                @endforeach
                                {{-- Coment / End --}}

                        </div>
                        </div>
                    </div>
                @endforeach
            </div>



@endsection
