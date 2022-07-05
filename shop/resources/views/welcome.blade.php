@extends('layouts.app')
@section('title','الرئيسية')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
@endpush

@section('content')

        {{-- img --}}
        <img src="https://assets2.razerzone.com/images/og-image/pc-accessories-category-OGimage.jpg"  class="imgfluid" alt="...">
        {{-- img / End --}}


        <br><br>
        {{-- title --}}
        <div class="container">
            <h2 class="text-title-after-img text-muted"><span>  فئات المنتجات  </span></h2>
        </div>
        <br>
        {{-- title / End --}}
        {{-- Cards --}}


          <div class="cards-list container">

            <div class="cards">
            <div class="card_image"> <a class="card_image" href="{{ route('Headphones') }}"><img src="https://cdn.al-ain.com/images/2022/5/01/62-170515-do-you-choose-the-right-headphones-for-you_700x400.jpg" /></a> </div>
            <div class="card_title title-white">
                <p class="text-cards">سماعات </p>
            </div>
            </div>

            <div class="cards">
            <div class="card_image">
            <a class="card_image" href="{{ route('keyboards') }}"> <img src="https://yallanshooof.com/wp-content/uploads/2021/05/compactkeyboard-lowres-2x1-6260-1024x512-1-1200x900.jpg" /> </a>
                </div>
            <div class="card_title title-white">
                <p class="text-cards"> كيبوردات</p>
            </div>
            </div>

            <div class="cards">
            <div class="card_image">
            <a class="card_image" href="{{ route('Mouse')}}">  <img src="https://assets2.razerzone.com/images/pnx.assets/0d7a5ccfece341f3ba0c3bd39efd0ed1/find-the-right-mouse-fit-category-768x500-mobile.jpg" /> </a>
            </div>
            <div class="card_title">
                <p class="text-cards"> ماوسات</p>
            </div>
            </div>

            <div class="cards">
            <div class="card_image">
            <a class="card_image" href="{{ route('Mics')}}">  <img src="https://1.bp.blogspot.com/-mJsRD5XtzNE/XoJDFAWoirI/AAAAAAAAJSI/ZRMUtwwmcNkr2h2ULoAwnD6r2mZ96k_ZwCLcBGAsYHQ/s1600/maxresdefault%2B%25286%2529.jpg" /> </a>
                </div>
            <div class="card_title title-black">
                <p class="text-cards">مايكات احترافية</p>
            </div>
            </div>
        </div>

        {{-- Cards / end --}}
        <br><br><br>
         {{-- title --}}
         <div class="container">
            <h2 class="text-title-after-img text-muted"><span>  أحدث المنتجات  </span></h2>
        </div>
        <br>
        {{-- title / End --}}

        {{-- cards shop --}}

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                            {{-- 3 Cards --}}
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                <div class="card h-100">
                                    <img src="https://techcrunch.com/wp-content/uploads/2021/02/keyboard.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title"> اسم المنتج </h5>
                                    <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                    <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="#" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="card h-100">
                                    <img src="https://lh5.googleusercontent.com/X2dUEdcOp36V6AC2uKAmA21uW2t0IuyV89E4UNFFcalggZdUMCqy_hoNiOpc0zhWj5X0cxaVpV4JUt6UKrAkeqrg2S3vUgio4_WhmrEQd20kYRmeIjYQtSFeyo83nmc60cnBdLmd" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> اسم المنتج </h5>
                                        <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                        <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a href="#" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="card h-100">
                                    <img src="http://arabhardware.net/wp-content/uploads/2018/12/x1fbd596e.png.pagespeed.gpjpjwpjwsjsrjrprwricpmd.ic_.5ZOQLTKoke.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> اسم المنتج </h5>
                                        <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                        <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a href="#" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                            {{-- 3 Cards / End --}}

              </div>
              <div class="carousel-item">
                                  {{-- 3 Cards --}}
                                  <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                    <div class="card h-100">
                                        <img src="https://assets.hardwarezone.com/img/2019/08/cooler-master-mm710.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> اسم المنتج </h5>
                                            <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                            <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                            </div>
                                            <div class="card-footer">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <a href="#" class="btn btn-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                            </svg>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img src="https://blog.jomla.ae/wp-content/uploads/2021/03/Untitled-6.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> اسم المنتج </h5>
                                            <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                            <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                            </div>
                                            <div class="card-footer">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <a href="#" class="btn btn-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                            </svg>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img src="https://4.bp.blogspot.com/-UvmcxywdPz4/XAxqd2O3mhI/AAAAAAAAEt0/vbeWIZh_fHY59h0xWxwB0Jo41K_l3A-wQCLcBGAs/s640/blue-snowball-ice-mic-review-5.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> اسم المنتج </h5>
                                            <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                            <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                            </div>
                                            <div class="card-footer">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <a href="#" class="btn btn-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                            </svg>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                {{-- 3 Cards / End --}}
              </div>
              <div class="carousel-item">
                                      {{-- 3 Cards --}}
                                      <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                        <div class="card h-100">
                                            <img src="https://m.media-amazon.com/images/I/21BBQ6WEW-L._AC_SY780_.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"> اسم المنتج </h5>
                                                <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                                <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <a href="#" class="btn btn-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                                </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img src="https://assets.fatllama.com/images/large/rode-podmic--psa1-studio-boom-arm-45736954.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"> اسم المنتج </h5>
                                                <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                                <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <a href="#" class="btn btn-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                                </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img src="https://1.bp.blogspot.com/-mJsRD5XtzNE/XoJDFAWoirI/AAAAAAAAJSI/ZRMUtwwmcNkr2h2ULoAwnD6r2mZ96k_ZwCLcBGAsYHQ/s1600/maxresdefault%2B%25286%2529.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"> اسم المنتج </h5>
                                                <p class="card-text">وصف المنتج هو الكلمات والتعبيرات التسويقية التي يتم استخدامها بشكل منسق في شرح مزايا وخصائص المنتج وكافة المعلومات المرتبطة به.</p>
                                                <p class="card-text text-muted"><small class="price-cards">ريال</small>100</p>

                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <a href="#" class="btn btn-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                                </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                    </div>
                                    {{-- 3 Cards / End --}}
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
        {{-- cards shop / End --}}

                <pre>










                </pre>
                {{-- section --}}
                <ul class="nav justify-content-center section-all">
                    <li class="nav-item section-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                          </svg>
                          <br><br>
                      <p> اسعار مناسبه </p>
                    </li>
                    <li class="nav-item section-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                          </svg>
                          <br><br>
                      <p>الشحن أسرع شي</a>
                    </li>
                    <li class="nav-item section-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                          </svg>
                          <br><br>
                      <p >ضمان سنتين </p>
                    </li>
                  </ul>
                {{-- section / End --}}
                <br><br><br><br><br>
                  {{-- title --}}
                <div class="container">
                    <h2 class="text-title-after-img text-muted"><span>  آراء العملاء  </span></h2>
                </div>
                {{-- title / End --}}
                <br><br>
                {{-- card comment --}}
                <div class="card mb-3 card-comment" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"> جميل .. وسهل بالإستخدام </h5>
                      <p class="card-text">
                        <br>
                        ابو احمد
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>

                      </p>
                    </div>
                    <div class="card-footer bg-transparent">الرياض</div>
                  </div>
                {{-- card comment / End --}}

                  {{-- Footer --}}
                  <br><br><br>
                  <hr class="fooHr">
                  <br><br>

                  <div class="row align-items-center">
                    <div class="col">
                      من نحن
                      <br>
                      <p> <small> متجر اكسسوارات كمبيوتر  </small></p>
                    </div>
                    <div class="col">
                        روابط مهمة
                        <br>
                        <p><small>سياسة الاسترجاع و الاسبتدال</small></p>
                    </div>
                    <div class="col">
                        تواصل معنا
                        <br>
                        <p><small>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
                                    <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                                </svg>
                        </small></p>
                    </div>
                  </div>
                  <br><br>
                  <p> <small class="nav-link disabled">

                    الحقوق محفوظة متجر Test © 2022
                    صنع بإتقان  
                    </small> </p>
                  {{-- Footer / End --}}


@endsection
