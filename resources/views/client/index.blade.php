<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Romantis Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi untuk Foto */
        @keyframes slideIn {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideIn 1s ease-out forwards;
        }

        /* Animasi untuk Teks */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        /* Animasi Background */
        @keyframes backgroundShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animated-background {
            animation: backgroundShift 10s ease-in-out infinite;
            background-size: 200% 200%;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 text-white animated-background">
    <!-- Bagian Header -->
    <header class="w-full h-screen flex flex-col justify-center items-center text-center bg-opacity-60">
        <h1 class="text-5xl font-bold mb-4 fade-in">Selamat Datang di Web Kami</h1>
        <p class="text-xl mb-4 fade-in" style="animation-delay: 0.3s;">
            Ini adalah cerita kami, di sini kami berbagi kebahagiaan.
        </p>
        <div class="mb-4 slide-in">
            <img src="{{asset('images/ralifa139.jpg')}}" alt="Foto Kami"
                class="rounded-full w-48 h-48 object-cover border-4 border-white shadow-lg" />
        </div>
        <p class="text-xl fade-in" style="animation-delay: 0.6s;">Kami berdua, untuk selamanya.</p>
    </header>

    <audio id="backgroundAudio" loop autoplay>
    <source src="{{ asset('audio/audio.mp3.mp3') }}" type="audio/mp3" />
    Your browser does not support the audio element.
</audio>


    <!-- Kontrol Musik -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 space-x-4">
        <button id="playBtn"
            class="bg-pink-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-700 transition">
            Play Musik
        </button>
        <button id="pauseBtn"
            class="bg-pink-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-700 transition">
            Pause Musik
        </button>
    </div>

    <!-- Bagian Cerita -->
    <section class="py-20 px-5 text-center bg-white bg-opacity-70">
        <h2 class="text-3xl font-bold mb-6 text-pink-600 fade-in" style="animation-delay: 1s;">
            Cerita Kami
        </h2>
        <p class="text-lg text-gray-700 mb-6 max-w-4xl mx-auto fade-in" style="animation-delay: 1.2s;">
        Kami bertemu tanpa sengaja, seperti dua arah yang tak direncanakan . Awalnya, semuanya terasa biasa saja, 
        namun seiring berjalannya waktu, perasaan itu mulai tumbuh perlahan dalam hati kami, seolah cinta itu datang dengan cara yang tak terduga. 
        Setiap momen bersama semakin mempererat ikatan kami, membuat kami semakin memahami bahwa ada sesuatu yang lebih dalam dari sekadar kebetulan. 
        Dan akhirnya, kami memutuskan untuk menjalani perjalanan ini bersama,
         mengukir kisah cinta yang sederhana namun penuh makna, hingga kami sampai di titik di mana hubungan ini menjadi bagian dari hidup kami yang tak terpisahkan.
        </p>
        <a href="#more"
            class="inline-block px-6 py-3 bg-pink-600 text-white rounded-full shadow-lg hover:bg-pink-700 transition fade-in"
            style="animation-delay: 1.5s;">Lanjutkan Cerita Kami</a>
    </section>

    <!-- Galeri Foto -->
    <section id="more" class="py-20 bg-gradient-to-r from-pink-400 via-purple-300 to-blue-500">
        <h2 class="text-3xl font-bold mb-6 text-center text-white fade-in" style="animation-delay: 2s;">
            Galeri Kami
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-6">
    <img src="{{ asset('images/ralifa158.jpg') }}" alt="Foto Kami" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa146.jpg') }}" alt="Galeri 2" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa145.jpg') }}" alt="Galeri 3" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa143.jpg') }}" alt="Galeri 4" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa139.jpg') }}" alt="Galeri 5" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa110.jpg') }}" alt="Galeri 6" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa8.jpg') }}" alt="Galeri 4" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa9.jpg') }}" alt="Galeri 5" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <img src="{{ asset('images/ralifa40.jpg') }}" alt="Galeri 6" class="rounded-xl shadow-lg object-cover h-48 w-full" />
    <!-- Tambahkan lebih banyak gambar di sini -->
</div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-black text-white text-center">
        <p>© 2024, Ralifa ❤️</p>
    </footer>

    <script>
        // Mendapatkan elemen audio dan tombol
        const audio = document.getElementById("backgroundAudio");
        const playBtn = document.getElementById("playBtn");
        const pauseBtn = document.getElementById("pauseBtn");

        // Menambahkan event listener untuk tombol Play
        playBtn.addEventListener("click", () => {
            audio.play(); // Memulai audio
            playBtn.disabled = true; // Menonaktifkan tombol Play setelah dipencet
            pauseBtn.disabled = false; // Menampilkan tombol Pause
        });

        // Menambahkan event listener untuk tombol Pause
        pauseBtn.addEventListener("click", () => {
            audio.pause(); // Menjeda audio
            pauseBtn.disabled = true; // Menonaktifkan tombol Pause setelah dipencet
            playBtn.disabled = false; // Menampilkan tombol Play
        });

        // Menonaktifkan tombol Pause awalnya
        pauseBtn.disabled = true;
    </script>
</body>

</html>