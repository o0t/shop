@extends('layouts.app')
@section('title',' لوحة التحكم ')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/cPanel.css') }}" />
@endpush

@section('content')

        {{-- form --}}

            <button class="btn btn-success but-center but-add" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
            </button>

            <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="container">
                    <button style="float: left" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                          </svg>
                    </button>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="العنوان" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="العنوان" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-success">Save</button>
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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td colspan="1">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        {{-- cards / End --}}






@endsection
