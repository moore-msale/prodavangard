@extends('layouts.base')

@section('content')
@include('partials.header_dark')
<div class="container" id="about_page_container">
    <div class="col-12">
      <h1 class="about_header_h1">История
      </h1>
    </div>
    <div class="col-12 about_text_wrapper">
                <p id="about_us_first_sent" class="page_2_text_body">
                  Как это приятно, когда есть своя история, даже пусть и не большая. Что могло произойти за эти 11 лет? Взлеты и падения, правильные решения и ошибки, обретение новых друзей и потери верных товарищей». И все же, как-то так:
                </p>  
                <p class="page_2_text_body">  
                  2009г. - заключение договора поставки с АО "ИСМА" и первая поставка.
                </p>  
                <p class="page_2_text_body">   
                  2011г. - заключение договора поставки с НПК "Томский Инструмент".
                </p>  
                <p class="page_2_text_body">   
                  2013г. - заключение договора поставки с ООО "ТД Синтез"
                </p>  
                <p class="page_2_text_body">   
                  2013г - заключение договора поставки с НПП "Сварка Евразии"
                </p>  
                <p class="page_2_text_body">   
                  2015г. - заключение договора поставки с ОАО "Белгородский Абразивный Завод"
                </p>  
                <p class="page_2_text_body">   
                  2019г. - заключение договора поставки с ООО "Инструмент-Импорт"
                </p>  
                <p class="page_2_text_body">   
                  Глядя на эти сухие цифры ничего не понять. Вся история - это целенаправленный и упорный труд, в любую погоду, при любых обстоятельствах. Это история веры в себя, в свои силы, в товарищей, в дружбу, в продукцию, которую мы представляем. Это история доверия наших поставщиков и клиентов. И мы верим, что наша история только началась, она творится сегодня. Мы учимся, работаем над собой, воспитываем себя, для того, чтобы достойно встретить все вызовы, которые нам приготовило завтра.Верим, что главная история у нас еще впереди.

                </p>



{{--       <p class="about_text_p text_50_indent">
        ОсОО «Прод-Авангард Компани» была создана в 2009 г. Свою деятельность начала с 2010 г.
        Группа молодых специалистов, пройдя путь карьерного роста в дистрибьюторских организациях, объединилась с целью использования опыта построения качественной дистрибьюции в строительном бизнесе, в котором ощущается дефицит системного подхода.
      </p>  
        <br>
      <p class="about_text_p text_50_indent">  
        За время существования компания смогла создать образ надежного и верного партнера, что позволяет нам заключать эксклюзивные договора с производителями и увеличивать число клиентов по всему Кыргызстану --}}

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
        Наша продукция продается во всех регионах Кыргызстана. Мы уже открыли <span class="about_nums_span"> 4</span> филиала и не собираемся останавливаться!<br>
        <span class="about_nums_span">5</span> - надежных производителей расходных материалов, кто действительно производит в России<br>
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

    <div class="col-12">
      <h1 class="about_header_h1">Галерея
      </h1>
    </div>
    <div class="col-12">

      <div id="carousel_gal" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel_gal" data-slide-to="0" class="active"></li>
          <li data-target="#carousel_gal" data-slide-to="1"></li>
          <li data-target="#carousel_gal" data-slide-to="2"></li>
          <li data-target="#carousel_gal" data-slide-to="3"></li>
          <li data-target="#carousel_gal" data-slide-to="4"></li>
<!--           <li data-target="#carousel_gal" data-slide-to="5"></li>
          <li data-target="#carousel_gal" data-slide-to="6"></li>
          <li data-target="#carousel_gal" data-slide-to="7"></li>
          <li data-target="#carousel_gal" data-slide-to="8"></li> -->
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/static/gallery/gal_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/static/gallery/gal_2.jpg" class="d-block w-100" alt="...">
          </div>
<!--           <div class="carousel-item">
            <img src="../img/static/gallery/gal_3.jpg" class="d-block w-100" alt="...">
          </div> -->
<!--           <div class="carousel-item">
            <img src="../img/static/gallery/gal_4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/static/gallery/gal_5.jpg" class="d-block w-100" alt="...">
          </div> -->
          <div class="carousel-item">
            <img src="../img/static/gallery/gal_6.jpg" class="d-block w-100" alt="...">
          </div>
<!--           <div class="carousel-item">
            <img src="../img/static/gallery/gal_7.jpg" class="d-block w-100" alt="...">
          </div> -->
          <div class="carousel-item">
            <img src="../img/static/gallery/gal_8.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/static/gallery/gal_9.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel_gal" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel_gal" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>

@include('partials.footer')
</div>	
@endsection