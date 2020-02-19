@extends('layouts.base')

@section('content')
@include('partials.header_dark')
<div class="container" id="contacts_page_container">
<div class="row">
  <div class="col-12">
    <div class="contacts_wrapper">
    <div class="col-12">
      <h1 class="about_header_h1">Контакты
      </h1>
    </div>
    <div class="row">
        <div class="col-6">
          <p>
              <span>Наш адрес:</span><br>
              Кыргызстан,<br>
              г. Бишкек, улица Садыгалиева 5а<br><br>
              <span>Тел:</span><br>
              +996 312 35 72 87<br>
              +996 770 99 00 36<br>
              +996 770 00 46 26<br>
              <br><br>
              <span>E-mail:</span> rashodnik.kg@gmail.com<br>
              <span>Web:</span> <a href="http://rashodnik.kg/">rashodnik.kg</a>
          </p>   

        </div>
        <div class="col-6">
          <p>
            <span>Филиалы</span><br> 
            Представительство по Иссык-Кульской области
            <br>
            г. Каракол
            <br> 
            Калыбек Аскетович тел. 0770550582
            <br>
            <br>
            Представительство по Нарынской области
            <br> 
            г. Нарын
            <br>
            Тилек Доктурбекович тел. 0770990061
            <br>
            <br>
            Представительство по Талаской области
            <br>
            г. Талас
            <br>
            Шамбет Адылканович тел. 0709900890
            <br>
            <br>
            Представительство по Ошской и Джалал-Абадской области
            <br>
            г. Ош
            <br>
            Фахриддин Кадыржанович тел. 0770822093

          </p>            

        </div>
    </div>
    

    </div>
  </div>
  
</div>


@include('partials.footer')
</div>	
@endsection