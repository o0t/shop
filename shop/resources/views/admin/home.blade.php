@extends('layouts.app')
@section('title',' لوحة التحكم ')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/cPanel.css') }}" />
@endpush

@section('content')

                    @if (session('add'))
                    <h6 class="alert alert-success">{{ session('add') }}</h6>
                    @endif
        {{-- form --}}
            {{-- errors form --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <button class="btn btn-success but-center but-add" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
            </button>

            <div id="id01" class="modal">

            <form class="modal-content animate" action="{{ route('store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <button style="float: left" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                          </svg>
                    </button>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label"> صورة المنتج </label>
                            <input class="form-control form-control-sm" name="img" id="formFileSm" type="file">
                          </div>

                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">العنوان</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col">
                        <label for="exampleInputEmail1" class="form-label">الوصف</label>
                          <input type="text" name="content" class="form-control" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                          <label for="exampleInputEmail1" class="form-label">السعر</label>
                          <input type="text" name="price" class="form-control">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label"> صفحة المنتج </label>
                            <select name="type" class="form-select" >
                                <option selected value="home">الصفحة الرئيسية</option>
                                <option value="Headphones"> صفحة السماعات </option>
                                <option value="keyboards">صفحة المايكات</option>
                                <option value="Mics">صفحة الكيبوردات</option>
                                <option value="Mouse">صفحة الماوسات</option>
                              </select>
                        </div>
                    </div>
                    <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-success">حفظ</button>
                </div>
                </div>

            </form>
            </div>


        {{-- form / End --}}

            <br><br>
        {{-- cards --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col"> صورة المنتج </th>
                <th scope="col"> العنوان </th>
                <th scope="col"> الوصف </th>
                <th scope="col"> السعر </th>
                <th scope="col"> نوع المنتج </th>

              </tr>
            </thead>
            <tbody>

                @foreach ($all as $select)
                <tr>
                    <th scope="row"> <img src="{{ asset('images/'.$select->image )}}" width="100" height="70"></th>
                    <td> {{ $select->title }}</td>
                    <td colspan="1"> {{ $select->content }}</td>
                    <td> {{ $select->price }}</td>
                    <td> {{ $select->type }}</td>
                    <td> + </td>
                    <td> + </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        {{-- cards / End --}}






@endsection
