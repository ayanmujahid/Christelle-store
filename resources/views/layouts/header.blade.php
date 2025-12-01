<body>
<div id="preloader">
  <div class="preloader-content">
    <div class="arc-text" id="arcText"></div>
    <img src="{{asset('assets/images/christelle-logo.png')}}" 
         alt="Logo" 
         class="preloader-logo" id="logo">
  </div>
</div>





    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                <i class="fas fa-truck delivery-icon"></i>
                <span>Delivery on Next Day from 10:00 AM to 08:00 PM</span>
            </div>
            <nav>
                <ul class="top-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li><a href="{{ route('aboutUs') }}">About us</a></li>
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </nav>
            <div class="top-bar-right">
                <a href="tel:+1234567890" class="phone-link">
                    <i class="fas fa-phone phone-icon"></i>
                    +1 234 567 8900
                </a>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->

    <header class="main-header">
        <div class="header-content">
            <button class="mobile-menu-btn" aria-label="Menu">
                <i class="fas fa-bars"></i>
            </button>
            {{-- {{ __('messages.welcome') }} --}}

            <nav>
                <ul class="nav-menu">
                    <!-- 🌍 Language Switcher -->
                    <div id="google_translate_element" style="float: right; margin: 10px;"></div>

                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                includedLanguages: 'en,fr',
                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                            }, 'google_translate_element');
                        }
                    </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                    <!-- Existing Navigation Items -->
                    <li class="nav-item">
                        <a href="{{ route('shop') }}" class="nav-link">
                            <i class="fas fa-shopping-bag nav-icon"></i>
                            Grocery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop') }}" class="nav-link">
                            <i class="fas fa-utensils nav-icon"></i>
                            Restaurant
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop') }}" class="nav-link">
                            <i class="fas fa-spa nav-icon"></i>
                            Beauty Products
                        </a>
                    </li>
                </ul>
            </nav>


            <div class="logo">
                <a href="{{ route('index') }}" style="text-decoration:none;">
                    <img src="{{asset('assets/images/christelle-logo.png')}}" alt="Tasty Daily">
                    <!-- <h2 class="footer-logo" style="color: black; text-decoration:none;">Christelle<span>🥗</span>Store -->
                    </h2>
                </a>
            </div>

            <div class="header-actions">
                <nav>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="{{ route('shop') }}" class="nav-link">
                                <i class="fas fa-shirt nav-icon"></i>
                                Clothing
                            </a>
                            <div class="dropdown">
                                <a href="{{ route('shop') }}">Women's</a>
                                <a href="{{ route('shop') }}">Mans</a>
                                <a href="{{ route('shop') }}">Kids</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shop') }}" class="nav-link">
                                <i class="fas fa-paint-roller nav-icon"></i>
                                Decor
                            </a>
                            <!-- <div class="dropdown">
                                <a href="#">Bread</a>
                                <a href="#">Tortillas</a>
                            </div> -->
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shop') }}" class="nav-link">
                                <i class="fas fa-person-running nav-icon"></i>
                                Sportwears
                            </a>
                            <!-- <div class="dropdown">
                                <a href="#">Juice</a>
                                <a href="#">Water</a>
                            </div> -->
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#other" class="nav-link">
                                <i class="fas fa-ellipsis-h nav-icon"></i>
                                Other
                            </a>
                            <div class="dropdown">
                                <a href="#">Milk</a>
                                <a href="#">Cheese</a>
                                <a href="#">Eggs</a>
                            </div>
                        </li> -->
                    </ul>
                </nav>



                <button class="icon-btn" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
                @if (Auth::check())
                <a href="{{ route('logout') }}" class="icon-btn" aria-label="Logout">
                    <i class="fas fa-sign-out"></i>
                </a>
                @else
                <a href="{{ route('login') }}" class="icon-btn" aria-label="Account">
                    <i class="fas fa-user"></i>
                </a>
                @endif
                <a href="{{ route('wishlist') }}" class="icon-btn" aria-label="Wishlist">
                    <i class="far fa-heart"></i>
                </a>

                <a href="{{ route('cart') }}" class="icon-btn" aria-label="Cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </header>