<section id="gallery" class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 overflow-hidden scroll-mt-20">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #10B981 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    <div class="absolute -top-10 -left-10 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-emerald-600/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10" x-data="{
        activeTab: 'gallery',
        showModal: false,
        modalImage: { src: '', title: '', description: '' },
        
        // Dummy Data
        galleryImages: [
            { src: '{{ asset('images/facilities/fasilitas.jpg') }}', title: 'Ruang Laboratorium Utama', description: 'Area kerja utama dengan peralatan modern.' },
            { src: '{{ asset('images/hero/bg-login.jpg') }}', title: 'Diskusi Tim Peneliti', description: 'Kolaborasi tim dalam mengembangkan riset terbaru.' },
            { src: '{{ asset('images/facilities/geiger-muller-counter.jpg') }}', title: 'Pengujian Alat', description: 'Proses kalibrasi Geiger Muller Counter.' },
            { src: '{{ asset('images/facilities/x-ray-multimeter.jpeg') }}', title: 'Sesi Praktikum', description: 'Mahasiswa menggunakan X-ray Multimeter.' }
        ],
        articles: [
            { title: 'Inovasi Baru dalam Deteksi Radiasi', date: '15 Okt 2023', excerpt: 'Tim kami berhasil mengembangkan prototipe baru yang meningkatkan sensitivitas deteksi hingga 20%...', image: '{{ asset('images/hero/bg-login.jpg') }}', link: '#' },
            { title: 'Kolaborasi Riset dengan Universitas Internasional', date: '02 Sep 2023', excerpt: 'Sebuah kehormatan bagi lab kami untuk berkolaborasi dalam proyek penelitian bersama universitas ternama...', image: '{{ asset('images/facilities/fasilitas.jpg') }}', link: '#' }
        ],
        facilities: [
            { name: 'Geiger Muller Counter', desc: 'Alat deteksi radiasi ionisasi yang sangat sensitif.', image: '{{ asset('images/facilities/geiger-muller-counter.jpg') }}', status: 'Aktif', color: 'emerald' },
            { name: 'X-ray Multimeter', desc: 'Mengukur intensitas dan dosis sinar-X dengan presisi tinggi.', image: '{{ asset('images/facilities/x-ray-multimeter.jpeg') }}', status: 'Presisi', color: 'cyan' },
            { name: 'Sumber Radioaktif', desc: 'Koleksi sumber untuk eksperimen dengan keamanan tinggi.', image: '{{ asset('images/facilities/sr-radioaktif.jpg') }}', status: 'Aman', color: 'red' }
        ],

        openModal(image) {
            this.modalImage = image;
            this.showModal = true;
        }
    }">
        <!-- Header -->
        <div class="text-center mb-10" data-aos="fade-down">
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6 font-inter">
                <span class="bg-gradient-to-r from-emerald-500 to-emerald-600 bg-clip-text text-transparent">
                    Galeri
                </span>
                <span class="text-gray-800"> Laboratorium</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-emerald-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Temukan lebih dalam tentang aktivitas, berita terbaru, dan fasilitas unggulan yang kami miliki.
            </p>
        </div>

        <!-- Tab Buttons -->
        <div class="flex justify-center mb-12" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-3 gap-2 bg-gray-200/80 backdrop-blur-sm p-2 rounded-full shadow-inner">
                <button @click="activeTab = 'gallery'" :class="{ 'bg-white text-emerald-600 shadow-md': activeTab === 'gallery', 'text-gray-600': activeTab !== 'gallery' }" class="px-6 py-3 font-bold rounded-full transition-all duration-300">Galeri</button>
                <button @click="activeTab = 'articles'" :class="{ 'bg-white text-emerald-600 shadow-md': activeTab === 'articles', 'text-gray-600': activeTab !== 'articles' }" class="px-6 py-3 font-bold rounded-full transition-all duration-300">Artikel</button>
                <button @click="activeTab = 'facilities'" :class="{ 'bg-white text-emerald-600 shadow-md': activeTab === 'facilities', 'text-gray-600': activeTab !== 'facilities' }" class="px-6 py-3 font-bold rounded-full transition-all duration-300">Fasilitas</button>
            </div>
        </div>

        <!-- Content Panes -->
        <div class="relative">
            <!-- Gallery Pane -->
            <div x-show="activeTab === 'gallery'" x-transition:enter="transition-all ease-in-out duration-500" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <template x-for="(image, index) in galleryImages" :key="index">
                        <div @click="openModal(image)" class="group relative aspect-w-1 aspect-h-1 bg-gray-200 rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300" data-aos="zoom-in" :data-aos-delay="100 * index">
                            <img :src="image.src" :alt="image.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                <h3 class="font-bold" x-text="image.title"></h3>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Articles Pane -->
            <div x-show="activeTab === 'articles'" x-transition:enter="transition-all ease-in-out duration-500" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-4xl mx-auto">
                    <template x-for="(article, index) in articles" :key="index">
                        <div class="group bg-white/80 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100/50" data-aos="fade-up" :data-aos-delay="100 * index">
                            <div class="overflow-hidden">
                                <img :src="article.image" alt="Article Image" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-2" x-text="article.date"></p>
                                <h3 class="text-xl font-bold text-gray-800 mb-3" x-text="article.title"></h3>
                                <p class="text-gray-600 text-sm mb-4" x-text="article.excerpt"></p>
                                <a :href="article.link" class="font-bold text-emerald-600 hover:text-emerald-500 transition-colors">Baca Selengkapnya →</a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Facilities Pane -->
            <div x-show="activeTab === 'facilities'" x-transition:enter="transition-all ease-in-out duration-500" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <template x-for="(facility, index) in facilities" :key="index">
                        <div class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100/50 hover:-translate-y-2" data-aos="fade-up" :data-aos-delay="100 * index">
                             <img :src="facility.image" alt="Facility Image" class="w-full h-40 object-cover rounded-xl mb-4">
                             <h3 class="text-xl font-bold text-gray-800" x-text="facility.name"></h3>
                             <p class="text-gray-600 text-sm mb-4" x-text="facility.desc"></p>
                             <span :class="'bg-' + facility.color + '-100 text-' + facility.color + '-800'" class="text-xs font-bold px-3 py-1 rounded-full" x-text="facility.status"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="showModal" @keydown.escape.window="showModal = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div @click.away="showModal = false" class="relative max-w-4xl max-h-[90vh] w-full p-4">
                <img :src="modalImage.src" :alt="modalImage.title" class="w-full h-full object-contain rounded-lg">
                <button @click="showModal = false" class="absolute top-4 right-4 text-white bg-black/50 rounded-full p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
