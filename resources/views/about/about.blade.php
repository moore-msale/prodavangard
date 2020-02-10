@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container" id="about_page_container">
    <div class="col-12">
      <h1 class="about_header_h1">История
      </h1>
    </div>
    <div class="col-12 about_text_wrapper">
      <p class="about_text_p text_50_indent">
        ОсОО «Прод-Авангард Компани» была создана в 2009 г. Свою деятельность начала с 2010 г.
        Группа молодых специалистов, пройдя путь карьерного роста в дистрибьюторских организациях, объединилась с целью использования опыта построения качественной дистрибьюции в строительном бизнесе, в котором ощущается дефицит системного подхода.
      </p>  
        <br>
      <p class="about_text_p text_50_indent">  
        За время существования компания смогла создать образ надежного и верного партнера, что позволяет нам заключать эксклюзивные договора с производителями и увеличивать число клиентов по всему Кыргызстану

      </p>
    </div>
  <div class="row">
    <div class="col-12">
      <h1 class="about_header_h1">Кто мы?
      </h1>
    </div>
    <div class="col-12 about_text_wrapper">
      <p class="about_text_p text_50_indent" >
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
        <span class="about_nums_span">4</span> - филиала позволяют покрывать всю территорию Кыргызстана<br>
        <span class="about_nums_span">5</span> - лучших производителей расходных материалов, кто действительно производит в России<br>
        <span class="about_nums_span">11</span> - лет поставок расходных материалов для инструментов на территорию Кыргызстана<br>
        <span class="about_nums_span">560</span> - позиций продукции<br>
        <span class="about_nums_span">2000</span> - клиентов по Кыргызстану<br>
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