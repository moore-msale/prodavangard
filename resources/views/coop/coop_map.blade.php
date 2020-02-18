@extends('layouts.base')

@section('content')
@include('partials.header_dark')
<div class="container" id="coop_map_page_container">
<div class="row">
  <div class="col-12">
    <h1 class="maps_page_outlet_header">Точки продаж про всему Кыргызстану</h1>
  </div>
</div>
<div id="coop_map">
  <iframe  style="position:relative; top:-45px; border:none;" src="https://www.google.com/maps/d/embed?mid=18UP15fFv7FSrPjW4EcWWecSuQ4ap4kLJ&hl=en" width="100%" height="600px"></iframe>
</div>
@include('partials.footer')
</div>	
@endsection