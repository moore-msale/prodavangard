@extends('layouts.base')

@section('content')
@include('partials.header')
<div class="container-fluid partners_page" id="partners_container">
          <div class="row" id="partners_title_wrapper">
            <p id="partners_title">Наши партнеры</p>
          </div>
          <div class="row">
            <div class="col partner_class_item">
              <div class="partner_img_wrapper" id="partner_tiz">
                <img src="../img/logo_tiz.gif">
              </div>
              <div class="partner_text_wrapper">
              <h1><a href="http://www.tiz.ru/">ТИЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p>
            </div>
            </div>
            <div class="col partner_class_item">
              <div class="partner_img_wrapper" id="partner_spets">
                <img src="../img/logo_spets.png">
              </div>
              <div class="partner_text_wrapper"><h1><a href="http://www.spetselectrode.ru/">Спецэлектрод</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <div class="partner_img_wrapper" id="partner_belab">
                <img src="../img/logo_belab.png">
              </div>
              <div class="partner_text_wrapper"><h1><a href="https://www.belabraziv.ru/">БАЗ</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <div class="partner_img_wrapper" id="partner_isma">
                <img src="../img/logo_isma.png">
              </div>
             <div class="partner_text_wrapper"><h1><a href="http://ismaflex.ru/">ИСМА</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
            <div class="col partner_class_item">
              <div class="partner_img_wrapper" id="partner_sintez">
                <img src="../img/logo_sintez.png">
              </div>
             <div class="partner_text_wrapper"><h1><a href="http://www.td-sintez.ru/">ТД Синтез</a></h1>
              <p>Наше предприятие осуществляет свою деятельность на рынке лакокрасочных материалов с 1998 года.  За много лет мы заработали репутацию
              </p></div>
            </div>
          </div>



@include('partials.footer')
</div>	
@endsection