<section id="staff" class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 overflow-hidden scroll-mt-20">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #10B981 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    <div class="absolute top-10 right-10 w-32 h-32 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 left-10 w-40 h-40 bg-emerald-600/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10" x-data="{
        filter: 'all',
        staff: [
            { name: 'Dr. John Doe', role: 'Dosen', specialty: 'Fisika Radiasi', image: 'https://i.pravatar.cc/150?u=john.doe', type: 'dosen', socials: { linkedin: '#', email: 'john.doe@example.com' } },
            { name: 'Dr. Jane Smith', role: 'Dosen', specialty: 'Biofisika', image: 'https://i.pravatar.cc/150?u=jane.smith', type: 'dosen', socials: { linkedin: '#', email: 'jane.smith@example.com' } },
            { name: 'Mike Johnson', role: 'Laboran', specialty: 'Instrumentasi Medis', image: 'https://i.pravatar.cc/150?u=mike.johnson', type: 'laboran', socials: { linkedin: '#', email: 'mike.johnson@example.com' } },
            { name: 'Sarah Lee', role: 'Teknisi', specialty: 'Kalibrasi Alat', image: 'https://i.pravatar.cc/150?u=sarah.lee', type: 'teknisi', socials: { linkedin: '#', email: 'sarah.lee@example.com' } },
            { name: 'Prof. Ahmad', role: 'Dosen', specialty: 'Radiologi', image: 'https://i.pravatar.cc/150?u=prof.ahmad', type: 'dosen', socials: { linkedin: '#', email: 'prof.ahmad@example.com' } },
            { name: 'Budi Santoso', role: 'Laboran', specialty: 'Manajemen Lab', image: 'https://i.pravatar.cc/150?u=budi.santoso', type: 'laboran', socials: { linkedin: '#', email: 'budi.santoso@example.com' } }
        ],
        get filteredStaff() {
            if (this.filter === 'all') return this.staff;
            return this.staff.filter(s => s.type === this.filter);
        }
    }">
        <!-- Header -->
        <div class="text-center mb-10" data-aos="fade-down">
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6 font-inter">
                <span class="bg-gradient-to-r from-emerald-500 to-emerald-600 bg-clip-text text-transparent">
                    Staff
                </span>
                <span class="text-gray-800"> & Tenaga Ahli</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-emerald-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Tim kami terdiri dari para profesional berdedikasi dengan keahlian mendalam di bidangnya masing-masing, siap mendukung riset dan inovasi.
            </p>
        </div>
        
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="100">
            <button @click="filter = 'all'" :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg': filter === 'all', 'bg-white/80 backdrop-blur-sm text-primary hover:bg-white': filter !== 'all' }" class="px-6 py-3 rounded-full font-bold border border-primary text-sm transition-all duration-300 shadow-md">Semua</button>
            <button @click="filter = 'dosen'" :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg': filter === 'dosen', 'bg-white/80 backdrop-blur-sm text-primary hover:bg-white': filter !== 'dosen' }" class="px-6 py-3 rounded-full font-bold border border-primary text-sm transition-all duration-300 shadow-md">Dosen</button>
            <button @click="filter = 'laboran'" :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg': filter === 'laboran', 'bg-white/80 backdrop-blur-sm text-primary hover:bg-white': filter !== 'laboran' }" class="px-6 py-3 rounded-full font-bold border border-primary text-sm transition-all duration-300 shadow-md">Laboran</button>
            <button @click="filter = 'teknisi'" :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg': filter === 'teknisi', 'bg-white/80 backdrop-blur-sm text-primary hover:bg-white': filter !== 'teknisi' }" class="px-6 py-3 rounded-full font-bold border border-primary text-sm transition-all duration-300 shadow-md">Teknisi</button>
        </div>

        <!-- Staff Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <template x-for="(person, index) in filteredStaff" :key="person.name">
                <div class="group bg-white/60 backdrop-blur-lg rounded-3xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100/50 hover:border-emerald-500/20 hover:-translate-y-2" data-aos="fade-up" :data-aos-delay="200 + (index * 50)">
                    <!-- Profile Picture -->
                    <div class="relative w-32 h-32 mx-auto mb-6">
                        <img :src="person.image" alt="Foto Staff" class="w-full h-full rounded-full object-cover shadow-lg border-4 border-white">
                        <div class="absolute bottom-1 right-1 w-5 h-5 bg-emerald-500 rounded-full border-2 border-white animate-pulse"></div>
                    </div>
                    
                    <!-- Info -->
                    <h3 class="text-xl font-bold text-gray-800" x-text="person.name"></h3>
                    <p class="text-emerald-600 font-semibold mb-2" x-text="person.role"></p>
                    <p class="text-gray-500 text-sm mb-6" x-text="person.specialty"></p>
                    
                    <!-- Social Links -->
                    <div class="flex justify-center space-x-4">
                        <a :href="person.socials.linkedin" class="w-10 h-10 bg-gray-200/80 rounded-full flex items-center justify-center text-gray-600 hover:bg-gradient-to-br hover:from-emerald-500 hover:to-emerald-600 hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a :href="'mailto:' + person.socials.email" class="w-10 h-10 bg-gray-200/80 rounded-full flex items-center justify-center text-gray-600 hover:bg-gradient-to-br hover:from-emerald-500 hover:to-emerald-600 hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
                        </a>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</section>