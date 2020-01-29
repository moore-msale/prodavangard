@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="catalog_show_container">
	<div class="row">
    <h1 class="product_name_show">{{$data['product']->name}}</h1> 
	</div>
	<div class="row">
    <div class="col-4">
      <img src="\storage\{{$data['product']->image}}" class="img-fluid">
    </div>

    <div class="col-8" id="product_description_outer_wrapper">
      <div id="product_description_wrapper">
        <h1>Название: {{$data['product']->name}}</h1> 
        <p>Производитель: {{$data['product']->manufacturer}}</p>   
        <span>Описание: {!!$data['product']->description!!}</span>
      </div>
    </div>
 	  <div class="col-12">
    <h1 class="similar_prods">Товары в схожих категориях</h1> 
    </div>
      <div class="col">
        <div class="row">
        <div class="col-12" id="catalog">
                <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                  <div class="carousel-inner w-100" role="listbox">
                     <div class="carousel-item active">
                      <div class="col-lg-3 col-md-6">
                          <div class="catalog_element_wrapper">
                            <div class="catalog_element">
                              <div>
                                <img src="\storage\{{$data['cat']->sub_category[0]->image}}" class="img-fluid">
                                <p>{{$data['cat']->sub_category[0]->name}}</p>
                                <button><a href="">Смотреть</a></button>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                @foreach($data['cat']->sub_category as $key => $product)
          @if($key > 0)
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="\storage\{{$product->image}}" class="img-fluid">
                                      <p>{{$product->name}}</p>
                                      <button><a href="">Смотреть</a></button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>  
          @endif
          @endforeach
                 </div>
                  <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span aria-hidden="true">
                      <img src="/img/angle-left 2.svg" class="img-fluid">
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span aria-hidden="true">
                      <img src="/img/angle-left 3.svg" class="img-fluid">

                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


                <!-- 899 -->
                <div id="myCarousel_mob" class="carousel slide w-100" data-ride="carousel">
                <div id="myCarousel_mob" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                                          <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                                          <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                         <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                </div>
              </div> 
                

                  <a class="carousel-control-prev w-auto" href="#myCarousel_mob" role="button" data-slide="prev">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 2.svg" class="img-fluid">
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next w-auto" href="#myCarousel_mob" role="button" data-slide="next">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 3.svg" class="img-fluid">

                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          <!--  654-->
          </div>
          </div>
          <!-- END CATALOG ID -->
      </div>


	</div>
  @include('partials.footer')
</div>	
@endsection