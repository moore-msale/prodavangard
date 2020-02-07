@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="catalog_show_container">
  <div class="row">

    
    @isset($data['category_id'])
    <h1 class="category_name" sub_id="{{$data['category_id']}}">
    {{$data['sub_name']}}
    </h1>
    @else
    <h1 class="category_name">
    Каталог
    </h1>

    @endisset 
    

    </div>

  <div class="row">
    <div id="category_list" class="col-3">
{{--       <ul class="list-group">
        @foreach($data['categories'] as $category)
        <a href="{{ route('viewCategory',['id' => $category->id])}}"><li class="list-group-item">{{$category->name}}</li></a>
          <ul class="list-group">
          @foreach($category->sub_category as $sub)
            <li class="list-group-item">{{$sub->name}}</li>
          @endforeach
          </ul>
        @endforeach
      </ul>
 --}}


<div id="accordion">
@foreach($data['categories'] as $category)  
  <div class="card">
    <div class="card-header"  data-toggle="collapse" data-target="#{{$category->id}}" aria-expanded="false" aria-controls="{{$category->id}}">
      <h5 class="mb-0">
{{--         <button class="btn btn-link" data-toggle="collapse" data-target="#{{$category->id}}" aria-expanded="false" aria-controls="{{$category->id}}"> --}}
          {{$category->name}}
        {{-- </button> --}}
      </h5>
    </div>

    <div id="{{$category->id}}" class="collapse"  data-parent="#accordion">
      <div class="card-body">
          <ul class="list-group">
          @foreach($category->sub_category as $sub)
            <a href="{{ route('viewSubCategory',['id' => $sub->id])}}"><li class="list-group-item sub_cat_item">{{$sub->name}}</li></a>
          @endforeach
          </ul>
      </div>
    </div>
  </div>
@endforeach  
</div>

    </div>
    <div id="show_all_products_list" class="col-9">
      <div class="row">
        @foreach($data['products'] as $product)
        <div class="col-lg-3 col-md-6 show_all_products_list_item">
          <div class="catalog_element_wrapper">
            <div class="catalog_element">
              <div>
                <!-- <img src="\storage\{{$product->image}}" class="img-fluid"> -->
                <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
                <p>{{$product->name}}</p>
                <a href="{{ route('viewProduct',['id' => $product->id])}}"><button>Смотреть</button></a>
              </div>
            </div>
          </div>
        </div>  
       @endforeach
      </div>
    </div>
  </div>
@include('partials.footer')
</div>  
@endsection