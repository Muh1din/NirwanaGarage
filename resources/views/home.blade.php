<x-layouts.master>

    <!-- Hero section  -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-brand-navy">
        <!-- Ornamen Background -->
        <div class="absolute top-0 right-0 w-1/2 h-full overflow-hidden opacity-20 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-gold rounded-full blur-[150px]"></div>
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <!-- Logo Background dengan Animasi Zoom -->
            <div
                class="animate-logo absolute top-1/2 left-[80%] -translate-x-1/2 -translate-y-1/2 w-full max-w-[900px] pointer-events-none -z-10 select-none grayscale mix-blend-overlay">
                <img src="logo.jpeg" alt="Chat Motor Logo" class="w-full h-auto object-contain">
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center relative">

                <!-- Left Side: Content -->
                <div class="max-w-2xl">
                    <!-- Badge (Delay 1) -->
                    <div
                        class="animate-item delay-1 inline-flex items-center gap-2 px-3 py-1 rounded-full border border-brand-gold/30 bg-brand-gold/10 text-brand-gold text-xs font-bold tracking-widest uppercase mb-6">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-gold opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-gold"></span>
                        </span>
                        Performance & Restoration Hub
                    </div>

                    <!-- Title (Delay 2) -->
                    <h1
                        class="animate-item delay-2 text-6xl md:text-8xl font-black leading-[0.9] text-white tracking-tighter uppercase">
                        LEBIH <br>
                        <span class="text-gradient-gold">DARI</span><br>
                        ESTETIKA.
                    </h1>

                    <!-- Paragraph (Delay 3) -->
                    <p
                        class="animate-item delay-3 mt-8 text-brand-silver text-lg md:text-xl leading-relaxed max-w-lg border-l-2 border-brand-gold pl-6 backdrop-blur-[2px]">
                        Nirwana Garage menghadirkan perpaduan sempurna antara <span
                            class="text-white font-bold">Restorasi Presisi</span> dan <span
                            class="text-white font-bold">Upgrade Performa</span>.
                    </p>

                    <!-- Buttons (Delay 4) -->
                    <div class="animate-item delay-4 mt-10 flex flex-col sm:flex-row gap-5">
                        <a href="#kontak"
                            class="group relative px-10 py-5 bg-brand-gold text-white text-center font-black rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_40px_rgba(197,142,75,0.4)]">
                            <span class="relative z-10">KONSULTASI SPEK</span>
                        </a>
                        <a href="#layanan"
                            class="px-10 py-5 border-2 border-brand-silver/20 text-white text-center font-bold rounded-2xl hover:bg-white/5 transition-all duration-300 backdrop-blur-sm">
                            LIHAT LAYANAN
                        </a>
                    </div>
                </div>

                <!-- RIGHT: Floating Cards (hidden on small screens) -->
                <div class="hidden lg:grid grid-cols-2 gap-5 relative animate-item delay-5">
                    <div
                        class="glass-card float-card shine-effect p-7 rounded-3xl border border-white/10 mt-10 shadow-2xl">
                        <div class="text-brand-gold font-display text-3xl mb-1">ULTRA</div>
                        <div class="text-brand-silver text-[9px] uppercase tracking-[0.2em] font-bold">Deep Gloss
                            Restoration</div>
                        <div class="mt-4 w-8 h-0.5 bg-brand-gold/50"></div>
                        <p class="text-brand-silver/70 text-xs mt-3 leading-relaxed">Cat premium multi-layer dengan
                            sistem oven curing.</p>
                    </div>
                    <div class="float-card-2 shine-effect p-7 rounded-3xl border border-white/10 shadow-2xl">
                        <div class="text-brand-gold font-display text-3xl mb-1">PEAK</div>
                        <div class="text-brand-silver text-[9px] uppercase tracking-[0.2em] font-bold">Horsepower
                            Optimization</div>
                        <div class="mt-4 w-8 h-0.5 bg-brand-gold/50"></div>
                        <p class="text-brand-silver/70 text-xs mt-3 leading-relaxed">Bore up presisi untuk tenaga
                            maksimal nan durable.</p>
                    </div>
                    <div
                        class="col-span-2 shine-effect p-6 rounded-3xl border border-white/10 shadow-2xl flex items-center gap-5">
                        <div class="w-14 h-14 bg-brand-gold/20 rounded-2xl flex items-center justify-center text-2xl">⚡
                        </div>
                        <div>
                            <div class="text-white font-bold text-sm">Slot Booking Terbuka</div>
                        </div>
                        <a href="#booking"
                            class="ml-auto px-4 py-2 bg-brand-gold/20 border border-brand-gold/40 text-brand-gold text-xs font-bold rounded-xl hover:bg-brand-gold hover:text-white transition-all whitespace-nowrap">
                            Ambil →
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end Hero -->


    <!-- service section -->
    <section id="layanan" class="py-16 sm:py-20 lg:py-24 bg-ui-main relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-full h-24 bg-gradient-to-b from-brand-navy/8 to-transparent pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-16 gap-6">
                <div data-scroll="fade-left">
                    <div
                        class="flex items-center gap-3 text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-3">
                        <span class="w-10 h-px bg-brand-gold"></span>
                        Garage Services
                    </div>
                    <h3 class="section-title font-display text-brand-navy uppercase">
                        SOLUSI <span class="text-gold-gradient italic">PERFORMA</span><br class="hidden sm:block"> &
                        ESTETIKA
                    </h3>
                </div>
                <p data-scroll="fade-right"
                    class="text-brand-steel font-medium max-w-xs border-l-4 border-brand-silver/30 pl-4 text-sm leading-relaxed">
                    Dari restorasi tampilan hingga peningkatan tenaga mesin, kami kerjakan dengan presisi tinggi.
                </p>
            </div>

            <!-- Service Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 stagger-children">

                <!-- Service 1: Paint -->
                <div data-scroll="fade-up"
                    class="service-card group bg-white p-8 sm:p-10 rounded-3xl border border-ui-border hover:border-brand-gold/40 hover:shadow-2xl shine-effect relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-28 h-28 bg-brand-gold/5 rounded-bl-full -mr-14 -mt-14 group-hover:bg-brand-gold/10 transition-colors">
                    </div>
                    <div
                        class="w-14 h-14 bg-brand-navy rounded-2xl flex items-center justify-center mb-7 transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fa-solid fa-paint-roller text-brand-gold text-xl"></i>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-display font-black text-brand-navy mb-3 uppercase">Paint &
                        Restorasi</h4>
                    <p class="text-brand-steel leading-relaxed text-sm mb-6">Kembalikan tampilan motor seperti baru atau
                        custom warna premium dengan standar oven system.</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-navy/70">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> Full Body & Frame Repaint
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-navy/70">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> Detailing Part & Baut
                        </li>
                    </ul>
                </div>

                <!-- Service 2: Tune Up (Highlight) -->
                <div data-scroll="fade-up"
                    class="service-card group bg-brand-navy p-8 sm:p-10 rounded-3xl hover:shadow-[0_20px_60px_rgba(27,38,59,0.3)] shine-effect relative overflow-hidden">
                    <div
                        class="absolute bottom-0 right-0 opacity-[0.07] text-[8rem] sm:text-[9rem] -mb-8 -mr-4 text-white italic font-display leading-none select-none">
                        HP</div>
                    <div
                        class="w-14 h-14 bg-brand-gold rounded-2xl flex items-center justify-center mb-7 transform group-hover:-rotate-6 transition-transform duration-300">
                        <i class="fa-solid fa-screwdriver-wrench text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-display font-black text-white mb-3 uppercase">Performance Tune
                        Up</h4>
                    <p class="text-brand-silver leading-relaxed text-sm mb-6">Optimasi mesin untuk penggunaan harian
                        agar tarikan lebih responsif dan bensin tetap efisien.</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-silver">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> Pembersihan Throttle
                            Body/Karbu
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-silver">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> CVT/Drivetrain Maintenance
                        </li>
                    </ul>
                </div>

                <!-- Service 3: Bore Up -->
                <div data-scroll="fade-up"
                    class="service-card group bg-white p-8 sm:p-10 rounded-3xl border border-ui-border hover:border-brand-gold/40 hover:shadow-2xl shine-effect relative overflow-hidden sm:col-span-2 lg:col-span-1">
                    <div
                        class="absolute top-0 right-0 w-28 h-28 bg-brand-gold/5 rounded-bl-full -mr-14 -mt-14 group-hover:bg-brand-gold/10 transition-colors">
                    </div>
                    <div
                        class="w-14 h-14 bg-brand-navy rounded-2xl flex items-center justify-center mb-7 transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fa-solid fa-bolt text-brand-gold text-xl"></i>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-display font-black text-brand-navy mb-3 uppercase">Bore Up &
                        Stroke</h4>
                    <p class="text-brand-steel leading-relaxed text-sm mb-6">Tingkatkan kapasitas mesin untuk tenaga
                        maksimal. Pengerjaan rapi dan perhitungan matang.</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-navy/70">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> Pemasangan Block & Piston Kit
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-brand-navy/70">
                            <i class="fa-solid fa-check text-brand-gold text-xs w-4"></i> Custom Noken As & Porting
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CTA Bottom -->
            <div data-scroll="fade-up"
                class="mt-12 sm:mt-16 p-6 sm:p-8 bg-brand-navy rounded-3xl border border-brand-gold/30 flex flex-col sm:flex-row items-center justify-between gap-5 shadow-2xl">
                <div class="flex items-center gap-4 sm:gap-5 text-center sm:text-left">
                    <div
                        class="bg-brand-gold/20 w-12 h-12 sm:w-14 sm:h-14 rounded-full flex items-center justify-center text-xl sm:text-2xl flex-shrink-0">
                        ⚡</div>
                    <div>
                        <p class="text-white font-bold text-base sm:text-lg">Siap upgrade performa motor Abang?</p>
                        <p class="text-brand-silver text-xs sm:text-sm italic">Konsultasikan spek bore up yang sesuai
                            budget & kebutuhan harian.</p>
                    </div>
                </div>
                <a href="#kontak"
                    class="btn-primary w-full sm:w-auto text-center px-7 py-3 bg-brand-gold text-white font-black rounded-xl hover:scale-105 transition-transform text-sm">
                    KONSULTASI SPEK
                </a>
            </div>
        </div>
    </section>
    <!-- end service -->

    <!-- galery section -->
    <section id="galeri" class="py-16 sm:py-20 lg:py-24 bg-brand-navy relative overflow-hidden">
        <div
            class="absolute top-1/2 left-0 w-64 sm:w-96 h-64 sm:h-96 bg-brand-gold/5 rounded-full blur-[120px] -translate-y-1/2 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center mb-10 sm:mb-16" data-scroll="fade-up">
                <div class="text-brand-gold text-[11px] font-bold tracking-[0.4em] uppercase mb-4">Masterpiece Portfolio
                </div>
                <h3 class="mega-title font-display text-white uppercase">HASIL <span
                        class="text-gold-gradient italic">EKSEKUSI.</span></h3>
                <div class="w-16 sm:w-24 h-0.5 bg-brand-gold mx-auto mt-6 sm:mt-8"></div>
            </div>

            <!-- Gallery Grid: responsive -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 auto-rows-[220px] sm:auto-rows-[260px] lg:auto-rows-[300px]">

                <!-- Item 1: Large -->
                <div data-scroll="fade-left"
                    class="gallery-item col-span-1 sm:col-span-2 row-span-1 sm:row-span-2 relative overflow-hidden rounded-3xl border border-white/10 group">
                    <img src="cb3.png" alt="Restorasi Full" class="w-full h-full object-cover">
                    <div class="absolute inset-0 gallery-overlay"></div>
                    <div class="absolute bottom-5 sm:bottom-8 left-5 sm:left-8">
                        <span
                            class="px-3 py-1 bg-brand-gold text-white text-[10px] font-bold rounded-full uppercase tracking-widest">Restorasi</span>
                        <h4 class="text-lg sm:text-2xl font-display font-black text-white mt-2 uppercase">Honda CB
                            Classic</h4>
                        <p class="text-brand-silver text-xs sm:text-sm">Full Rebuild & Deep Gloss Finish</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div data-scroll="fade-up"
                    class="gallery-item col-span-1 sm:col-span-2 relative overflow-hidden rounded-3xl border border-white/10 group">
                    <img src="nmax.jpeg" alt="Bore Up Service" class="w-full h-full object-cover">
                    <div class="absolute inset-0 gallery-overlay"></div>
                    <div class="absolute bottom-4 sm:bottom-6 left-4 sm:left-6">
                        <span
                            class="px-3 py-1 bg-brand-navy border border-brand-gold text-brand-gold text-[10px] font-bold rounded-full uppercase tracking-widest">Performance</span>
                        <h4 class="text-base sm:text-xl font-display font-black text-white mt-2 uppercase">Bore Up NMAX
                            183cc</h4>
                    </div>
                </div>

                <!-- Item 3 -->
                <div data-scroll="fade-up"
                    class="gallery-item relative overflow-hidden rounded-3xl border border-white/10 group">
                    <img src="vario.jpeg" alt="Painting Service" class="w-full h-full object-cover">
                    <div class="absolute inset-0 gallery-overlay"></div>
                    <div class="absolute bottom-4 left-5">
                        <h4 class="text-base sm:text-lg font-display font-black text-white italic uppercase">Candy Red
                        </h4>
                    </div>
                </div>

                <!-- Item 4 -->
                <div data-scroll="fade-right"
                    class="gallery-item relative overflow-hidden rounded-3xl border border-white/10 group">
                    <img src="bautTitanium.jpeg" alt="Detailing" class="w-full h-full object-cover">
                    <div class="absolute inset-0 gallery-overlay"></div>
                    <div class="absolute bottom-4 left-5">
                        <h4 class="text-base sm:text-lg font-display font-black text-white italic uppercase">Titanium
                            Bolts</h4>
                    </div>
                </div>
            </div>

            <!-- View All -->
            <div class="mt-10 sm:mt-16 text-center" data-scroll="fade-up">
                <a href="{{ url('/semua-project') }}"
                    class="inline-flex items-center gap-4 text-brand-silver hover:text-brand-gold font-bold transition-all group">
                    <span class="tracking-[0.2em] uppercase text-xs">Lihat Semua Proyek</span>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-brand-silver/20 flex items-center justify-center group-hover:border-brand-gold group-hover:bg-brand-gold/10 transition-all">
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform text-sm"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- end galery -->

    <!-- price list section -->
    <section id="pricelist" class="py-16 sm:py-20 lg:py-24 bg-ui-main relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12 sm:mb-16" data-scroll="fade-up">
                <div class="text-brand-navy text-[11px] font-bold tracking-[0.4em] uppercase mb-3">Investment for Your
                    Ride</div>
                <h3 class="mega-title font-display text-brand-navy uppercase">PRICELIST <span
                        class="text-gold-gradient italic">ESTIMASI.</span></h3>
                <p class="mt-3 text-brand-steel max-w-sm mx-auto text-xs sm:text-sm italic">*Harga final ditentukan
                    setelah inspeksi kondisi unit di workshop.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 items-center stagger-children">

                <!-- Category 1: Painting -->
                <div data-scroll="fade-up"
                    class="bg-white rounded-[2rem] p-7 sm:p-8 border border-ui-border hover:shadow-2xl transition-all duration-500 flex flex-col service-card">
                    <div class="mb-7">
                        <h4
                            class="text-lg sm:text-xl font-display font-black text-brand-navy mb-1 uppercase tracking-tight">
                            Repaint & Body</h4>
                        <p class="text-brand-steel text-[10px] font-bold uppercase tracking-widest">Estetika Maksimal
                        </p>
                    </div>
                    <div class="space-y-4 flex-grow">
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Repaint Velg</p>
                                <p class="text-[10px] text-brand-steel">Sepasang (Matic/Bebek)</p>
                            </div>
                            <p class="text-brand-gold font-black">400rb+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Full Body Halus</p>
                                <p class="text-[10px] text-brand-steel">Matic Kecil (Mio/Beat)</p>
                            </div>
                            <p class="text-brand-gold font-black">1.2jt+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Full Body Halus</p>
                                <p class="text-[10px] text-brand-steel">Matic Besar (NMAX/PCX)</p>
                            </div>
                            <p class="text-brand-gold font-black">1.8jt+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Bak Mesin/CVT</p>
                                <p class="text-[10px] text-brand-steel">Kanan-Kiri</p>
                            </div>
                            <p class="text-brand-gold font-black">350rb+</p>
                        </div>
                    </div>
                    <a target="_blank" href="https://wa.me/6285717676292?text=Halo+Nirwana+Garage,+saya+mau+tanya-tanya+tentang+Paket+Repaint&Body"
                        class="mt-8 block text-center py-3.5 rounded-2xl bg-ui-main border border-brand-navy text-brand-navy font-black text-xs hover:bg-brand-navy hover:text-white transition-all uppercase tracking-wider">
                        Tanya Admin
                    </a>
                </div>

                <!-- Category 2: Performance (Highlight) -->
                <div data-scroll="zoom-in"
                    class="bg-brand-navy rounded-[2rem] p-7 sm:p-8 border border-brand-gold/50 shadow-2xl flex flex-col relative lg:scale-105 z-20">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-gold text-white text-[10px] font-black px-5 py-1.5 rounded-full tracking-[0.15em] shadow-lg">
                        POPULAR CHOICE
                    </div>
                    <div class="mb-7">
                        <h4 class="text-lg sm:text-xl font-display font-black text-white mb-1 uppercase tracking-tight">
                            Performance</h4>
                        <p class="text-brand-gold text-[10px] font-bold uppercase tracking-widest">Power & Reliability
                        </p>
                    </div>
                    <div class="space-y-4 flex-grow">
                        <div class="flex justify-between items-end border-b border-white/10 pb-2">
                            <div>
                                <p class="text-white font-bold text-sm">Tune Up Ultimate</p>
                                <p class="text-[10px] text-brand-silver italic">Gurun/TB/CVT Clean</p>
                            </div>
                            <p class="text-brand-gold font-black">250rb</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-white/10 pb-2">
                            <div>
                                <p class="text-white font-bold text-sm">Bore Up Harian</p>
                                <p class="text-[10px] text-brand-silver italic">Inc. Jasa & Paking</p>
                            </div>
                            <p class="text-brand-gold font-black">800rb+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-white/10 pb-2">
                            <div>
                                <p class="text-white font-bold text-sm">Bore Up Kirian</p>
                                <p class="text-[10px] text-brand-silver italic">Full Spek CVT</p>
                            </div>
                            <p class="text-brand-gold font-black">1.5jt+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-white/10 pb-2">
                            <div>
                                <p class="text-white font-bold text-sm">Porting Polish</p>
                                <p class="text-[10px] text-brand-silver italic">CNC Look Finish</p>
                            </div>
                            <p class="text-brand-gold font-black">450rb+</p>
                        </div>
                    </div>
                    <a target="_blank" href="https://wa.me/6285717676292?text=Halo+Nirwana+Garage,+saya+mau+tanya-tanya+tentang+Paket+Performance"
                        class="btn-primary mt-8 block text-center py-3.5 rounded-2xl bg-brand-gold text-white font-black text-xs glow-gold hover:scale-105 transition-transform uppercase tracking-wider">
                        Tanya Admin
                    </a>
                </div>

                <!-- Category 3: Restoration -->
                <div data-scroll="fade-up"
                    class="bg-white rounded-[2rem] p-7 sm:p-8 border border-ui-border hover:shadow-2xl transition-all duration-500 flex flex-col service-card">
                    <div class="mb-7">
                        <h4
                            class="text-lg sm:text-xl font-display font-black text-brand-navy mb-1 uppercase tracking-tight">
                            Full Restoration</h4>
                        <p class="text-brand-steel text-[10px] font-bold uppercase tracking-widest">Back to Zero</p>
                    </div>
                    <div class="space-y-4 flex-grow">
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Restorasi Original</p>
                                <p class="text-[10px] text-brand-steel">Bebek/Sport 2T</p>
                            </div>
                            <p class="text-brand-gold font-black">5jt+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Detaching & Cleaning</p>
                                <p class="text-[10px] text-brand-steel">Rangka & Mesin</p>
                            </div>
                            <p class="text-brand-gold font-black">750rb+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Vapour Blasting</p>
                                <p class="text-[10px] text-brand-steel">Crankcase/Block</p>
                            </div>
                            <p class="text-brand-gold font-black">300rb+</p>
                        </div>
                        <div class="flex justify-between items-end border-b border-dashed border-brand-silver/50 pb-2">
                            <div>
                                <p class="text-brand-navy font-bold text-sm">Repaint Rangka</p>
                                <p class="text-[10px] text-brand-steel">Anti-Karat Epoxy</p>
                            </div>
                            <p class="text-brand-gold font-black">600rb+</p>
                        </div>
                    </div>
                    <a href="https://wa.me/6285717676292?text=Halo+Nirwana+Garage,+saya+mau+tanya-tanya+tentang+Paket+Full+Restoration"
                        class="mt-8 block text-center py-3.5 rounded-2xl bg-ui-main border border-brand-navy text-brand-navy font-black text-xs hover:bg-brand-navy hover:text-white transition-all uppercase tracking-wider">
                        Tanya Admin
                    </a>
                </div>
            </div>

            <p data-scroll="fade-up"
                class="mt-10 text-center text-brand-steel text-xs flex items-center justify-center gap-2">
                <i class="fa-solid fa-circle-info text-brand-gold"></i>
                Pengerjaan menggunakan material A-Class (Spies Hecker/Sikkens) & Sparepart Original.
            </p>
        </div>
    </section>
    <!-- end pricelist -->


    <!-- testimoni section -->
    <section id="testimoni" class="py-16 sm:py-20 lg:py-24 bg-brand-navy relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <div class="absolute -top-20 -left-20 w-64 sm:w-96 h-64 sm:h-96 bg-brand-gold/10 rounded-full blur-[100px]">
            </div>
            <div
                class="absolute -bottom-20 -right-20 w-64 sm:w-96 h-64 sm:h-96 bg-brand-gold/5 rounded-full blur-[100px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-start">

                <!-- Left: Title -->
                <div class="lg:col-span-4" data-scroll="fade-left">
                    <div
                        class="flex items-center gap-3 text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-4">
                        <span class="w-8 h-px bg-brand-gold"></span>
                        Voice of Riders
                    </div>
                    <h3 class="mega-title font-display text-white uppercase leading-none mb-5">
                        KATA<br><span class="text-gold-gradient italic">MEREKA.</span>
                    </h3>
                    <p class="text-brand-silver leading-relaxed text-sm max-w-xs">
                        Kepercayaan adalah segalanya. Kami menjaga setiap detail pada standar tertinggi.
                    </p>
                </div>

                <!-- Right: Cards -->
                <div class="lg:col-span-8 space-y-5 sm:space-y-6 stagger-children">
                    <div data-scroll="fade-right"
                        class="testi-card glass-card p-7 sm:p-10 rounded-3xl border border-white/10 hover:border-brand-gold/30 transition-all duration-500">
                        <i class="fa-solid fa-quote-left text-brand-gold/20 text-3xl mb-4 block"></i>
                        <p class="text-base sm:text-xl font-medium text-brand-silver leading-relaxed italic mb-5">
                            "Bukan cuma soal warna, tapi presisinya. Restorasi original di sini bener-bener teliti
                            sampai detail terkecil. Berasa bawa motor baru keluar dari pabrik."
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-px bg-brand-gold"></div>
                            <span class="text-white font-black text-xs uppercase tracking-widest">Dimas Satria</span>
                            <span class="text-brand-silver/50 text-xs">— Restoration Enthusiast</span>
                        </div>
                    </div>

                    <div data-scroll="fade-right"
                        class="testi-card bg-brand-gold p-7 sm:p-10 rounded-3xl shadow-2xl shadow-brand-gold/20 relative overflow-hidden">
                        <i
                            class="fa-solid fa-bolt absolute right-0 bottom-0 text-white/10 text-8xl sm:text-9xl rotate-12 -mb-6 -mr-4"></i>
                        <div class="relative z-10">
                            <i class="fa-solid fa-bolt text-white text-2xl sm:text-3xl mb-4 block"></i>
                            <p class="text-base sm:text-xl font-black text-brand-navy leading-relaxed italic mb-5">
                                "Spek bore up harian paling masuk akal. Tarikan responsif, mesin nggak gampang panas.
                                Nirwana Garage tahu gimana cara bikin motor kencang tapi aman."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-px bg-brand-navy"></div>
                                <span class="text-brand-navy font-black text-xs uppercase tracking-widest">Bagus
                                    Pratama</span>
                                <span class="text-brand-navy/70 text-xs font-bold">— Performance Daily</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Bar -->
            <div class="mt-16 pt-8 border-t border-white/10 flex flex-wrap justify-center gap-6 sm:gap-12 opacity-20 hover:opacity-40 transition-all"
                data-scroll="fade-up">
                <span class="text-white font-display text-lg sm:text-2xl tracking-tighter uppercase">Performance</span>
                <span class="text-white font-display text-lg sm:text-2xl tracking-tighter uppercase">Precision</span>
                <span class="text-white font-display text-lg sm:text-2xl tracking-tighter uppercase">Restore</span>
                <span class="text-white font-display text-lg sm:text-2xl tracking-tighter uppercase">Culture</span>
            </div>
        </div>
    </section>
    <!-- end testimoni -->

    <!-- tracking section -->
    <section id="tracking" class="py-16 sm:py-20 lg:py-24 bg-ui-main relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.025] pointer-events-none"
            style="background-image: radial-gradient(#1b263b 1px, transparent 1px); background-size: 28px 28px;"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10 sm:mb-12" data-scroll="fade-up">
                <div class="text-brand-navy text-[11px] font-bold tracking-[0.3em] uppercase mb-3">Real-time Update
                </div>
                <h3 class="section-title font-display text-brand-navy uppercase">TRACKING <span
                        class="text-gold-gradient italic">PROGRES.</span></h3>
                <p class="mt-3 text-brand-steel text-sm">Pantau pengerjaan unit Anda tanpa harus bolak-balik ke
                    workshop.</p>
            </div>

            <div data-scroll="zoom-in"
                class="bg-white rounded-[2rem] shadow-2xl shadow-brand-navy/5 border border-ui-border overflow-hidden">
                <!-- Input -->
                <div class="p-6 sm:p-10 border-b border-ui-border bg-gradient-to-r from-ui-main to-white">
                    <label class="block text-brand-navy font-black text-[10px] uppercase tracking-widest mb-4">Masukkan
                        Nomor Polisi / ID Unit</label>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <div class="relative flex-grow">
                            <i
                                class="fa-solid fa-motorcycle absolute left-4 sm:left-5 top-1/2 -translate-y-1/2 text-brand-steel text-sm"></i>
                            <input type="text" placeholder="Contoh: BK 1234 ABC"
                                class="w-full pl-11 sm:pl-14 pr-4 py-4 sm:py-5 bg-white border-2 border-ui-border rounded-2xl focus:border-brand-gold focus:outline-none font-bold text-brand-navy uppercase transition-all text-sm">
                        </div>
                        <button
                            class="btn-primary bg-brand-navy text-white px-7 py-4 sm:py-5 rounded-2xl font-black hover:bg-brand-gold transition-all shadow-lg flex items-center justify-center gap-2 text-sm">
                            <i class="fa-solid fa-magnifying-glass text-xs"></i> CEK STATUS
                        </button>
                    </div>
                </div>

                <!-- Result -->
                <div class="p-6 sm:p-10 bg-white">
                    <div class="flex flex-wrap justify-between items-start sm:items-center mb-8 sm:mb-10 gap-3">
                        <div>
                            <p class="text-brand-steel text-[10px] font-bold uppercase tracking-widest">Unit Terdeteksi:
                            </p>
                            <h4 class="text-base sm:text-xl font-display font-black text-brand-navy uppercase mt-1">
                                Kawasaki Ninja ZX-25R <span class="text-brand-gold font-normal text-sm sm:text-base">|
                                    BK 5432 AB</span></h4>
                        </div>
                        <div
                            class="px-3 py-2 bg-brand-gold/10 text-brand-gold rounded-lg font-bold text-xs border border-brand-gold/20 italic">
                            Est. Selesai: 15 Mei 2026
                        </div>
                    </div>

                    <!-- Stepper -->
                    <div class="relative">
                        <div class="tracker-line hidden sm:block">
                            <div class="tracker-line-fill"></div>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-4">
                            <!-- Done -->
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="w-10 h-10 bg-brand-gold text-white rounded-full flex items-center justify-center z-10 shadow-lg mb-3 text-sm">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h5 class="text-xs font-black text-brand-navy uppercase">Antrian</h5>
                                <p class="text-[10px] text-brand-steel mt-1 italic">08 Mei, 10:00</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="w-10 h-10 bg-brand-gold text-white rounded-full flex items-center justify-center z-10 shadow-lg mb-3 text-sm">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h5 class="text-xs font-black text-brand-navy uppercase">Pembongkaran</h5>
                                <p class="text-[10px] text-brand-steel mt-1 italic">09 Mei, 14:20</p>
                            </div>
                            <!-- Active -->
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="w-10 h-10 bg-white border-4 border-brand-gold text-brand-gold rounded-full flex items-center justify-center z-10 shadow-lg mb-3 animate-pulse">
                                    <i class="fa-solid fa-spray-can text-xs"></i>
                                </div>
                                <h5 class="text-xs font-black text-brand-gold uppercase">Pengerjaan</h5>
                                <p class="text-[10px] text-brand-steel mt-1 italic">Berlangsung</p>
                            </div>
                            <!-- Pending -->
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="w-10 h-10 bg-ui-main border-2 border-ui-border text-brand-silver rounded-full flex items-center justify-center z-10 mb-3">
                                    <i class="fa-solid fa-flag-checkered text-xs"></i>
                                </div>
                                <h5 class="text-xs font-bold text-brand-silver uppercase">Selesai</h5>
                                <p class="text-[10px] text-brand-silver mt-1">—</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-6 text-center text-brand-steel text-xs" data-scroll="fade-up">
                Kendala tracking? Hubungi Admin di
                <a href="tel:08120000000"
                    class="text-brand-navy font-bold hover:text-brand-gold transition-colors">0812-XXXX-XXXX</a>
            </p>
        </div>
    </section>
    <!-- end tracking -->

    <!-- About us -->
    <section id="tentang" class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Left: Image -->
                <div class="relative" data-scroll="fade-left">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                        <img src="logo.jpeg" alt="Workshop Activity"
                            class="w-full h-72 sm:h-[450px] lg:h-[550px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition-colors duration-500">
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-5 -right-5 sm:-bottom-6 sm:-right-6 bg-brand-gold p-6 sm:p-8 rounded-3xl shadow-xl z-30 transform hover:-rotate-3 transition-transform">
                        <div class="text-white">
                            <span
                                class="block text-3xl sm:text-4xl font-display font-black leading-none italic">2+</span>
                            <span
                                class="block text-[9px] font-bold uppercase tracking-widest mt-1">Tahun<br>Pengalaman</span>
                        </div>
                    </div>
                    <div
                        class="absolute -top-4 -left-4 w-24 h-24 sm:w-32 sm:h-32 border-l-4 border-t-4 border-brand-gold/30 rounded-tl-[2.5rem] -z-10">
                    </div>
                </div>

                <!-- Right: Content -->
                <div data-scroll="fade-right">
                    <div
                        class="flex items-center gap-3 text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-4">
                        <span class="w-8 h-px bg-brand-gold"></span>
                        Our Story
                    </div>
                    <h3 class="section-title font-display text-brand-navy uppercase leading-tight mb-7">
                        DIBANGUN DARI <span class="text-gold-gradient italic">PASSION</span><br>BUKAN SEKADAR BISNIS.
                    </h3>

                    <div class="space-y-4 text-brand-steel leading-relaxed text-sm sm:text-base">
                        <p><span class="font-bold text-brand-navy">Nirwana Garage</span> lahir dari kecintaan kami
                            terhadap estetika motor dan performa mesin yang mumpuni.</p>
                        <p>Kami memahami bahwa motor bagi Anda bukan sekadar alat transportasi, melainkan identitas.
                            Itulah alasan kami tidak pernah berkompromi dengan kualitas material.</p>
                    </div>

                    <!-- Key Points -->
                    <div class="mt-8 grid grid-cols-2 gap-4 sm:gap-6">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-ui-main rounded-xl flex items-center justify-center text-brand-gold flex-shrink-0">
                                <i class="fa-solid fa-microscope text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-black text-brand-navy text-xs uppercase">Detail Oriented</h5>
                                <p class="text-[11px] text-brand-steel mt-0.5">Presisi hingga baut terkecil.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-10 h-10 bg-ui-main rounded-xl flex items-center justify-center text-brand-gold flex-shrink-0">
                               <i class="fa-solid fa-shield-alt text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-black text-brand-navy text-xs uppercase">Guaranteed</h5>
                                <p class="text-[11px] text-brand-steel mt-0.5">Garansi hasil pengerjaan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Founder -->
                    <div class="mt-10 flex items-center gap-4 p-4 rounded-2xl bg-ui-main border border-ui-border">
                        <img src="https://ui-avatars.com/api/?name=Aditya+Rizki+Setiwan&background=1b263b&color=c58e4b&bold=true"
                            alt="Owner"
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-full border-2 border-brand-gold p-0.5 flex-shrink-0">
                        <div>
                            <p class="text-brand-navy font-black italic text-sm">Aditya Rizki Setiawan</p>
                            <p class="text-brand-steel text-[10px] uppercase tracking-widest">Founder, Nirwana Garage
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About us -->

    <!-- blog section -->
    <section id="blog" class="py-16 sm:py-20 lg:py-24 bg-ui-main relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4" data-scroll="fade-up">
                <div>
                    <div
                        class="flex items-center gap-3 text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-3">
                        <span class="w-10 h-px bg-brand-gold"></span>
                        Garage Journal
                    </div>
                    <h3 class="section-title font-display text-brand-navy uppercase">WAKTU <span
                            class="text-gold-gradient italic">NGOPREK.</span></h3>
                </div>
                <a href="{{ url('/semua-blog') }}"
                    class="text-brand-navy font-black text-xs border-b-2 border-brand-gold pb-1 hover:text-brand-gold transition-all self-start sm:self-auto">
                    LIHAT SEMUA ARTIKEL
                </a>
            </div>

            <!-- Blog Grid -->
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Article 1 -->
                <div data-scroll="fade-up" class="group cursor-pointer">

                    <div class="relative h-64 mb-6 overflow-hidden rounded-[2rem] shadow-xl">
                        <img src="" alt=""
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-brand-navy text-white text-[10px] font-black px-4 py-2 rounded-full uppercase tracking-widest">Performance</span>
                        </div>
                    </div>
                    <div class="px-2">
                        <p class="text-brand-gold text-xs font-bold mb-3">Mei 12, 2026</p>
                        <h4
                            class="text-xl font-black text-brand-navy group-hover:text-brand-gold transition-colors mb-4">
                            Bore Up Harian: Aman atau Malah Bikin Motor Cepat Rusak?
                        </h4>
                        <p class="text-brand-steel text-sm leading-relaxed mb-6 line-clamp-2">
                            Banyak yang ragu naik CC untuk harian. Padahal kalau hitungannya pas, mesin tetep awet dan
                            bensin makin efisien...
                        </p>
                        <div
                            class="flex items-center gap-2 text-brand-navy font-black text-xs uppercase tracking-widest group-hover:gap-4 transition-all">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div data-scroll="fade-up" class="group cursor-pointer">
                    <div class="relative h-52 sm:h-64 mb-5 overflow-hidden rounded-2xl shadow-xl bg-brand-navy/10">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-brand-gold/40 to-brand-navy flex items-center justify-center">
                            <i class="fa-solid fa-paint-roller text-brand-gold/20 text-7xl"></i>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-brand-navy text-white text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-widest">Repaint</span>
                        </div>
                    </div>
                    <div class="px-1">
                        <p class="text-brand-gold text-xs font-bold mb-2">Mei 10, 2026</p>
                        <h4
                            class="text-base sm:text-xl font-display font-black text-brand-navy group-hover:text-brand-gold transition-colors mb-3 uppercase">
                            Kenapa Cat Oven Lebih Bagus dari Cat Semprot Biasa?
                        </h4>
                        <p class="text-brand-steel text-sm leading-relaxed mb-4 line-clamp-2">
                            Rahasia di balik kilau wetlook yang tahan lama ada pada proses pengeringan dan material
                            clear coat...
                        </p>
                        <div
                            class="flex items-center gap-2 text-brand-navy font-black text-xs uppercase tracking-wider group-hover:gap-4 transition-all">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div data-scroll="fade-up" class="group cursor-pointer sm:col-span-2 lg:col-span-1">
                    <div class="relative h-52 sm:h-64 mb-5 overflow-hidden rounded-2xl shadow-xl bg-brand-navy/10">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-brand-steel to-brand-navy flex items-center justify-center">
                            <i class="fa-solid fa-gear text-brand-gold/20 text-7xl"></i>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-brand-navy text-white text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-widest">Restoration</span>
                        </div>
                    </div>
                    <div class="px-1">
                        <p class="text-brand-gold text-xs font-bold mb-2">Mei 08, 2026</p>
                        <h4
                            class="text-base sm:text-xl font-display font-black text-brand-navy group-hover:text-brand-gold transition-colors mb-3 uppercase">
                            Restorasi Motor Matic: Mana yang Harus Didahului?
                        </h4>
                        <p class="text-brand-steel text-sm leading-relaxed mb-4 line-clamp-2">
                            Mesin dulu atau body dulu? Simak urutan restorasi yang benar biar budget Abang nggak boncos
                            di tengah jalan...
                        </p>
                        <div
                            class="flex items-center gap-2 text-brand-navy font-black text-xs uppercase tracking-wider group-hover:gap-4 transition-all">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->

    <!-- faq section -->
    <section id="faq" class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
        <div class="max-w-3xl sm:max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-14" data-scroll="fade-up">
                <div class="text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-3">Common Questions
                </div>
                <h3 class="section-title font-display text-brand-navy uppercase">TANYA <span
                        class="text-gold-gradient italic">JAWAB.</span></h3>
                <p class="mt-3 text-brand-steel text-sm">Punya pertanyaan? Mungkin jawaban Anda ada di sini.</p>
            </div>

            <div class="space-y-3 sm:space-y-4" data-scroll="fade-up">
                <!-- FAQ Items -->
                <div
                    class="faq-item border-2 border-ui-border rounded-2xl sm:rounded-3xl bg-white overflow-hidden transition-all duration-300 hover:border-brand-gold/30">
                    <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left gap-4">
                        <span class="text-brand-navy font-black text-sm sm:text-base uppercase tracking-tight">Berapa
                            lama proses repaint satu motor full body?</span>
                        <i class="fa-solid fa-chevron-down text-brand-gold faq-chevron flex-shrink-0 text-sm"></i>
                    </button>
                    <div class="faq-content px-5 sm:px-6 text-brand-steel text-sm leading-relaxed">
                        Untuk hasil maksimal, proses repaint full body biasanya memakan waktu <span
                            class="font-bold text-brand-navy">7-14 hari kerja</span>. Sudah termasuk proses perontokan
                        cat lama, epoxy, base coat, warna utama, hingga 3 lapis clear coat dan poles.
                    </div>
                </div>

                <div
                    class="faq-item border-2 border-ui-border rounded-2xl sm:rounded-3xl bg-white overflow-hidden transition-all duration-300 hover:border-brand-gold/30">
                    <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left gap-4">
                        <span class="text-brand-navy font-black text-sm sm:text-base uppercase tracking-tight">Apakah
                            ada garansi setelah bore up mesin?</span>
                        <i class="fa-solid fa-chevron-down text-brand-gold faq-chevron flex-shrink-0 text-sm"></i>
                    </button>
                    <div class="faq-content px-5 sm:px-6 text-brand-steel text-sm leading-relaxed">
                        Tentu! Setiap paket bore up mendapatkan <span class="text-brand-gold font-bold">garansi setting
                            selama 1 bulan</span>. Kami pastikan motor aman untuk penggunaan harian sebelum diserahkan.
                    </div>
                </div>

                <div
                    class="faq-item border-2 border-ui-border rounded-2xl sm:rounded-3xl bg-white overflow-hidden transition-all duration-300 hover:border-brand-gold/30">
                    <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left gap-4">
                        <span class="text-brand-navy font-black text-sm sm:text-base uppercase tracking-tight">Bisa
                            kirim unit dari luar kota?</span>
                        <i class="fa-solid fa-chevron-down text-brand-gold faq-chevron flex-shrink-0 text-sm"></i>
                    </button>
                    <div class="faq-content px-5 sm:px-6 text-brand-steel text-sm leading-relaxed">
                        Sangat bisa! Kami sering menerima unit dari luar kota. Kirim via jasa towing atau kargo, dan
                        progres bisa dipantau lewat fitur <span class="font-bold text-brand-navy italic">Tracking
                            Progres</span> di website ini.
                    </div>
                </div>

                <div
                    class="faq-item border-2 border-ui-border rounded-2xl sm:rounded-3xl bg-white overflow-hidden transition-all duration-300 hover:border-brand-gold/30">
                    <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left gap-4">
                        <span class="text-brand-navy font-black text-sm sm:text-base uppercase tracking-tight">Apa merk
                            cat yang digunakan?</span>
                        <i class="fa-solid fa-chevron-down text-brand-gold faq-chevron flex-shrink-0 text-sm"></i>
                    </button>
                    <div class="faq-content px-5 sm:px-6 text-brand-steel text-sm leading-relaxed">
                        Kami hanya menggunakan material premium seperti <span
                            class="font-bold text-brand-navy italic">Sikkens, Belkote, atau Spies Hecker</span> untuk
                        memastikan hasil warna yang dalam dan tahan terhadap cuaca ekstrem.
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center" data-scroll="fade-up">
                <p class="text-brand-steel text-sm">Masih punya pertanyaan?
                    <a href="#"
                        class="text-brand-navy font-black border-b-2 border-brand-gold ml-1 hover:text-brand-gold transition-all">Hubungi
                        WhatsApp Kami</a>
                </p>
            </div>
        </div>
    </section>
    <!-- end Faq -->

    <!-- contact section -->
    <section id="kontak" class="py-16 sm:py-20 lg:py-24 bg-ui-main relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16">

                <!-- Left -->
                <div class="lg:col-span-5" data-scroll="fade-left">
                    <div
                        class="flex items-center gap-3 text-brand-gold text-[11px] font-bold tracking-[0.3em] uppercase mb-4">
                        <span class="w-8 h-px bg-brand-gold"></span>
                        Get In Touch
                    </div>
                    <h3 class="mega-title font-display text-brand-navy uppercase leading-tight mb-8">
                        KONSULTASI<br><span class="text-gold-gradient italic">GRATIS.</span>
                    </h3>

                    <div class="space-y-7">
                        <div class="flex gap-5 group">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-brand-gold text-xl group-hover:bg-brand-gold group-hover:text-white transition-all duration-300 shadow-sm flex-shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-black text-brand-navy uppercase tracking-tighter text-sm">Workshop Kami
                                </h4>
                                <p class="text-brand-steel leading-relaxed text-sm mt-1">Jl. Pondok Labu<br>Depok, Jawa
                                    Barat</p>
                            </div>
                        </div>
                        <div class="flex gap-5 group">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-brand-gold text-xl group-hover:bg-brand-gold group-hover:text-white transition-all duration-300 shadow-sm flex-shrink-0">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-black text-brand-navy uppercase tracking-tighter text-sm">Jam Kerja</h4>
                                <p class="text-brand-steel leading-relaxed text-sm mt-1">
                                    Senin - Sabtu: 09.00 - 18.00 WIB<br>
                                    <span class="text-red-500 font-bold italic">Minggu: Tutup (Waktunya Mancing)</span>
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-3 pt-2">
                            <a href="#"
                                class="w-11 h-11 border-2 border-ui-border rounded-xl flex items-center justify-center text-brand-navy hover:bg-brand-navy hover:text-white hover:border-brand-navy transition-all">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="w-11 h-11 border-2 border-ui-border rounded-xl flex items-center justify-center text-brand-navy hover:bg-brand-navy hover:text-white hover:border-brand-navy transition-all">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="#"
                                class="w-11 h-11 border-2 border-ui-border rounded-xl flex items-center justify-center text-brand-navy hover:bg-brand-navy hover:text-white hover:border-brand-navy transition-all">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="lg:col-span-7" data-scroll="fade-right">
                    <div
                        class="bg-white p-7 sm:p-10 lg:p-12 rounded-[2.5rem] border border-ui-border shadow-2xl shadow-brand-navy/5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="sm:col-span-1">
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-widest mb-2 ml-1">Nama
                                    Lengkap</label>
                                <input type="text" placeholder="Masukkan nama..."
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-medium text-sm">
                            </div>
                            <div class="sm:col-span-1">
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-widest mb-2 ml-1">Nomor
                                    WhatsApp</label>
                                <input type="tel" placeholder="0812..."
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-medium text-sm">
                            </div>
                            <div class="sm:col-span-2">
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-widest mb-2 ml-1">Jenis
                                    Layanan</label>
                                <select
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-medium text-sm appearance-none cursor-pointer">
                                    <option>Pilih Layanan</option>
                                    <option>Full Restorasi</option>
                                    <option>Repaint Body</option>
                                    <option>Bore Up / Mesin</option>
                                    <option>Service Rutin</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-widest mb-2 ml-1">Apa
                                    yang bisa kami bantu?</label>
                                <textarea rows="4" placeholder="Ceritakan detail rencana motor Anda..."
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-medium text-sm resize-none"></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="btn-primary w-full bg-brand-navy text-white font-black py-4 sm:py-5 rounded-2xl shadow-xl shadow-brand-navy/20 hover:bg-brand-gold transition-all flex items-center justify-center gap-3 group text-sm">
                                    KIRIM PESAN SEKARANG
                                    <i
                                        class="fa-solid fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

    <!-- booking section -->
    <section id="booking" class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-scroll="zoom-in"
                class="bg-white rounded-[2.5rem] shadow-2xl shadow-brand-navy/10 overflow-hidden border border-ui-border">
                <div class="grid lg:grid-cols-2">

                    <!-- Left: Info -->
                    <div class="p-8 sm:p-12 lg:p-16 bg-brand-navy text-white relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-48 sm:w-64 h-48 sm:h-64 bg-brand-gold/5 rounded-full blur-[80px] pointer-events-none">
                        </div>
                        <div class="relative z-10">
                            <div class="text-brand-gold text-[11px] font-black tracking-[0.3em] uppercase mb-4">
                                Reservation</div>
                            <h3 class="mega-title font-display uppercase leading-tight mb-8">
                                BOOKING<br><span class="text-gold-gradient italic">ANTRIAN.</span>
                            </h3>

                            <div class="space-y-5">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-brand-gold flex-shrink-0">
                                        <i class="fa-solid fa-clock-rotate-left text-sm"></i>
                                    </div>
                                    <p class="font-bold text-sm text-brand-silver">Hemat waktu, tanpa antre lama di
                                        workshop.</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-brand-gold flex-shrink-0">
                                        <i class="fas fa-shield-alt text-sm"></i>
                                    </div>
                                    <p class="font-bold text-sm text-brand-silver">Prioritas pengerjaan untuk unit yang
                                        sudah booking.</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-brand-gold flex-shrink-0">
                                        <i class="fa-solid fa-headset text-sm"></i>
                                    </div>
                                    <p class="font-bold text-sm text-brand-silver">Konsultasi spek & budget sebelum
                                        pengerjaan.</p>
                                </div>
                            </div>

                            <div class="mt-10 p-5 sm:p-6 rounded-2xl bg-white/5 border border-white/10">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-brand-silver mb-3">Butuh
                                    Respon Cepat?</p>
                                <a href="https://wa.me/62812xxxxxxxx"
                                    class="flex items-center gap-3 text-lg sm:text-xl font-black hover:text-brand-gold transition-colors">
                                    <i class="fa-brands fa-whatsapp text-2xl text-green-500"></i>
                                    0812-XXXX-XXXX
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Form -->
                    <div class="p-8 sm:p-12 lg:p-16">
                        <div class="space-y-5">
                            <div>
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Pilih
                                    Tanggal Kedatangan</label>
                                <input type="date"
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-sm">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Merk
                                        Motor</label>
                                    <input type="text" placeholder="Yamaha, Honda..."
                                        class="w-full px-4 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-xs sm:text-sm">
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Model
                                        Unit</label>
                                    <input type="text" placeholder="NMAX, ZX25R..."
                                        class="w-full px-4 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Nama Customer
                                        </label>
                                    <input type="text" placeholder="Nama.."
                                        class="w-full px-4 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-xs sm:text-sm">
                                </div>
                                <div>
                                    <label
                                        class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">No WhatsApp
                                        </label>
                                    <input type="text" placeholder="0812-XXXX-XXXX"
                                        class="w-full px-4 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-xs sm:text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Rencana
                                    Pengerjaan</label>
                                <select
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-sm appearance-none cursor-pointer">
                                    <option>Restorasi Full</option>
                                    <option>Repaint Saja</option>
                                    <option>Bore Up Harian</option>
                                    <option>Upgrade Kirian (CVT)</option>
                                    <option>Service & Detailing</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-[10px] font-black text-brand-navy uppercase tracking-[0.2em] mb-2">Catatan
                                    Tambahan (Opsional)</label>
                                <textarea rows="3" placeholder="Contoh: Mau konsep warna bunglon..."
                                    class="w-full px-5 py-4 bg-ui-main border-2 border-transparent rounded-2xl focus:border-brand-gold focus:outline-none transition-all font-bold text-brand-navy text-sm resize-none"></textarea>
                            </div>
                            <button type="submit"
                                class="btn-primary w-full bg-brand-gold text-white font-black py-4 sm:py-5 rounded-2xl shadow-xl shadow-brand-gold/30 hover:bg-brand-navy transition-all uppercase tracking-widest text-xs sm:text-sm">
                                AMANKAN SLOT ANTRIAN
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end booking -->

    <!-- Floating WA Button -->
    <a href="https://wa.me/62812xxxxxxxx" target="_blank"
        class="fixed bottom-6 right-4 sm:bottom-8 sm:right-8 z-50 bg-brand-navy w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center shadow-2xl hover:bg-green-600 transition-all duration-300 group">
        <i class="fa-brands fa-whatsapp text-2xl sm:text-3xl text-white group-hover:scale-110 transition-transform"></i>
    </a>
</x-layouts.master>
