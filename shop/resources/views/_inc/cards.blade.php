<br><br><br>
{{-- NavBar --}}
<form action="">
<nav class="navbar navbar-light bg-light">
    <form class="container-fluid">
      <div class="input-group">
         <button class="btn btn-outline-secondary" type="button" id="button-addon2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
         </button>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div>
        <br>
              <p>page info </p>
      </div>
    </form>
  </nav>
</form>
{{-- NavBar / End --}}
<br><br><br>
{{-- cards --}}
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($Producer as $item)
    <div class="col">
      <div class="card h-100" >
            <a href="{{ route('show', $item->id ) }}" class="Link-Card">
                <img src="{{ asset('images/'.$item->image )}}"  height="200"  class="card-img-top" alt="...">
            <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">  {{ $item->content }} .</p>
            </div>
            <div class="card-footer">
            <small class="text-muted"><small class="text-muted"> السعر: </small> {{ $item->price }}</small>
            <br>
                <div class="text-muted ">
                    <br>
                    <a class="btn btn-primary shop-btn" href="#">
                        <div class="text-btn-shop">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </a>
    </div>
    @endforeach
  </div>

{{-- cards / End --}}
