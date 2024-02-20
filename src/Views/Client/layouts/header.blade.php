<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/">
                        <div class="logo">
                            <img src="/assets/Client/img/logo.png" alt="Venue Logo" />
                        </div>
                    </a>
                    <form class="top_search">
                        <input class="form-control seach" placeholder="Type to search..." />
                        <button class="ti-search btn_top"></button>
                    </form>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li>
                                <a href="#">Categories</a>
                                <ul class="sub-menu">
                                    @foreach ($category as $item)
                                        <li>
                                            <a href="/categoriescourses/{{ $item['id'] }}">{{ $item['name'] }}</a>
                                            {{-- <ul class="sub-menu">
                        <li><a href="#">Sub Visited Menu 1</a></li>
                        <li><a href="#">Sub Visited Two</a></li>
                        <li><a href="#">Sub Visited Menu 3</a></li>
                      </ul> --}}
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a class="scrollTo" data-scrollTo="blog" href="#">Cart</a>
                            </li>
                            <li>
                                <a class="scrollTo" data-scrollTo="services" href="login.html">Login |</a>
                            </li>
                            <li>
                                <a class="scrollTo login" data-scrollTo="contact" href="login.html">Sign up</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- / #primary-nav -->
                </div>
            </div>
        </div>
    </header>
</div>
