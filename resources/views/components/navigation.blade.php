<nav id="navbar" class="fixed w-full z-50 glass-nav border-b border-white/10 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 sm:h-20 items-center">
                <!-- Logo -->
                <a href="#home" class="flex-shrink-0">
                    <span
                        class="text-xl sm:text-2xl font-black tracking-tighter italic text-white font-display">Nirwana<span
                            class="text-brand-gold">Garage</span></span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6 lg:space-x-8 items-center text-sm font-medium">
                    <a href="{{ url('/#home') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Home</a>
                    <a href="{{ url('/#layanan') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Layanan</a>
                    <a href="{{ url('/#galeri') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Galeri</a>
                    <a href="{{ url('/#pricelist') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">List
                        Harga</a>
                    <a href="{{ url('/#testimoni') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Testimoi</a>
                    <a href="{{ url('/#tracking') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Tracking</a>
                    <a href="{{ url('/#tentang') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200 block min-[640px]:max-[1024px]:hidden lg:block">Tentang
                        Kami</a>
                    <a href="{{ url('/#blog') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200">Blog</a>
                    <a href="{{ url('/#faq') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200 block min-[640px]:max-[1024px]:hidden lg:block">FAQ</a>
                    <a href="{{ url('/#kontak') }}" class="nav-link text-brand-silver hover:text-white transition-colors duration-200 block min-[640px]:max-[1024px]:hidden lg:block">Kontak</a>
                    <a href="{{ url('/#booking') }}"
                        class="btn-primary bg-brand-gold px-5 py-2.5 rounded-xl text-white font-bold hover:shadow-lg glow-gold text-sm">
                        Booking
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="menu-btn"
                    class="md:hidden text-white focus:outline-none p-2 rounded-lg hover:bg-white/10 transition"
                    aria-label="Toggle Menu">
                    <div id="ham-icon" class="space-y-1.5 transition-all duration-300">
                        <span class="block w-6 h-0.5 bg-white transition-all duration-300" id="bar1"></span>
                        <span class="block w-6 h-0.5 bg-white transition-all duration-300" id="bar2"></span>
                        <span class="block w-6 h-0.5 bg-brand-gold transition-all duration-300" id="bar3"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden bg-brand-navy/98 border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col space-y-1">
                <a href="{{ url('/') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fa-house text-brand-gold w-5"></i> Home
                </a>
                <a href="{{ url('/#layanan') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fa-screwdriver-wrench text-brand-gold w-5"></i> Layanan
                </a>
                <a href="{{ url('/#galeri') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fa-images text-brand-gold w-5"></i> Galeri
                </a>
                <a href="{{ url('/#pricelist') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-tags text-brand-gold w-5"></i> List Harga
                </a>
                <a href="{{ url('/#testimoni') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-comment-dots text-brand-gold w-5"></i> Testimoni
                </a>
                   <a href="{{ url('/#tracking') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fa-location-crosshairs text-brand-gold w-5"></i> Tracking
                </a>
                
                 <a href="{{ url('/#tentang') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-info-circle text-brand-gold w-5"></i> Tentang Kami
                </a>
                 <a href="{{ url('/#blog') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-newspaper text-brand-gold w-5"></i> Blog
                </a>
                 <a href="{{ url('/#faq') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-question-circle text-brand-gold w-5"></i> FAQ
                </a>
                 <a href="{{ url('/#kontak') }}"
                    class="mobile-link text-brand-silver hover:text-white py-3 px-4 rounded-xl hover:bg-white/5 transition font-medium flex items-center gap-3">
                    <i class="fa-solid fas fa-headset text-brand-gold w-5"></i> Kontak
                </a>
                <a href="{{ url('/#booking') }}"
                    class="mobile-link mt-2 bg-brand-gold text-white py-3 px-4 rounded-xl font-bold flex items-center gap-3 justify-center">
                    <i class="fa-solid fa-calendar-check w-5"></i> Booking Sekarang
                </a>
            </div>
        </div>
    </nav>