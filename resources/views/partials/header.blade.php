<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
<span id="logo_span"><a class="navbar-brand" href="{{ route('index') }}"><img src="/img/static/logo.png"></a>
<!-- <a class="navbar-brand" href="{{ route('index') }}">Прод-Авангард <br>Компани</a> -->
</span>




<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li id="main_link" class="nav-item active">
      <a class="nav-link" href="{{ route('index') }}">Главная</a>
    </li>
    <li id="about_link" class="nav-item">
      <a class="nav-link" href="{{ route('about') }}">О нас</a>
    </li>
    <li id="catalog_link" class="nav-item">
      <a class="nav-link" href="{{ route('viewCatalogAll') }}">Каталог</a>
    </li>
    <li id="vendor_link" class="nav-item">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Производители</a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('partner',['id' => 3]) }}">ТИЗ «Томский инструмент»</a></li>
                    <li><a class="dropdown-item" href="{{ route('partner',['id' => 4]) }}">СпецЭлектрод</a></li>
                    <li><a class="dropdown-item" href="{{ route('partner',['id' => 1]) }}">Белгородский Абразивынй Завод</a></li>
                    <li><a class="dropdown-item" href="{{ route('partner',['id' => 2]) }}">ISMAFLEX «ИСМА»</a></li>
                    <li><a class="dropdown-item" href="{{ route('partner',['id' => 5]) }}">Синтез</a></li>
           </ul>         
      <!-- <a class="nav-link" href="{{ route('part') }}">Производители</a> -->
    </li>
    <li id="news_link" class="nav-item">
      <a class="nav-link" href="#">Новости</a>
    </li>

    <li id="outlets_btn_li" class="nav-item">
      <a class="nav-link" href="{{ route('coop_map') }}">Точки продаж</a>
    </li>
    <li id="contacts_link" class="nav-item">
      <a class="nav-link" href="{{ route('contacts') }}">Контакы</a>
    </li>
<!--     <li id="outlets_btn_li" class="nav-item">
      <a class="nav-link" href="#"><button id="outlets_btn">Точки продаж</button></a>
    </li> -->
    <li class="nav-item" id="search_form_wrapper">
      <form id="search_form" action="/search" class="form-inline my-2 my-lg-0" method="POST" role="search">
    {{ csrf_field() }}
      <div class="input-group">
          <input id="search_field" type="text" class="form-control" name="q"
              placeholder="">
      </div>

      <input id="search_icon" type="image" src="/img/search.svg" border="0" alt="search" />
      </form>
    </li>

  </ul>
  <span class="phone">
    <p>+996 312 35 72 87</p>
    <p>+996 772 00 46 26</p>
    <p>+996 770 99 00 96</p>
  </span>
</div>
</nav>