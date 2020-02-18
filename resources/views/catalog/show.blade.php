@extends('layouts.base')

@section('content')
@include('partials.header_dark')
<div class="container" id="catalog_show_container">

	<div class="row catalog_name_wrapper">
		<h1 class="catalog_name">{{$catalog->name}}</h1>
	</div>
	<div id="catalog_show_row" class="row justify-content-md-center">
		@foreach($catalog->categories as $category)
        <div class="col-lg-3 col-md-6">
            <div class="catalog_element_wrapper">
              <div class="catalog_element">
                <div>
                  <img src="\storage\{{$category->image}}" class="img-fluid">
                  <p>{{$category->name}}</p>
                  <a href="{{ route('viewCategory',['id' => $category->id])}}"><button>Смотреть</button></a>
                </div>
              </div>
            </div>
        </div>	
    @endforeach
		
	</div>

@include('partials.footer')
</div>	

@endsection