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
            <button class="mobile-menu-btn" aria-label="Menu" id="mobileMenuBtn" aria-expanded="false">
                <span class="hamburger" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
            {{-- {{ __('messages.welcome') }} --}}




            <div class="logo">
                <a href="{{ route('index') }}" style="text-decoration:none;">
                    <img src="{{asset('assets/images/christelle-logo.png')}}" alt="Tasty Daily">
                    <!-- <h2 class="footer-logo" style="color: black; text-decoration:none;">Christelle<span>🥗</span>Store -->
                    </h2>
                </a>
            </div>


        </div>
    </header>

    <!-- Mobile Navigation (only visible on small screens) -->
    <nav class="mobile-nav" id="mobileNav" aria-hidden="true">
        <div class="mobile-nav-header">
            <a href="{{ route('index') }}" class="mobile-logo">
                <img src="{{asset('assets/images/christelle-logo.png')}}" alt="Logo">
            </a>
            <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close menu">&times;</button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="mobile-nav-item has-children">
                <button class="mobile-accordion-btn" aria-expanded="false">Shop <i class="fas fa-chevron-down"></i></button>
                <ul class="mobile-submenu">
                    <li><a href="{{ route('shop') }}">Grocery</a></li>
                    <li><a href="{{ route('shop') }}">Restaurant</a></li>
                    <li><a href="{{ route('shop') }}">Beauty Products</a></li>
                    <li><a href="{{ route('shop') }}">Clothing</a></li>
                    <li><a href="{{ route('shop') }}">Decor</a></li>
                    <li><a href="{{ route('shop') }}">Sportwears</a></li>
                </ul>
            </li>
            <li><a href="{{ route('aboutUs') }}">About us</a></li>
            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>

            <li class="mobile-divider" aria-hidden="true"></li>
            <li class="mobile-actions">
                @if (Auth::check())
                <a href="{{ route('logout') }}" class="mobile-action">Logout</a>
                @else
                <a href="{{ route('login') }}" class="mobile-action">Account</a>
                @endif
                <a href="{{ route('wishlist') }}" class="mobile-action">Wishlist</a>
                <a href="{{ route('cart') }}" class="mobile-action">Cart</a>
            </li>
        </ul>
    </nav>

    <div class="mobile-nav-backdrop" id="mobileNavBackdrop" tabindex="-1"></div>

    <script>
        (function(){
            const openBtn = document.getElementById('mobileMenuBtn');
            const closeBtn = document.getElementById('mobileCloseBtn');
            const nav = document.getElementById('mobileNav');
            const backdrop = document.getElementById('mobileNavBackdrop');
            const accordion = document.querySelector('.mobile-accordion-btn');

            function openNav(){
                nav.classList.add('open');
                backdrop.classList.add('visible');
                openBtn.setAttribute('aria-expanded','true');
                nav.setAttribute('aria-hidden','false');
                document.body.style.overflow = 'hidden';
            }
            function closeNav(){
                nav.classList.remove('open');
                backdrop.classList.remove('visible');
                openBtn.setAttribute('aria-expanded','false');
                nav.setAttribute('aria-hidden','true');
                document.body.style.overflow = '';
            }

            openBtn && openBtn.addEventListener('click', function(){
                const expanded = this.getAttribute('aria-expanded') === 'true';
                if(expanded){ closeNav(); } else { openNav(); }
            });
            closeBtn && closeBtn.addEventListener('click', closeNav);
            backdrop && backdrop.addEventListener('click', closeNav);

            if(accordion){
                accordion.addEventListener('click', function(){
                    const expanded = this.getAttribute('aria-expanded') === 'true';
                    this.setAttribute('aria-expanded', String(!expanded));
                    this.parentElement.querySelector('.mobile-submenu').classList.toggle('open');
                });
            }
        })();
    </script>