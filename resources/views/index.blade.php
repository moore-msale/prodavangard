@extends('layouts.base')
@section('content')
<div class="container-fluid" id="container_first">
	@include('partials.header')
<!--                 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand" href="#">prodAvangard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li id="main_link" class="nav-item active">
                      <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li id="about_link" class="nav-item">
                      <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li id="catalog_link" class="nav-item">
                      <a class="nav-link" href="#">Каталог</a>
                    </li>
                    <li id="category_link" class="nav-item">
                      <a class="nav-link" href="#">Категории</a>
                    </li>
                    <li id="vendor_link" class="nav-item">
                      <a class="nav-link" href="#">Производители</a>
                    </li>

                    <li class="nav-item" id="search_form_wrapper">
                     <form id="search_form" class="form-inline my-2 my-lg-0">
                    <input id="search_field" class="form-control mr-sm-2" type="search" placeholder="Точки продаж" aria-label="Search">
                    <input id="search_icon" type="image" src="./img/search.svg" border="0" alt="Submit" />
                  </form>
                    </li>

                  </ul>

                  <span>
                    <p class="phone">
                      +996 312 35 72 87
                    </p>
                  </span>
                </div>
              </nav> -->
        <div class="row" id="main">
          <div class="container-fluid" id="container_second">

<!--           <div class="row" id="nav-row">
            <div class="col-12"> -->



<!--             </div>
          </div> -->


          <div class="row" id="first_page">
            <div class="col-lg-6 col-md-12">
              <div class="row">
                <div class="col-12">
                  <p class="page_1_text">
                  <span>10</span> лет поставляем Российские расходные строительные материалы на рынок Кыргызстана
                  </p>            
                </div>
              </div>
              <div class="row" id="page_1_button_row">
                <div class="col-md-6 col-sm-6 col-12">
                  <a href="{{ route('viewCatalogAll') }}"><button class="btn_page1" id="button_1">Перейти в каталог</button></a>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                  <a href="{{ route('coop') }}"><button class="btn_page1" id="button_2">Сотрудничество</button></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                  <div class="page_1_location_time" id="page_1_location">
                     <img src="./img/location_1.svg" style="height: 37px">
                    <p>
                      Кыргызстан, г. Бишкек,
                      улица Садыгалиева 5а
                    </p>
                  </div> 
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                  <div class="page_1_location_time" id="page_1_time">
                    <img src="./img/clock_1.svg" style="height: 37px">
                    <p>
                      с 11.00 до 17.00 пн - пт,
                      <br>
                      c 11.00 до 14.00 суббота
                    </p>
                  </div> 

                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div id="carousel_main_page" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/slide_16.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/bob.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/SpecElectrod-007.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/drill.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_main_page" role="button" data-slide="prev">
                  <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                  <img id="carousel_main_arrow_left" src="./img/arrow_left.svg">

                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_main_page" role="button" data-slide="next">
                  <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                  <img id="carousel_main_arrow_right" src="./img/arrow_right.svg">
                  <span class="sr-only">Next</span>
                </a>
              </div> 
            </div>
          </div>
          <div class="row" id="second_page">
            <div class="col-lg-6 col-md-3">
              <div id="second_page_image_div">
                <svg id="second_page_line">
                   <rect x=2 y=2 width=70 height=1 style=stroke:white />
                </svg>
                <div>
                  <p id="what_we_do">Что мы делаем?</p>
                </div>
                <img id="drill_overlay_1" src="./img/page_2.png" class="img-fluid" alt="Responsive image">
                <img id="drill_overlay_2" src="./img/page_2_white.png" class="img-fluid" alt="Responsive image">
              </div>
            </div>
            <div class="col-lg-6 col-md-9" id="page_2_text_wrapper">
              <div>
                <p id="page_2_text_heading_first">История компании</p>
                <br>

