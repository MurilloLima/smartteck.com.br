<nav id="ttr_menu" class="navbar-default navbar">
    <div id="ttr_menu_inner_in">
        <div class="menuforeground">
        </div>
        <div class="ttr_menushape1">
            <div class="html_content">
                <p>
                    <span style="font-family:'Arial';font-weight:700;font-size:2.571em;color:rgba(78,78,78,1);">
                        Smart Teck
                    </span>
                </p>
            </div>
        </div>
        <div id="navigationmenu">
            <div class="navbar-header">
                <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                    type="button">
                    <span class="sr-only">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                </button>
                {{-- <a href="http://www.templatetoaster.com" target="_self">
                    <img class="ttr_menu_logo" src="{{ asset('home/assets/images/menulogo.png') }}">
                </a> --}}
            </div>
            <div class="menu-center collapse navbar-collapse">
                <ul class="ttr_menu_items nav navbar-nav navbar-right">
                    <li class="ttr_menu_items_parent dropdown active"><a href="{{ route('home.pages.index') }}"
                            class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="about.html"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Empresa</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="services.html"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Serviços</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="{{ route('home.pages.noticias') }}"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Notícicas</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="contact.html"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Negocie aqui</a>
                        <hr class="horiz_separator" />
                    <li class="ttr_menu_items_parent dropdown"><a href="{{ route('home.pages.contact') }}"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Fale conosco</a>
                        <hr class="horiz_separator" />
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
