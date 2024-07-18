<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-georgia.js"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>

    <!-- Styles -->

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

    </header>
    <div class="main">
        <div class="header">
            <div class="header_resize">
                <div class="menu_nav">
                    <ul>
                        <li class="active"><a href="index.html"><span>Home Page</span></a></li>

                        @if (Route::has('login'))
                            @auth
                                <li> <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>
                                </li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Register
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
                <div class="logo">
                    <h1><a href="index.html">Nerry<span>Uni</span></a></h1>
                </div>
                <div class="clr"></div>
                <div class="slider">
                    <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360"
                                alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada
                                porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper
                                tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit
                                amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a
                            href="#"><img src="images/slide2.jpg" width="960" height="360"
                                alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada
                                porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper
                                tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit
                                amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a
                            href="#"><img src="images/slide3.jpg" width="960" height="360"
                                alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada
                                porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper
                                tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit
                                amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> </div>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="content">
            <div class="content_resize">
                <div class="mainbar">
                    <div class="article">
                        <h2><span>Excellent Solution</span> For Your Business</h2>
                        <p class="infopost">Posted <span class="date">on 11 sep 2018</span> by <a
                                href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a
                                href="#">templates</a>, <a href="#">internet</a></p>
                        <div class="clr"></div>
                        <div class="img"><img src="images/img1.jpg" width="178" height="185" alt=""
                                class="fl" /></div>
                        <div class="post_content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a
                                    href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac
                                convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec
                                mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut
                                diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus
                                eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique
                                orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                                libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam,
                                lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
                            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue
                                    lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et
                                dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris
                                posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo,
                                imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus
                                ullamcorper.</p>
                            <p class="spec"><a href="#" class="rm">Read more</a> <a href="#"
                                    class="com">Comments <span>11</span></a></p>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="article">
                        <h2><span>We'll Make Sure Template</span> Works For You</h2>
                        <p class="infopost">Posted <span class="date">on 29 aug 2016</span> by <a
                                href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a
                                href="#">templates</a>, <a href="#">internet</a></p>
                        <div class="clr"></div>
                        <div class="img"><img src="images/img2.jpg" width="178" height="185" alt=""
                                class="fl" /></div>
                        <div class="post_content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse
                                bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam,
                                    lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis,
                                purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.
                                Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus
                                eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique
                                orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                                libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.
                            </p>
                            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue
                                    lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et
                                dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris
                                posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo,
                                imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus
                                ullamcorper.</p>
                            <p class="spec"><a href="#" class="rm">Read more</a> <a href="#"
                                    class="com">Comments <span>7</span></a></p>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a
                            href="#">&raquo;</a></p>
                </div>
                <div class="sidebar">
                    <div class="searchform">
                        <form id="formsearch" name="formsearch" method="post" action="#">
                            <span>
                                <input name="editbox_search" class="editbox_search" id="editbox_search"
                                    maxlength="80" value="Search our ste:" type="text" />
                            </span>
                            <input name="button_search" src="images/search.gif" class="button_search"
                                type="image" />
                        </form>
                    </div>
                    <div class="clr"></div>
                    <div class="gadget">
                        <h2 class="star"><span>Sidebar</span> Menu</h2>
                        <div class="clr"></div>
                        <ul class="sb_menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">TemplateInfo</a></li>
                            <li><a href="#">Style Demo</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Web Templates</a></li>
                        </ul>
                    </div>
                    <div class="gadget">
                        <h2 class="star"><span>Sponsors</span></h2>
                        <div class="clr"></div>
                        <ul class="ex_menu">
                            <li><a href="#">Lorem ipsum dolor</a><br />
                                Donec libero. Suspendisse bibendum</li>
                            <li><a href="#">Dui pede condimentum</a><br />
                                Phasellus suscipit, leo a pharetra</li>
                            <li><a href="#">Condimentum lorem</a><br />
                                Tellus eleifend magna eget</li>
                            <li><a href="#">Fringilla velit magna</a><br />
                                Curabitur vel urna in tristique</li>
                            <li><a href="#">Suspendisse bibendum</a><br />
                                Cras id urna orbi tincidunt orci ac</li>
                            <li><a href="#">Donec mattis</a><br />
                                purus nec placerat bibendum</li>
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="fbg">
            <div class="fbg_resize">
                <div class="col c1">
                    <h2><span>Image</span> Gallery</h2>
                    <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt=""
                            class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75"
                            height="75" alt="" class="gal" /></a> <a href="#"><img
                            src="images/gal3.jpg" width="75" height="75" alt=""
                            class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75"
                            height="75" alt="" class="gal" /></a> <a href="#"><img
                            src="images/gal5.jpg" width="75" height="75" alt=""
                            class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75"
                            height="75" alt="" class="gal" /></a>
                </div>
                <div class="col c2">
                    <h2><span>Services</span> Overview</h2>
                    <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere
                        cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                    <ul class="fbg_ul">
                        <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                        <li><a href="#">Excepteur officia deserunt.</a></li>
                        <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                    </ul>
                </div>
                <div class="col c3">
                    <h2><span>Contact</span> Us</h2>
                    <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo
                        gravida gravida eu porttitor dui.</p>
                    <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                        <span>Telephone:</span> +123-1234-5678<br />
                        <span>FAX:</span> +458-4578<br />
                        <span>Others:</span> +301 - 0125 - 01258<br />
                        <span>E-mail:</span> <a href="#">mail@yoursitename.com</a>
                    </p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_resize">
                <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
                <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a>
                </p>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>




</body>

</html>
