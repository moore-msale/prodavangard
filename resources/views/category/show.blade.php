@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="catalog_show_container">
  <div class="row">
    <h1 class="category_name">{{$category->name}}</h1>
  </div>
  <div class="row">
    @foreach($category->products as $product)
        <div class="col-lg-3 col-md-6">
          <div class="catalog_element_wrapper">
            <div class="catalog_element">
              <div>
                <img src="\storage\{{$product->image}}" class="img-fluid">
                <p>{{$product->name}}</p>
                <a href="{{ route('viewProduct',['id' => $product->id])}}"><button>Смотреть</button></a>
              </div>
            </div>
          </div>
        </div>  
    @endforeach
    
  </div>
</div>  
@endsection