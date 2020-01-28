@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="coop_page_container">
<div id="coop_page_container_inner" class="row">
  <div class="col-12">
    <h1 id="coop_header_text">Мы приглашаем к сотрудничеству</h1>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-12  coop_item_wrapper">
    
    <div class="coop_item">
     <img src="/img/varnish.png"> 
      <p>Малярные цеха</p>
    </div>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12 coop_item_wrapper">
    
    <div class="coop_item">
     <img src="/img/sofa.svg"> 
      <p>Мебельные цеха</p>
    </div>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12 coop_item_wrapper">
    
    <div class="coop_item">
     <img src="/img/crane.svg"> 
      <p>Строительные компании</p>
    </div>
  </div>
    <div class="col-lg-3 col-md-6 col-sm-12 coop_item_wrapper">
    
    <div class="coop_item">
     <img src="/img/brick.png"> 
      <p>Компании занимающиеся внутренней отделкой зданий</p>
    </div>
  </div>
<!--   <div class="col-3 coop_item">
    <p>Мебельные цеха</p>
  </div>
  <div class="col-3 coop_item">
    <p>Строительные компании</p>
  </div>
  <div class="col-3 coop_item">
    <p>Компании занимающиеся внутренней отделкой зданий</p>
  </div> -->
  <div id="contract_conditons" class="col-12">  
    <div class="row">
      <div id="contract_conditons_inner"class="col-lg-4 col-md-4 col-sm-12">
        <button>Договор</button>
        <button>Условия</button>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <img src="../img/partnership.jpg">
      </div>

    </div>
  </div>
  




</div>


@include('partials.footer')
</div>	
@endsection