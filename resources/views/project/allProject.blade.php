<x-layouts.project>
    <!-- Header Section -->
    <header class="py-16 md:py-24 bg-brand-navy relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full"
                style="background-image: radial-gradient(circle at 2px 2px, #bdc3c7 1px, transparent 0); background-size: 40px 40px;">
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 relative z-10 text-center">
           <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter">
                OUR <span class="text-brand-gold italic">WORKS.</span>
            </h1>
            <p class="text-brand-silver mt-6 max-w-2xl mx-auto">Kumpulan karya terbaik dari workshop Nirwana Garage Pematangsiantar. Dari restorasi klasik hingga mesin spesifikasi balap.</p>
        </div>
        </div>
    </header>

    <!-- Categories Tab -->
    <div class="max-w-6xl mx-auto px-6 -mt-8 relative z-20">
        <div class="bg-white p-2 rounded-2xl shadow-xl flex flex-wrap justify-center gap-2 border border-ui-border/50">
            <button
                class="px-6 py-3 bg-brand-gold text-white text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg">Semua</button>
            <button
                class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Restorasi</button>
            <button
                class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Mesin
                Repair</button>
            <button
                class="px-6 py-3 text-brand-navy hover:bg-ui-main text-[10px] font-black uppercase tracking-widest rounded-xl transition-all">Repaint
                Perawatan</button>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-6 py-15">
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project Card 1 -->
            <div
                class="group bg-white rounded-[2.5rem] overflow-hidden border border-ui-border shadow-sm hover:shadow-2xl transition-all duration-500">
                <div class="relative h-70 overflow-hidden">
                    <img src="cb3.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-6 left-6">
                        <span
                            class="bg-brand-gold text-white text-[10px] font-black px-4 py-2 rounded-full uppercase tracking-widest shadow-lg">Restorasi</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-brand-navy uppercase mb-2">Honda CB Classic</h3>
                    <p class="text-brand-steel text-sm leading-relaxed mb-6">Full Rebuild Original Part & Deep Gloss
                        Finish.</p>
                    <div class="flex justify-between items-center pt-6 border-t border-ui-border">
                        <span class="text-[10px] font-black text-brand-navy/40 uppercase tracking-widest">Finished:
                            2024</span>
                        <a href="#"
                            class="text-brand-gold font-black text-xs uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">Detail
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div
                class="group bg-white rounded-[2.5rem] overflow-hidden border border-ui-border shadow-sm hover:shadow-2xl transition-all duration-500">
                <div class="relative h-70 overflow-hidden">
                    <img src="nmax.jpeg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-6 left-6">
                        <span
                            class="bg-brand-navy text-white text-[10px] font-black px-4 py-2 rounded-full uppercase tracking-widest shadow-lg">Mesin</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-brand-navy uppercase mb-2">NMAX 183cc</h3>
                    <p class="text-brand-steel text-sm leading-relaxed mb-6">Bore Up Harian & Upgrade CVT Kirian.</p>
                    <div class="flex justify-between items-center pt-6 border-t border-ui-border">
                        <span class="text-[10px] font-black text-brand-navy/40 uppercase tracking-widest">Finished:
                            2024</span>
                        <a href="#"
                            class="text-brand-gold font-black text-xs uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">Detail
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div
                class="group bg-white rounded-[2.5rem] overflow-hidden border border-ui-border shadow-sm hover:shadow-2xl transition-all duration-500">
                <div class="relative h-70 overflow-hidden">
                    <img src="vario.jpeg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-6 left-6">
                        <span
                            class="bg-brand-navy text-white text-[10px] font-black px-4 py-2 rounded-full uppercase tracking-widest shadow-lg">Repaint</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-brand-navy uppercase mb-2">Vario 150 Candy Red</h3>
                    <p class="text-brand-steel text-sm leading-relaxed mb-6">Premium Painting with Spies Hecker Clear
                        Coat.</p>
                    <div class="flex justify-between items-center pt-6 border-t border-ui-border">
                        <span class="text-[10px] font-black text-brand-navy/40 uppercase tracking-widest">Finished:
                            2024</span>
                        <a href="#"
                            class="text-brand-gold font-black text-xs uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">Detail
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Pagination -->
        <div class="mt-20 flex justify-center items-center gap-4">
            <button
                class="w-12 h-12 rounded-full border border-ui-border flex items-center justify-center hover:bg-brand-gold hover:text-white transition-all"><i
                    class="fa-solid fa-chevron-left"></i></button>
            <span class="font-black text-brand-navy">1</span>
            <span class="font-black text-brand-steel">2</span>
            <span class="font-black text-brand-steel">3</span>
            <button
                class="w-12 h-12 rounded-full border border-ui-border flex items-center justify-center hover:bg-brand-gold hover:text-white transition-all"><i
                    class="fa-solid fa-chevron-right"></i></button>
        </div>
    </main>
</x-layouts.project>