<!--                 <p id="page_2_text_heading">
                  Наша компания занимается поставками <span id="page_2_heading_color">качественного строительного материала</span> на рынке КР 
                </p>
                <p class="page_2_text_body">
                   ОсОО «Прод-Авангард Компани» была создана в 2009 г. <span class="bold_text">Свою деятельность начала с 2010 г.</span> 
                </p>
                <p class="page_2_text_body">
                   Группа молодых специалистов, пройдя путь карьерного роста в дистрибьюторских организациях, объединилась с целью использования опыта построения качественной дистрибьюции в строительном бизнесе, в котором ощущается дефицит системного подхода. 
                </p>
                <p class="page_2_text_body">
                   За время существования компания смогла создать образ надежного и верного партнера, что позволяет нам заключать эксклюзивные договоры с производителями и увеличивать число клиентов по всему Кыргызстану.
                </p> -->
                <p id="about_us_first_sent" class="page_2_text_body">
                  Как это приятно, когда есть своя история, даже пусть и не большая. Что могло произойти за эти 11 лет? Успехи и падения, правильные решения и ошибки, обретение новых и потери товарищей. И все же, как-то так:
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
                  Глядя на эти сухие цифры ничего не понять. Вся история - это целенаправленный и упорный труд, в любую погоду, при любых обстоятельствах. Это история веры в себя, в свои силы, в товарищей, в дружбу, в продукцию, которую мы представляем. Это история доверия наших поставщиков и клиентов. И мы верим, что наша история только началась, она творится сегодня. Мы учимся, работаем над собой, воспитываем себя, для того, чтобы достойно встретить все вызовы, которые нам приготовило завтра. Верим, что главная история у нас еще впереди...

                </p>
                <a href="{{ route('about') }}"><button id="history_further_btn" class="btn">подробнее</button></a>

              </div>

            </div>
{{--             <div class="col-12">
              <div id="page_2_partners">
                <p id="page_2_partners_heading">Наши партнеры</p>
                <a href="http://www.tiz.ru/">
                <span>
                  <img src="./img/partner_1.png" class="img-fluid" alt="Responsive image">
                </span>
                </a>
                <a href="http://www.spetselectrode.ru/">
                <span>
                  <img src="./img/partner_2.png" class="img-fluid" alt="Responsive image">
                </span>
                </a>
                <a href="https://www.belabraziv.ru/">
                <span>
                  <img src="./img/partner_3.png" class="img-fluid" alt="Responsive image">
                </span>  
                </a>
                <a href="http://ismaflex.ru/">
                <span>
                  <img src="./img/partner_4.png" class="img-fluid" alt="Responsive image">
                </span>
                </a>
                <a href="http://www.td-sintez.ru/">
                <span>
                  <img src="./img/partner_5.png" class="img-fluid" alt="Responsive image">
                </span>
                </a>
              </div>
            </div> --}}
          </div>
        </div> <!-- second container -->
        <div class="container-fluid" id="partners_container">
          <div class="row" id="partners_title_wrapper">
            <p id="partners_title">Наши партнеры</p>
          </div>
          <div class="row">
            <div class="col partner_class_item">
              <a href="http://www.tiz.ru/"><div class="partner_img_wrapper" id="partner_tiz">
                <img src="../img/logo_tiz.gif">
              </div></a>
              <div class="partner_text_wrapper">
              <h1><a href="http://www.tiz.ru/">ТИЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p>
            </div>
            </div>
            <div class="col partner_class_item">
              <a href="http://www.spetselectrode.ru/"><div class="partner_img_wrapper" id="partner_spets">
                <img src="../img/logo_spets.png">
              </div></a>
              <div class="partner_text_wrapper"><h1><a href="http://www.spetselectrode.ru/">Спецэлектрод</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="https://www.belabraziv.ru/"><div class="partner_img_wrapper" id="partner_belab">
                <img src="../img/logo_belab.png">
              </div></a>
              <div class="partner_text_wrapper"><h1><a href="https://www.belabraziv.ru/">БАЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="http://ismaflex.ru/"><div class="partner_img_wrapper" id="partner_isma">
                <img src="../img/logo_isma.png">
              </div></a>
             <div class="partner_text_wrapper"><h1><a href="http://ismaflex.ru/">ИСМА</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="http://www.td-sintez.ru/"><div class="partner_img_wrapper" id="partner_sintez">
                <img src="../img/logo_sintez.png">
              </div></a>
             <div class="partner_text_wrapper"><h1><a href="http://www.td-sintez.ru/">ТД Синтез</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
          </div>


        </div>
      </div><!-- main row -->
      <div id="main_div_2" class="container-fluid">
      <div class="row" id="third_page">
          <img id="about_side" src="./img/side.png" class="img-fluid">
          <!-- <img id="about_side_2" src="./img/mixer.png" class="img-fluid"> -->
          <div class="col-12"  >
            <img id="about" src="./img/about_com.png" class="img-fluid" alt="About">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4"></div>
          <div class="col-lg-9 col-md-9 col-sm-8">
            <div class="row justify-content-md-center">

              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">4</span>
                  <p><span class="about_card_title">Филиала</span><br> (позволяют покрывать всю территорию Кыргызстана)</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">5</span> 
                  <br>
                  <p><span class="about_card_title">Лучших производителей</span><br> (расходных материалов, кто действительно производит в России)</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">11</span>
                  <br>
                  <p><span class="about_card_title">Лет поставок</span><br> (расходных материалов для инструментов на территорию Кыргызстана)</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">+ 560</span>
                  <p><span class="about_card_title">Позиций продукции</span></p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">+ 2 000</span>
                  <br>
                  <p><span class="about_card_title">Клиентов по Кыргызстану</span></p>
                </div>
              </div>
