                <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand" href="{{ route('index') }}">prodAvangard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li id="main_link" class="nav-item active">
                      <a class="nav-link" href="{{ route('index') }}">Главная</a>
                    </li>
                    <li id="about_link" class="nav-item">
                      <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li id="catalog_link" class="nav-item">
                      <a class="nav-link" href="{{ route('viewCatalogAll') }}">Каталог</a>
                    </li>
                    <li id="category_link" class="nav-item">
                      <a class="nav-link" href="#">Категории</a>
                    </li>
                    <li id="vendor_link" class="nav-item">
                      <a class="nav-link" href="{{ route('part') }}">Производители</a>
                    </li>

                    <li id="vendor_link" class="nav-item">
                      <a class="nav-link" href="#"><button id="outlets_btn">Точки продаж</button></a>
                    </li>

                    <li class="nav-item" id="search_form_wrapper">
                      <form id="search_form" class="form-inline my-2 my-lg-0">
<!--                       <input id="search_field" class="form-control mr-sm-2" type="search" placeholder="Точки продаж" aria-label="Search"> -->
                      <input id="search_icon" type="image" src="/img/search.svg" border="0" alt="search" />
                      </form>
                    </li>

                  </ul>

                  <span class="phone">
                    <p>+996 312 35 72 87</p>
                    <p>+996 770 99 00 36</p>
                    <p>+996 770 00 46 26</p>
                  </span>
                </div>
              </nav>