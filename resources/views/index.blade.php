@extends('layouts.base')
@section('content')
<div class="container-fluid" id="container_first">
	@include('partials.header')
        <div class="row" id="main">
          <div class="container-fluid" id="container_second">
          
          <div id="carousel_main_page" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel_main_page" data-slide-to="0" class="active"></li>
              <li data-target="#carousel_main_page" data-slide-to="1"></li>
              <li data-target="#carousel_main_page" data-slide-to="2"></li>
              <li data-target="#carousel_main_page" data-slide-to="3"></li>
              <li data-target="#carousel_main_page" data-slide-to="4"></li>
              <li data-target="#carousel_main_page" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row main_carousel_item_wrapper" id="first_page_slide">
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                      <div class="col-12">
                        <!-- <p class="page_1_text">Официальный дистрибьютор</p> -->
                        <p id="page_1_text_id_no_top" class="page_1_text">
                        Более<span class="page_1_text_numero_10">10</span>лет - <span class="page_1_text_dist">Официальный дистрибьютор</span> компаний ТИЗ, БАЗ, ИСМА, Спецэлектрод и Синтез на рынке российских строительных расходных материалов в Кыргызстане
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
                            c 09.00 до 12.00 сб
                          </p>
                        </div> 

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 main_slider_image">
                    <img src="./img/static/block1_slide1_img.png">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row main_carousel_item_wrapper" id="second_page_slide">
                  <div class="col-lg-8 col-md-8">
                    <div class="slide_part_name_logo">
                      <span><img src="./img/static/belgorod_logo.png"></span>
                      <div>
                      <h1 class="slide_part_name">Белгородский <br>абразивный завод</h1>
                      <p>Гибкие аброзивные инструменты</p>
                      </div>
                    </div>
                    <div class="row part_slider_stats">
                      <div class="col-lg-4">
                        <h2>Более 50 лет</h2>
                        <p>заводу</p>
                      </div>
                      <div class="col-lg-4">
                        <h2>Более 3800</h2>
                        <p>клиентов завода</p>
                      </div>
                      <div class="col-lg-4">
                        <h2>Более 3000</h2>
                        <p>наименований продукции</p>
                      </div>
                    </div>
                    <div class="part_slider_desc">
                      
                        <p><span>Белгородский абразивный</span> завод был построен в 1966 году как опытное производство по освоению выпуска шлифовальной шкурки на синтетических связующих.
                      </p>
                    </div>
                   <div>
                    <a href="{{ route('partner',['id' => 1]) }}"><button class="btn_page_part">Подробнее</button></a> 
                   </div> 
                  </div>
                  
                    <div class="col-lg-4 col-md-4 main_slider_image">
                    <img src="./img/static/block1_slide2_img.png">
                  </div>
                </div>
              </div>


              <div class="carousel-item">

              <div class="row main_carousel_item_wrapper" id="third_page_slide">
                                  <div class="col-lg-8 col-md-8">
                    <div class="slide_part_name_logo">
                      <span><img src="./img/static/isma_logo.png"></span>
                      <div>
                      <h1 class="slide_part_name">ISMAFLEX</h1>
                      <p>Отрезной и шлифовальные инструменты</p>
                      </div>
                    </div>
                    <div class="row part_slider_stats">
                      <div class="col-lg-4">
                        <h2>Более 100 лет</h2>
                        <p>заводу</p>
                      </div>
                      <div class="col-lg-4">
                        <h2>Более 2080</h2>
                        <p>заказчиков</p>
                      </div>
                      <div class="col-lg-4">
                        <h2>Более 1200</h2>
                        <p>наименований продукции</p>
                      </div>
                    </div>
                    <div class="part_slider_desc">
                      
                        <p>Завод был основан <span>Карлом Ивановичем Гильденбрантом</span> в конце XIX в. Официальным годом основания предприятия считается 1898 г.
                      </p>
                    </div>
                   <div>
                    <a href="{{ route('partner',['id' => 2]) }}"><button class="btn_page_part">Подробнее</button></a>  
                   </div> 
                  </div>
                  
                    <div class="col-lg-4 col-md-4 main_slider_image">
                    <img src="./img/static/block1_slide3_img.png">
                  </div>


            </div>
              </div>
              <div class="carousel-item">

              <div class="row main_carousel_item_wrapper" id="fourth_page_slide">
                                  <div class="col-lg-8 col-md-8">
                    <div class="slide_part_name_logo">
                      <span><img src="./img/static/tiz_logo.png"></span>
                      <div>
                      <h1 class="slide_part_name">Группа компаний <br>“Томский инструмент”</h1>
                      <p>Металлорежущие и дереворежущие инструменты</p>
                      </div>
                    </div>
                    <div class="row part_slider_stats">
                      <div class="col-lg-4">
                        <h2>Более 75 лет</h2>
                        <p>заводу</p>
                      </div>
                    </div>
                    <div class="part_slider_desc">
                      
                        <p>Рождение завода произошло при эвакуации в конце <span>1941 года</span> ведущего предприятия советской инструментальной промышленности московского завода "Фрезер".
                      </p>
                    </div>
                   <div>
                    <a href="{{ route('partner',['id' => 3]) }}"><button class="btn_page_part">Подробнее</button></a>  
                   </div> 
                  </div>
                  
                    <div class="col-lg-4 col-md-4 main_slider_image">
                    <img src="./img/static/block1_slide4_img.png">
                  </div>


            </div>
              </div>
              <div class="carousel-item">

              <div class="row main_carousel_item_wrapper" id="fifth_page_slide">
                                  <div class="col-lg-6 col-md-12">
                    <div class="slide_part_name_logo">
                      <span><img src="./img/static/spets_logo.png"></span>
                      <div>
                      <h1 class="slide_part_name">Спецэлектрод</h1>
                      <p>Сварочные электроды</p>
                      </div>
                    </div>
                    <div class="row part_slider_stats">
                      <div class="col-lg-4">
                        <h2>Более 70 лет</h2>
                        <p>заводу</p>
                      </div>
                    </div>
                    <div class="part_slider_desc">
                      
                        <p><span>СпецЭлектрод</span> - это лидер в продаже, производстве, разработке электродов и спецэлектродов на территории Азии и Европы.
                      </p>
                    </div>
                   <div>
                    <a href="{{ route('partner',['id' => 4]) }}"><button class="btn_page_part">Подробнее</button></a> 
                   </div> 
                  </div>
                  
                    <div class="col-lg-6 col-md-12 main_slider_image">
                    <img src="./img/static/block1_slide5_img.png">
                  </div>
            </div>
              </div>

             <div class="carousel-item">

              <div class="row main_carousel_item_wrapper" id="sixth_page_slide">
                                  <div class="col-lg-6 col-md-12">
                    <div class="slide_part_name_logo">
                      <span><img src="./img/static/sintez_logo.png"></span>
                      <div>
                      <h1 class="slide_part_name">ТД Синтез</h1>
                      <p>Растворители европейского качества</p>
                      </div>
                    </div>
                    <div class="row part_slider_stats">
                      <div class="col-lg-4">
                        <h2>Более 20 лет</h2>
                        <p>на рынке</p>
                      </div>
                    </div>
                    <div class="part_slider_desc">
                      
                        <p><span>ТД Синтез</span> предлагает разнообразный ассортимент растворителей, способный удовлетворить даже самого требовательного потребителя.
                      </p>
                    </div>
                   <div>
                    <a href="{{ route('partner',['id' => 5]) }}"><button class="btn_page_part">Подробнее</button></a>  
                   </div> 
                  </div>
                  
                    <div class="col-lg-6 col-md-12 main_slider_image">
                    <img src="./img/static/block1_slide6_img.png">
                  </div>
            </div>
              </div>




            </div>
            <a class="carousel-control-prev" href="#carousel_main_page" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_main_page" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>  