<!--               <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="third_page_text">
                  <span class="about_num">+ 20</span> 
                  <br>
                  <p>Категорий товаров</p>
                </div>
              </div> -->
              

              </div>
          </div>
          <div class="col-12">
            <p id="third_page_second_header" >Полный каталог всей поставляемой нами продукции</p>
          </div>
          
      </div><!-- third page end -->

      <div class="row">
        <div class="col-12" id="catalog">
                <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                  <div class="carousel-inner w-100" role="listbox">
                  	 <div class="carousel-item active">
                      <div class="col-lg-3 col-md-6">
                          <div class="catalog_element_wrapper">
                            <div class="catalog_element">
                              <div>
                                <!-- <img src="storage\{{$index_data['products'][0]->image}}" class="img-fluid"> -->
                                <img src="{{ asset('storage/'.$index_data['products'][0]->image) }}" class="img-fluid">

                                <p>{{$index_data['products'][0]->name}}</p>
                                <button><a href="{{ route('viewProduct',['id' => $index_data['products'][0]->id]) }}">Смотреть</a></button>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
		            @foreach($index_data['products'] as $key => $product)
					@if($key > 0)
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
                                      <p>{{$product->name}}</p>
                                      <button><a href="{{ route('viewProduct',['id' => $product->id]) }}">Смотреть</a></button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>	
					@endif
					@endforeach

