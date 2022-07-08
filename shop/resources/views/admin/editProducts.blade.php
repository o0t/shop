@extends('layouts.app')
@section('title',' تعديل منتج ')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/edite.css') }}" />
@endpush
@section('content')


             {{-- {{ $Product }} --}}


            <form action="{{ route('update', $Product->id ) }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <br><br>
                    <div class="col-auto">
                        <img src="{{ asset('images/'.$Product->image )}}" width="100" height="70">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label"> تغير الصوره </label>
                        <input class="form-control form-control-sm" name="img" id="formFileSm" type="file">
                    </div>
                    <br>
                    <div class="col-auto">
                        <label class="col-form-label">العنوان</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="title" value="{{ $Product->title }}">
                    </div>


                    <div class="col-auto">
                        <label class="col-form-label">الوصف</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="content" value="{{ $Product->content }}">
                    </div>


                    <div class="col-auto">
                        <label class="col-form-label">السعر</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="price" value="{{ $Product->price }}">
                    </div>

                    <br>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label"> نوع المنتج </label>
                        <select name="type" class="form-select"  >
                            <option selected value="{{ $Product->type }}"> {{ $Product->type }} | نوع المتج الحالي  </option>
                            <option value="home">الصفحة الرئيسية</option>
                            <option value="Headphones"> صفحة السماعات </option>
                            <option value="keyboards">صفحة المايكات</option>
                            <option value="Mics">صفحة الكيبوردات</option>
                            <option value="Mouse">صفحة الماوسات</option>
                          </select>
                    </div>
                </div>
                    <br><br>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-outline-success">تعديل</button>
                    </div>
            </form>


            <br><br>



@endsection