<!--             <div class="row" id="first_page">
              <div class="col-lg-6 col-md-12">
                <div class="row">
                  <div class="col-12">
                    <p class="page_1_text">Официальный дистрибьютор</p>
                    <p id="page_1_text_id_no_top" class="page_1_text">
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
              </div>
            </div> -->



          <div class="row" id="second_page">
            <div class="col-12">
              <p id="page_2_text_heading_first">История компании</p>
              <p id="page_2_text_heading_first_sub">Более 10 лет на рынке Кыргызстана</p>
              <br>
              <br>
            </div>
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
                <!-- <p id="page_2_text_heading_first">История компании</p> -->
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
                  Глядя на эти сухие цифры ничего не понять. Вся история - это целенаправленный и упорный труд, в любую погоду, при любых обстоятельствах. Это история веры в себя, в свои силы, в товарищей, в дружбу, в продукцию, которую мы представляем. Это история доверия наших поставщиков и клиентов. И мы верим, что наша история только началась, она творится сегодня.<span id="about_low_opacity"> Мы учимся, работаем над собой, воспитываем себя, для того, чтобы достойно встретить все вызовы, которые нам приготовило завтра. </span><span id="about_lower_opacity">Верим, что главная история у нас еще впереди...</span>

                </p>
                <a href="{{ route('about') }}"><button id="history_further_btn" class="btn">подробнее</button></a>

              </div>

            </div>
