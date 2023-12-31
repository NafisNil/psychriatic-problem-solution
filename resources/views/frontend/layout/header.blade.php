<header class="header_section header_transparent sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="{{route('index')}}"><img aria-label="logo" width="156px" height="128px"
                                src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}" alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about_us')}}">About Us</a>
                      
                                </li>
                                <li><a href="{{route('about_atiq')}}"> <b>Dr.Atiq</b></a>
                              
                                </li>
                                <li><a href="{{route('all_blog')}}">blog</a>
                             
                                </li>
                                <li><a href="{{route('contact_us')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_right_sidebar d-flex align-items-center">
                        
                        <div class="canvas_open">
                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i
                                    class="icofont-navigation-menu"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <!--offcanvas menu area start-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas_main_menu">
                <li class="menu-item-has-children active">
                    <a href="index.html">Home</a>
                </li>
                <li class="menu-item-has-children"><a href="#">Match</a>
                    <ul class="sub-menu">
                        <li><a href="match.html">Match Page</a></li>
                        <li><a href="match-details.html">Match Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="all-game.html">All Game</a></li>
                        <li><a href="game-details.html">Game Details</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="players.html">Players</a></li>
                        <li><a href="player-details.html">Player Details</a></li>
                        <li><a href="registration.html">Sign Up</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                        <li><a href="blog-grid-without-sidebar.html">Blog Grid Without Sidebar</a></li>
                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                        <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!--offcanvas menu area end-->