<!-- 
                    <div class="carousel-item active">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                              <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                              </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                        <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                    </div>
 -->




                  </div>
                  <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 2.svg" class="img-fluid">
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 3.svg" class="img-fluid">

                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


                <!-- 899 -->
                <div id="myCarousel_mob" class="carousel slide w-100" data-ride="carousel">
                <div id="myCarousel_mob" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                                          <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                                          <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                         <div class="col-lg-3 col-md-6">
                                <div class="catalog_element_wrapper">
                                  <div class="catalog_element">
                                    <div>
                                      <img src="./img/image 34.png" class="img-fluid">
                                      <p>Круги лепестковые торцевые</p>
                                      <button>Смотреть</button>
                                    </div>
                                  </div>
                                </div>
                      </div>
                  </div>
                </div>
              </div> 
                

                  <a class="carousel-control-prev w-auto" href="#myCarousel_mob" role="button" data-slide="prev">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 2.svg" class="img-fluid">
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next w-auto" href="#myCarousel_mob" role="button" data-slide="next">
                    <span aria-hidden="true">
                      <img src="./img/angle-left 3.svg" class="img-fluid">

                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          <!--  654-->
          </div>
          <!-- END CATALOG ID -->
      </div>



      <div class="row">
       <div class="col-12" id="z"></div> 
      </div>
      <div class="row" id="find_everything_wrapper">
        <div class="col-12" id="find_everything">
          <p>Здесь Вы можете найти все</p>
        </div>
      </div>
      <div class="row" id="metal_wrapper">
        
          <img id="full_metal" src="./img/metal.png" class="img-fluid">
          <div class="col-12" id="full_metal_wrapper">
              <div id="metal_description">
                <h1>Для обработки металла</h1>
                <img src="./img/arrow.png" class="img-fluid">
                  <p>отрезные круги<br> шлифовальные круги<br> точильные сверла<br> метчики<br> плашки<br> электроды</p>
                <a href="{{ route('viewCatalogAll') }}"><button>Смотреть каталог</button></a>
              </div>
          </div>    
       </div>
       <div class="row" id="fourth_page">
         <div class="col-12" id="fourth_page_inner" >
           <img src="./img/wood_n.png" class="img-fluid">
           <div id="wood_description">
                <h1>Для обработки дерева</h1>
                <img src="./img/arrow.png" class="img-fluid">
                  <p>шлифовальные листы<br> рулоны шлифовальные<br> бобины шлифовальные<br> диски шлифовальные самозакрепляющиеся<br> ленты бесконечные<br> круги лепестковые с оправкой</p>
                 <a href="{{ route('viewCatalogAll') }}"><button id="wood_description_btn">Смотреть каталог</button></a>
           </div>
         </div>
       </div>
       <div class="row" id="fifth_page">
         <div class="col-12" id="fifth_page_inner">
            <img src="" class="img-fluid">
            <img id="paint_main_image" src="./img/paint_dark.png" class="img-fluid">
            <div id="paint_description">
                  <h1>Для малярных работ</h1>
                  <img src="./img/arrow.png" class="img-fluid">
                    <p>растворители<br> листы шлифовальные<br> диски шлифовальные<br> самозакрепляющиеся</p>
                   <a href="{{ route('viewCatalogAll') }}"><button>Смотреть каталог</button></a>
            </div>

          <div id="fifth_page_dark"></div>
          <div id="fifth_page_light"></div>
          </div>
          
       </div>





       <div class="row" id="seventh_page">
         <div class="col-lg-6 col-md-8 col-sm-12" id="seventh_page_inner">
          <div id="seventh_page_card">
            <h1>Вы можете купить строительные материалы <br><span>оптом и в розницу</span></h1>
            <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>
            <a href="{{ route('viewCatalogAll') }}"><button>Перейти в каталог</button></a>
          </div>
          
          
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6" id="seventh_page_img_2">
           <img src="./img/baz.png" class="img-fluid">
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6" id="seventh_page_img_3">
           <img src="./img/spets.jpg" class="img-fluid">
         </div>
         
       </div>
       <div class="row" id="eighth_page">
         <div class="col-12" id="eighth_page_inner">


            <div id="carousel_feedback" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel_feedback_item" alt="First slide">
                      <h1>Почему с нами выгодно работать</h1>
                      <p>Мы никогда не будем грузить клиента минимальной партией, вынуждая его брать больше!
                        За качество отвечает производитель, а он всегда на связи!
                      </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel_feedback_item" alt="First slide">
                      <h1>Почему с нами выгодно работать</h1>
                      <p>Мы прилагаем все усилия, для того чтобы товар был всегда в наличии.
                        Уделяем огромное значение стабильности и периодичности поставок клиентам.
                      </p>
                      <!-- <h5>Директор Осоо ´Кыргыз Алтын´</h5> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel_feedback_item" alt="First slide">
                      <h1>Почему с нами выгодно работать</h1>
                      <p>Наши клиенты окружены заботой, вниманием и отсутствием каких-либо рисков.</p>
                      <!-- <h5>Директор Осоо ´Кыргыз Алтын´</h5> -->
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel_feedback" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <img class="d-block" src="./img/left_arrow_slider.svg">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_feedback" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <img id="" class="d-block" src="./img/right_arrow_slider.svg">
                <span class="sr-only">Next</span>
              </a>
            </div>



         </div>
         <div id="eighth_page_bottom">
         </div>
       </div>
       <div class="row" id="nineth_page">
         <div class="col-12" id="nineth_page_inner">
          <div class="row">
            <div class="col-12">
              <h1>Новости и полезные статьи</h1>
            </div>
          </div>
          <!-- <div class="col-12" id="catalog_elements_list_9"> -->
            <div class="row justify-content-md-center">
              <div class="col-xl-3 col-lg-4 col-md-6 col-12 ">
                <div class="catalog_element_wrapper_9">
                  <div class="catalog_element_9">
                    <!-- <img src="./img/01.png" class="img-fluid"> -->
                    <div>
                      <h3>Новинки</h3>
                      <h2>Лидер в производстве шлифовального</h2>

                      <p>Давно выяснено, что при оценке дизайна и композиции .
                        Давно выяснено, что при оценке дизайна и композиции .
                      </p>
                      <button>Читать новость</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-12 ">
                 <div class="catalog_element_wrapper_9">
                  <div class="catalog_element_9">
                    <!-- <img src="./img/02.png" class="img-fluid"> -->
                    <div>
                      <h3>Новые Партнеры</h3>
                      <h2>Лидер в производстве шлифовального</h2>

                      <p>Давно выяснено, что при оценке дизайна и композиции .
                        Давно выяснено, что при оценке дизайна и композиции .
                      </p>
                      <button>Читать новость</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-12 ">
                 <div class="catalog_element_wrapper_9">
                  <div class="catalog_element_9">
                    <!-- <img src="./img/03.png" class="img-fluid"> -->
                    <div>
                      <h3>Расширение ассортимента</h3>
                      <h2>Лидер в производстве шлифовального</h2>
                      <p>Давно выяснено, что при оценке дизайна и композиции .
                        Давно выяснено, что при оценке дизайна и композиции .
                      </p>
                      <button>Читать новость</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-12 ">
                 <div class="catalog_element_wrapper_9">
                  <div class="catalog_element_9">
                    <!-- <img src="./img/03.png" class="img-fluid"> -->
                    <div>
                      <h3>Интересное</h3>
                      <h2>Лидер в производстве шлифовального</h2>
                      <p>Давно выяснено, что при оценке дизайна и композиции .
                         Давно выяснено, что при оценке дизайна и композиции . 
                      </p>
                      <button>Читать новость</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div>       -->
         </div>
          <div id="nineth_page_bottom"> 
         </div>   
       </div>

       <div class="row" id="last_page">
         <div class="col-lg-4 col-md-6 col-sm-12">
           <div class="row">
             <div class="col-12">
               <h1>Свяжитесь с нами</h1>
             </div>
           </div>
           <div class="row">

                <div class="col-12">
                  <div class="row" id="last_page_contacts_row">
                    <div class="col-6">
                      <div >
                        <div class="last_page_contacts">
                          <div>
                            <img src="./img/location.svg" class="img-fluid">
                            <p>Кыргызстан,<br> г. Бишкек, улица Садыгалиева 5а</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div >
                        <div class="last_page_contacts">
                          <div>
                            <img src="./img/phone.svg" class="img-fluid">
                            <p>+996 (312) 35-72-87</p>
                            <p>+996 (772) 00-46-26</p>
                            <p>+996 (770) 99-00-96</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
               </div>
           </div>
           <div class="row">
                <div class="col-12">
                  <div class="row" id="contacts_time_row">
                    <div class="col-12">
                      <div >
                        <div class="last_page_contacts_time">
                          <div>
                            <img src="./img/mail.svg" style="width: 30px;" class="img-fluid">
                            <span id="time_last">Е-mail: rashodnik.kg@gmail.com<br>Web: <a href="http://rashodnik.kg/">rashodnik.kg</a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           </div>
           <div class="row">
                <div class="col-12">
                  <div class="row" id="contacts_time_row">
                    <div class="col-12">
                      <div >
                        <div class="last_page_contacts_time">
                          <div>
                            <img src="./img/clock.svg" class="img-fluid">
                            <span id="time_last">с 11.00 до 17.00 понедельник - пятница<br> с 11.00 до 14.00 суббота</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           </div>
           </div>
         <div id="map" class="col-lg-8 col-md-6 col-sm-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.041468211364!2d74.52154871584226!3d42.87196887915587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec89573f1fc69%3A0x4d4019100a40d69f!2zNSDRg9C70LjRhtCwINCh0LDQtNGL0LPQsNC70LjQtdCy0LAsINCR0LjRiNC60LXQug!5e0!3m2!1sru!2skg!4v1578140330234!5m2!1sru!2skg" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

         </div>  
         </div>

           </div>
         <div class="row" id="footer">
             <div class="col-12">
               <h1>prodAvangard</h1>
               <h2>copyright 2019</h2>
             </div>
        </div>


           <!-- last page^ -->
         </div>


       </div>
      </div><!-- main div 2 -->
    </div> <!-- first main container -->
@endsection