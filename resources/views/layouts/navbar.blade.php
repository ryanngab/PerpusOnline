    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">WIKBOOK</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Book</a></li>
                            <li class="scroll-to-section"><a href="/Book">AllBook</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Genre Book</a>

                                <ul>
                                    @foreach ( $genre as $genre)
                                    <li><a href="/Book/{{$genre->id}}">{{$genre->name }}</a></li>
                                    @endforeach
                                    @can('Admin')
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    @endcan
                                </ul>
                                @auth
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="scroll-to-section  btn btn-outline-dark "></i> Logout</button>
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li><a class="scrollto rounded " href="/login">Get Started</a></li>
                            @endguest
                            </li>
                        </ul>


                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                        <div id="modal" class="popupContainer" style="display:none;">
                            <div class="popupHeader">
                                <span class="header_title">Login</span>
                                <span class="modal_close"><i class="fa fa-times"></i></span>
                            </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
