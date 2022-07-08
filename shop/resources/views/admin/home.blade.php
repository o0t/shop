@extends('layouts.app')
@section('title',' لوحة التحكم ')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/cPanel.css') }}" />
@endpush

@section('content')
                    @if (session('status_Red'))
                    <h6 class="alert alert-danger">{{ session('status_Red') }}</h6>
                    @endif

                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
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
                                <option value="Mics">صفحة المايكات</option>
                                <option value="keyboards">صفحة الكيبوردات</option>
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
                <th scope="col"> - </th>

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

                    {{-- edite and Deleted and view --}}
                    <td>
                        {{-- edite --}}
                        <a href="{{ route('edit',$select->id) }}" class="btn btn-outline-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                        {{-- Deleted --}}
                        <a href="{{ route('destroy',$select->id) }}" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </a>
                        {{-- view --}}
                        <a href="#" class="btn btn-outline-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                        </a>

                    </td>

                </tr>
                @endforeach
            </tbody>
          </table>
        {{-- cards / End --}}






@endsection
