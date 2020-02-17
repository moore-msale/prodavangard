@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container-fluid partners_page_container">
<div class="row partners_first_block_wrapper" >
	{{-- <img src="../img/static/partners/belg_img_main.png"> --}}
	<img src="{{ asset('storage/'.$partner->first_block_img) }}">
	<div class="partners_first_block_content">
		<span><img src="{{ asset('storage/'.$partner->logo) }}"></span>
		<div>
			<h1>{{$partner->name}}</h1>
			<p>{{$partner->slogan}}</p>
		</div>	
	</div>
</div>
<div class="row partner_block_wrapper_row">
	<div class="col-lg-6">
		<img src="{{ asset('storage/'.$partner->block_1_image) }}">
	</div>
	<div class="col-lg-6 partner_block_wrapper_text">
			{!!$partner->block_1_text!!}

	</div>
</div>
<div class="row partner_block_wrapper_row">
	<div class="col-lg-6 partner_block_wrapper_text">
			{!!$partner->block_2_text!!}
			@if($partner->block_3_text==null)
			<div class="partner_url_btn">
			<a href="{{$partner->url}}"><button class="btn_page_part">Перейти на сайт</button></a>
			</div>
			@endif
	</div>
	<div class="col-lg-6">
		<img src="{{ asset('storage/'.$partner->block_2_image) }}">
	</div>
</div>
@if($partner->block_3_text)
<div class="row partner_block_wrapper_row">
	<div class="col-lg-6">
		<img src="{{ asset('storage/'.$partner->block_3_image) }}">
	</div>
	<div class="col-lg-6 partner_block_wrapper_text">
			{!!$partner->block_3_text!!}
			<div class="partner_url_btn">
			<a href="{{$partner->url}}"><button class="btn_page_part">Перейти на сайт</button></a>
			</div>
	</div>
</div>
@endif
@include('partials.footer')
</div>	
@endsection