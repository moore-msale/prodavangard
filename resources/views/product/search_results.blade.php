@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="search_result_container">
  <div class="row">
    <div class="col"><h1 id="search_result_header">Резльтаты поиска</h1></div>
  </div>
  <div class="row">
    <div class="col-12 ">
        <div id="search_result_content">
          @if($products->count() > 0)
            <ul class="list-group">
            @foreach($products as  $product)
                <a href="{{ route('viewProduct',['id' => $product->id])}}">
                  <li class="list-group-item">{{$product->name}}
                  </li>
                </a>
            @endforeach  
            </ul> 
          @else
              <h1 id="search_result_not_fund">Товар не был найден</h1>
          @endif
        </div>
    </div>
  </div>
  @include('partials.footer')
</div>	
@endsection