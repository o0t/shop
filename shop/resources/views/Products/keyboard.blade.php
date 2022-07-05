@extends('layouts.app')
@section('title','الكيبورد')
@push('css')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" /> --}}
@endpush

@section('content')

                <br><br><br>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="card mb-3" style="width:70%;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gizmochina.com/wp-content/uploads/2020/12/zeaplus.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Zeaplus Studio</h5>
                            <p class="card-text">
                            سماعات اللاسلكية المزودة بإلغاء الضوضاء النشط مقابل
                            </p>
                            <p class="card-text"><h4> <small class="text-muted"> السعر: </small> SAR 50 </h4></p>

                            <br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <br><br>
                                <button type="button" class="btn btn-dark">عرض المزيد</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
@endsection

