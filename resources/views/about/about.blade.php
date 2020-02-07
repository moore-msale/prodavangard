@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="about_page_container">

  <div class="row">
    <div class="col-12">
      <h1 class="about_header_h1">Кто мы?
      </h1>
    </div>
    <div class="col-12 about_text_wrapper">
      <p class="about_text_p">
          Люди, которые работали на собственников, которых интересует лишь собственная судьба, в условиях быстроменяющихся условий, решили объединиться и создать организацию, где основными ценностями будут: честность, справедливость, уважение и достоинство. На этих принципах мы и строим свои взаимоотношения с партнерами и клиентами.
      </p>    
      <p class="about_text_p">    
         Основной целью нашей деятельности считаем счастье наших сотрудников, признание нашей работы поставщиками и нашими клиентами. Мы любим свою работу и делаем её, вкладывая в неё душу.
      </p>
    </div>
    <div class="col-12">
      <h1 class="about_header_h1">Факты
      </h1>
    </div>
    <div class="col-12 about_text_wrapper">
      <p class="about_text_p">
        <span class="about_nums_span">4</span> филиала позволяют покрывать всю территорию Кыргызстана
        <span class="about_nums_span">5</span> лучших производителей расходных материалов, кто действительно производит в России
        <span class="about_nums_span">11</span> лет поставок расходных материалов для инструментов на территорию Кыргызстана
        <span class="about_nums_span">560</span> позиций продукции
        <span class="about_nums_span">2000</span> клиентов по Кыргызстану
      </p>
    </div>
    <div class="col-12">
      <div id="about_assets_image">
        <img src="./img/assets.png">
      </div>
    </div>
  </div>

@include('partials.footer')
</div>	
@endsection