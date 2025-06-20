<section
    id="home"
    class="relative h-screen flex items-center justify-center overflow-hidden"
    data-aos="fade-in"
>
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/hero/background.jpg') }}"
            alt="Laboratorium Fisika Medis"
            class="w-full h-full object-cover object-center scale-105 blur-sm brightness-80"
        />
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Pattern overlay -->
        <div
            class="absolute inset-0 opacity-30 pointer-events-none"
            style="
                background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23fff\' fill-opacity=\'0.07\'%3E%3Ccircle cx=\'5\' cy=\'5\' r=\'2\'/%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3Ccircle cx=\'55\' cy=\'55\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            "
        ></div>
    </div>
    <div class="relative z-10 flex flex-col items-center w-full px-4">
        <p
            class="text-white text-lg md:text-2xl mb-10 font-light tracking-wide opacity-0 animate-fadein-delay1"
        >
            Selamat Datang di
        </p>
        <h1
            class="font-roboto text-6xl md:text-8xl font-bold text-center mb-4 drop-shadow-lg"
        >
            <span class="block text-white opacity-0 animate-fadein-delay2"
                >Laboratorium</span
            >
            <span class="text-white animate-fadein-delay3 typing-animation"
                >Fisika Medis dan Aplikasi Nuklir</span
            >
        </h1>
        <div class="mt-10 mb-4 opacity-0 animate-fadein-delay4">
            <span
                class="inline-flex items-center gap-2 bg-white/20 text-white px-6 py-2 rounded-full shadow-md text-base md:text-lg backdrop-blur-md border border-white/30"
            >
                <i class="fas fa-university text-secondary"></i>
                Departemen Fisika - Fakultas Matematika dan Ilmu Pengetahuan
                Alam - Universitas Syiah Kuala
            </span>
        </div>
    </div>
    <style>
        @keyframes fadein {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadein-delay1 {
            animation: fadein 1s cubic-bezier(0.4, 0, 0.2, 1) both;
            animation-delay: 0.2s;
        }
        .animate-fadein-delay2 {
            animation: fadein 1s cubic-bezier(0.4, 0, 0.2, 1) both;
            animation-delay: 0.8s;
        }
        .animate-fadein-delay3 {
            animation: fadein 1s cubic-bezier(0.4, 0, 0.2, 1) both;
            animation-delay: 1.2s;
        }
        .animate-fadein-delay4 {
            animation: fadein 1s cubic-bezier(0.4, 0, 0.2, 1) both;
            animation-delay: 1.6s;
        }

        /* Typing Animation */
        .typing-animation {
            overflow: hidden;
            white-space: nowrap;
            margin: 0 auto;
            display: inline-block;
            width: 0;
            animation: typing-delete 12s steps(40, end) infinite;
            animation-delay: 1.2s;
        }

        @keyframes typing-delete {
            0%, 10% {
                width: 0;
                border-right: 3px solid #10b981;
            }
            50% {
                width: 100%;
                border-right: 3px solid #10b981; 
            }
            60% {
                width: 100%;
            }
            100% {
                width: 0;
            }
        }

        @keyframes blink-caret {
            from,
            to {
                border-color: transparent;
            }
            50% {
                border-color: #10b981;
            }
        }

        .typing-animation::after {
            content: "";
            border-right: 3px solid #10b981;
            animation: blink-caret 0.75s step-end infinite;
        }

        /* Responsive adjustments for typing animation */
        @media (max-width: 768px) {
            .typing-animation {
                font-size: 2.5rem;
                animation: typing-delete 6s steps(30, end) infinite;
            }
        }
    </style>
</section>