<!--              <div class="col-12">
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
            </div> -->
          </div>
        </div> <!-- second container -->


         <div class="container-fluid" id="partners_container">
          <div class="row" id="partners_title_wrapper">
            <p id="partners_title">Наши партнеры</p>
          </div>
          <div class="row" id="partners_row_wrapper">
            <div class="col partner_class_item">
              <a href="{{ route('partner',['id' => 3]) }}"><div class="partner_img_wrapper" id="partner_tiz">
                <img src="../img/logo_tiz.gif">
              </div></a>
              <div class="partner_text_wrapper">
              <h1><a href="{{ route('partner',['id' => 3]) }}">ТИЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p>
            </div>
            </div>
            <div class="col partner_class_item">
              <a href="{{ route('partner',['id' => 4]) }}"><div class="partner_img_wrapper" id="partner_spets">
                <img src="../img/logo_spets.png">
              </div></a>
              <div class="partner_text_wrapper"><h1><a href="http://www.spetselectrode.ru/">Спецэлектрод</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="{{ route('partner',['id' => 1]) }}"><div class="partner_img_wrapper" id="partner_belab">
                <img src="../img/logo_belab.png">
              </div></a>
              <div class="partner_text_wrapper"><h1><a href="https://www.belabraziv.ru/">БАЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="{{ route('partner',['id' => 2]) }}"><div class="partner_img_wrapper" id="partner_isma">
                <img src="../img/logo_isma.png">
              </div></a>
             <div class="partner_text_wrapper"><h1><a href="http://ismaflex.ru/">ИСМА</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <a href="{{ route('partner',['id' => 5]) }}"><div class="partner_img_wrapper" id="partner_sintez">
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
          <img src="./img/static/about/about-map.png" class="img-fluid">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-4" about_col_wrapper_class>
                <div class="third_page_text" id="about_french_col">
                  <img src="../img/static/about/french.png">
                  <div class="third_page_text_inner_wrapper">
                    <div class="about_num">
                      <div class="about_num_inner">
                      <span id="about_french_number">4</span>
                      <ul class="dropdown">
                      <li>г. Каракол</li>
                      <li>г. Талас</li>
                      <li>г. Ош</li>
                      <li>г. Нарын</li>
                      </ul>
                      </div>
                    </div> 

                    <br>
                    <div class="about_card_title">Филиала</div><br>
                  </div>
                </div>

              </div>
              <div class="col-lg-4 about_col_wrapper_class" >
                <div class="third_page_text" id="about_years_col">
                  <img src="../img/static/about/years.png">
                  <div>
                    <div class="about_num">
                      <div class="about_num_inner">
                      <span class="about_num_pre">свыше</span><span id="about_years_number">10</span>
                      <div class="dropdown">
                        с 2009 по 2020
                      </div>
                      </div>
                    </div>
                    <br>
                    <div class="about_card_title">лет поставок</div><br>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 about_col_wrapper_class" id="about_company_col">
                
                <h1>О нашей компании</h1>
                <p>ОсОО «Прод-Авангард Компани» была создана в 2009 г. Свою деятельность, на рынке строительных и расходных материалов, начала с 2010г.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 about_col_wrapper_class" >
                <div class="third_page_text" id="about_positions_col">
                  <img src="../img/static/about/positions.png">
                  <div class="about_num"><span class="about_num_pre">свыше</span><span id="about_positions_number">560</span></div> 
                  <br>
                  <div class="about_card_title">Позиций продукции</div>
                </div>

              </div>
              <div class="col-lg-4 about_col_wrapper_class" >
                <div class="third_page_text" id="about_clients_col">
                  <img src="../img/static/about/clients.png">
                  <div class="about_num"><span class="about_num_pre">свыше</span><span id="about_clients_number">2000</span></div> 
                  <br>
                  <div class="about_card_title">Клиентов по Кыргызстану</div>
                </div>
              </div>
              <div class="col-lg-4 about_col_wrapper_class">
                <div class="third_page_text" id="about_manu_col">
                  <img src="../img/static/about/manu.png">
                  <div class="about_num">
                    <div class="about_num_inner">
                    <span id="about_manu_number">5</span>
                      <ul class="dropdown">
                      <li>ТИЗ «Томский инструмент»</li>
                      <li>СпецЭлектрод</li>
                      <li>Белгородский Абразивынй Завод</li>
                      <li>ISMAFLEX «ИСМА»</li>
                      <li>Синтез</li>
                      </ul>
                    </div>
                    </div> 
                  <br>
                  <div class="about_card_title">Надежных  производителей</div>
                </div>

              </div>
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
                {{-- <img src="./img/arrow.png" class="img-fluid"> --}}
                  <p>
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/1">отрезные круги</a></span></span><br>
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/2">шлифовальные круги</a></span></span><br> 
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/13">точильные сверла</a></span></span><br> 
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/5">метчики</a></span></span><br>
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/6">плашки</a></span></span><br> 
                   <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/7">электроды</a></span></span></p>

                <a href="{{ route('viewCatalogAll') }}"><button>Смотреть каталог</button></a>
              </div>
          </div>    
       </div>
       <div class="row" id="fourth_page">
         <div class="col-12" id="fourth_page_inner" >
           <img src="./img/wood_n.png" class="img-fluid">
           <div id="wood_description">
                <h1>Для обработки дерева</h1>
                {{-- <img src="./img/arrow.png" class="img-fluid"> --}}
                  <p>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/12">шлифовальные листы</a></span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/11">рулоны шлифовальные</a></span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/11">бобины шлифовальные</a></span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/8">диски шлифовальные</span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item">самозакрепляющиеся</a></span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/9">ленты бесконечные</a></span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/10">круги лепестковые </span></span><br>
                    <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item">с оправкой</a></p></span></span><br>

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
                  {{-- <img src="./img/arrow.png" class="img-fluid"> --}}
                    <p>
                      <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/4">растворители</a></span></span><br>
                      <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/12">листы шлифовальные</a></span></span><br>
                      <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item"><a href="/viewSubCategory/8">диски шлифовальные</span></span><br>
                      <span><img src="./img/arrow.png" class="img-fluid"><span class="buy_list_item">самозакрепляющиеся</a></span></span><br>
                    </p>
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
            <div class="row">
              <div class="col-lg-4">
                <div class="eighth_page_inner_left_text">
                  <h1>Почему с нами выгодно работать</h1>
                  <p>Наша продукция продается на всех регионах КР. Мы уже открыли 4 филиала в регионах и не собираемся останавливаться</p>
                </div>
              </div>
              <div class="col-lg-8 benefits_block_right">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="benefits_block_right_element">
                      <img src="./img/static/benefits/quality.png">
                      <p>За качество отвечает производитель, а он всегда на связи!</p>
                    </div>

                  </div>
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-6 benefits_block_right_element_col">
                        <div class="benefits_block_right_element">
                          <img src="./img/static/benefits/check.png">
                          <p>Уделяем огромное значение стабильности и периодичности поставок клиентам</p>
                        </div>  
                      </div>
                      <div class="col-lg-6 benefits_block_right_element_col">
                        <div class="benefits_block_right_element">
                          <img src="./img/static/benefits/group.png">
                        <p>Наши клиенты окружены заботой, вниманием и отсутствием каких-либо рисков</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 benefits_block_right_element_col">
                        <div class="benefits_block_right_element">
                          <img src="./img/static/benefits/box1.png">
                        <p>Мы прилагаем все усилия, для того чтобы товар был всегда в наличии.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 benefits_block_right_element_col">
                        <div class="benefits_block_right_element">
                          <img src="./img/static/benefits/box2.png">
                          <p>Мы никогда не будем грузить клиента минимальной партией, вынуждая его брать больше!</p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         </div>
       </div>
       <div class="row" id="nineth_page">
         <div class="col-12" id="nineth_page_inner">
          <div class="row">
            <div class="col-12">
              <h1>Новости и статьи</h1>
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
                            <p>+996 312 35 72 87</p>
                            <p>+996 772 00 46 26</p>
                            <p>+996 770 99 00 96</p>
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
                            <span id="time_last">с 11.00 до 17.00 понедельник - пятница<br> с 09.00 до 12.00 суббота</span>
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
               <h1>Прод-Авангард</h1>
               <h2>copyright 2019</h2>
             </div>
        </div>


           <!-- last page^ -->
         </div>


       </div>
      </div><!-- main div 2 -->
    </div> <!-- first main container -->
@endsection
@push('scripts')
<script type="text/javascript">
  function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("about_positions_number", 0, 560, 3000);
animateValue("about_clients_number", 0, 2000, 2000);
animateValue("about_manu_number", 0, 5, 5000);
animateValue("about_years_number", 0, 10, 5000);
animateValue("about_french_number", 0, 4, 5000);
</script>

@endpush