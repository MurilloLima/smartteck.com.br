<nav id="ttr_menu" class="navbar-default navbar">
    <div id="ttr_menu_inner_in">
        <div class="menuforeground">
        </div>
        {{-- <div class="ttr_menushape1">
            <div class="html_content">
                <p><span
                        style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">CORPONE</span>
                </p>
            </div>
        </div> --}}
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
                <a href="#" target="_self">
                    <img class="ttr_menu_logo" src="{{ asset('home/assets/images/logo.png') }}">
                </a>
            </div>
            <div class="menu-center collapse navbar-collapse">
                <ul class="ttr_menu_items nav navbar-nav navbar-right">
                    <li class="ttr_menu_items_parent dropdown">
                        <a href="{{ route('home.index') }}" class="ttr_menu_items_parent_link">
                            <span class="menuchildicon"></span>
                            ome
                        </a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown">
                        <a href="{{ route('about') }}" class="ttr_menu_items_parent_link">
                            <span class="menuchildicon"></span>
                            Sobre
                        </a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a
                            href="http://www.planalto.gov.br/ccivil_03/leis/lcp/lcp131.htm"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Transparência</a>
                        <hr class="horiz_separator" />
                    </li>

                    <li class="ttr_menu_items_parent dropdown"><a
                            href="http://www.planalto.gov.br/ccivil_03/leis/lcp/lcp131.htm"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Legislação</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="{{ route('noticias.index') }}"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Notícias</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href=""
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Guia APIs</a>
                        <hr class="horiz_separator" />
                    </li>
                    <li class="ttr_menu_items_parent dropdown"><a href="https://cobrancas.smartteck.com.br"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Área do Cliente</a>
                        <hr class="horiz_separator" />
                    </li>

                    <li class="ttr_menu_items_parent dropdown"><a href="{{ route('contact.index') }}"
                            class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contatos</a>
                        <hr class="horiz_separator" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
