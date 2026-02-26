<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InvestaStar - Bimbingan Belajar Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Custom Styles -->

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">


</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="w-full fixed top-0 z-50 bg-white/95 backdrop-blur-md border-b border-blue-100 shadow-lg">
        <div class="px-3 sm:px-6 md:px-8 lg:px-16">
            <div class="flex justify-between items-center h-16 sm:h-18 md:h-20">
                <!-- Logo with Icon -->
                <div class="flex items-center gap-2 sm:gap-3 group">
                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg sm:rounded-xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                        <i class="fas fa-graduation-cap text-white text-lg sm:text-xl"></i>
                    </div>
                    <div>
                        <h2
                            class="text-xl sm:text-2xl md:text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            InvestaStar</h2>
                        <p class="text-xs text-gray-500 font-medium hidden sm:block">Bimbel Terpercaya</p>
                    </div>
                </div>

                <!-- Desktop Menu with Icons -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="#home"
                        class="group flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-blue-600 transition-all rounded-lg hover:bg-blue-50 relative">
                        <i class="fas fa-home group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Beranda</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#programs"
                        class="group flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-purple-600 transition-all rounded-lg hover:bg-purple-50 relative">
                        <i class="fas fa-book-open group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Program</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-600 to-pink-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#about"
                        class="group flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-pink-600 transition-all rounded-lg hover:bg-pink-50 relative">
                        <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Tentang</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-rose-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#contact"
                        class="group flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-blue-600 transition-all rounded-lg hover:bg-blue-50 relative">
                        <i class="fas fa-envelope group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Kontak</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-cyan-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>

                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="{{ route('register') }}"
                        class="group flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2.5 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                        <i class="fas fa-user-plus group-hover:rotate-12 transition-transform"></i>
                        <span>Daftar</span>
                    </a>
                    <a href="{{ route('login') }}" aria-label="Login"
                        class="flex items-center gap-2 text-blue-600 hover:text-blue-700 transition-all">
                        <div
                            class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center hover:bg-blue-200 transition-all">
                            <i class="fas fa-user-circle"></i>
                        </div>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()"
                        class="w-10 h-10 flex items-center justify-center text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu"
            class="mobile-menu md:hidden bg-white/95 backdrop-blur-md border-t border-gray-200 shadow-lg">
            <div class="px-4 py-4 space-y-2">
                <a href="#home"
                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 py-3 px-4 hover:bg-blue-50 rounded-lg transition-all">
                    <i class="fas fa-home w-5"></i>
                    <span class="font-medium">Beranda</span>
                </a>
                <a href="#programs"
                    class="flex items-center gap-3 text-gray-700 hover:text-purple-600 py-3 px-4 hover:bg-purple-50 rounded-lg transition-all">
                    <i class="fas fa-book-open w-5"></i>
                    <span class="font-medium">Program</span>
                </a>
                <a href="#about"
                    class="flex items-center gap-3 text-gray-700 hover:text-pink-600 py-3 px-4 hover:bg-pink-50 rounded-lg transition-all">
                    <i class="fas fa-users w-5"></i>
                    <span class="font-medium">Tentang</span>
                </a>
                <a href="#contact"
                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 py-3 px-4 hover:bg-blue-50 rounded-lg transition-all">
                    <i class="fas fa-envelope w-5"></i>
                    <span class="font-medium">Kontak</span>
                </a>
                <div class="pt-4 border-t border-gray-200 space-y-2">
                    <a href="{{ route('login') }}"
                        class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white px-4 py-3 hover:from-blue-700 hover:to-purple-700 rounded-xl transition-all font-semibold shadow-lg">
                        <i class="fas fa-user-circle"></i>
                        <span>Login Sekarang</span>
                    </a>
                    <a href="{{ route('register') }}"
                        class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-3 hover:from-blue-700 hover:to-purple-700 rounded-xl transition-all font-semibold shadow-lg">
                        <i class="fas fa-user-plus"></i>
                        <span>Daftar Sekarang</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="home"
        class="relative bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 py-16 sm:py-20 md:py-24 lg:py-32 overflow-hidden mt-16 sm:mt-18 md:mt-20">
        <!-- Animated Background Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Large Decorative Circles -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-blue-300 rounded-full opacity-20 blur-3xl animate-pulse">
            </div>
            <div class="absolute bottom-20 left-10 w-96 h-96 bg-purple-300 rounded-full opacity-20 blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>

            <!-- Geometric Shapes -->
            <div
                class="absolute top-40 left-20 w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-3xl opacity-20 transform rotate-45 float-animation">
            </div>
            <div class="absolute bottom-40 right-32 w-24 h-24 bg-gradient-to-br from-pink-400 to-red-400 rounded-full opacity-30 float-animation"
                style="animation-delay: 0.5s;"></div>

            <!-- Small Dots Pattern -->
            <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-500 rounded-full opacity-40"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-purple-500 rounded-full opacity-40"></div>
            <div class="absolute bottom-1/4 left-1/3 w-4 h-4 bg-pink-500 rounded-full opacity-40"></div>
            <div class="absolute top-1/2 right-1/4 w-3 h-3 bg-yellow-500 rounded-full opacity-40"></div>

            <!-- Decorative Lines -->
            <svg class="absolute top-10 right-1/4 w-48 h-48 opacity-10" viewBox="0 0 200 200">
                <path d="M 10 80 Q 95 10 180 80" stroke="url(#gradient1)" stroke-width="2" fill="none" />
                <defs>
                    <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8B5CF6;stop-opacity:1" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center max-w-7xl mx-auto">
                <!-- Left Content -->
                <div class="space-y-6 sm:space-y-7 md:space-y-8 text-center lg:text-left">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-lg border border-blue-200">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <i class="fas fa-trophy text-yellow-500 text-sm"></i>
                        <span class="text-xs sm:text-sm font-semibold text-gray-700">#1 Bimbel Terpercaya</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Bimbingan Belajar<br class="hidden sm:block">
                        Terpercaya untuk <br>
                        <span
                            class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Masa
                            Depan Cerah</span>
                    </h1>

                    <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        Tingkatkan prestasi akademik dengan bimbingan belajar berkualitas dari pengajar berpengalaman
                        dan metode pembelajaran efektif
                    </p>

                    <!-- Features Mini -->
                    <div class="flex flex-wrap gap-3 sm:gap-4 justify-center lg:justify-start">
                        <div
                            class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl shadow-md">
                            <i class="fas fa-users text-blue-600 text-sm"></i>
                            <span class="text-xs sm:text-sm font-semibold text-gray-700">5000+ Siswa</span>
                        </div>
                        <div
                            class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl shadow-md">
                            <i class="fas fa-chalkboard-teacher text-purple-600 text-sm"></i>
                            <span class="text-xs sm:text-sm font-semibold text-gray-700">Pengajar Ahli</span>
                        </div>
                        <div
                            class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl shadow-md">
                            <i class="fas fa-star text-yellow-500 text-sm"></i>
                            <span class="text-xs sm:text-sm font-semibold text-gray-700">Rating 4.9</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <button
                            class="group bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all font-bold flex items-center justify-center gap-2 shadow-lg hover:shadow-xl transform hover:scale-105 text-sm sm:text-base">
                            <i class="fas fa-rocket group-hover:translate-y-[-2px] transition-transform"></i>
                            Daftar Sekarang
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button
                            class="bg-white text-gray-700 px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-gray-50 transition-all font-semibold border-2 border-gray-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2 text-sm sm:text-base">
                            <i class="fas fa-play-circle text-lg sm:text-xl"></i>
                            Lihat Video
                        </button>
                    </div>

                </div>

                <!-- Right Content - Interactive Card -->
                <div class="relative mt-8 lg:mt-0">
                    <!-- Decorative Background Shape -->
                    <div
                        class="absolute -inset-2 sm:-inset-4 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 rounded-2xl sm:rounded-3xl opacity-20 blur-2xl">
                    </div>

                    <!-- Floating Elements Around Card -->
                    <div
                        class="absolute -top-6 -right-6 sm:-top-8 sm:-right-8 w-12 h-12 sm:w-16 sm:h-16 bg-yellow-400 rounded-xl sm:rounded-2xl opacity-70 shadow-lg float-animation hidden sm:block">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 w-16 h-16 sm:w-20 sm:h-20 bg-pink-400 rounded-full opacity-60 shadow-lg float-animation hidden sm:block"
                        style="animation-delay: 0.7s;"></div>

                    <!-- Main Card with 3D Effect -->
                    <div
                        class="relative bg-white rounded-2xl sm:rounded-3xl shadow-2xl p-5 sm:p-6 md:p-8 border border-gray-100 overflow-hidden">
                        <!-- Top Corner Decoration -->
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-100 to-purple-100 rounded-bl-full opacity-50">
                        </div>

                        <!-- Success Badge -->
                        <div
                            class="absolute top-4 left-4 bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Verified
                        </div>

                        <!-- Header -->
                        <div class="mb-5 sm:mb-6 text-center pt-4 sm:pt-6 relative z-10">
                            <!-- Icon Ilustration -->
                            <div class="flex justify-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                                <div
                                    class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg sm:rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <div
                                    class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg sm:rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                        </path>
                                    </svg>
                                </div>
                                <div
                                    class="w-10 h-10 sm:w-12 sm:h-12 bg-pink-100 rounded-lg sm:rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-pink-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>

                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                                Siap Raih Prestasi Terbaikmu?
                            </h3>
                            <p class="text-gray-600 text-xs sm:text-sm md:text-base px-2">
                                Bergabunglah dengan ribuan siswa yang telah meningkatkan prestasi akademik
                                melalui <span
                                    class="font-bold text-transparent bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text">InvestaStar</span>
                            </p>
                        </div>

                        <!-- Stats Mini -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-3 mb-5 sm:mb-6">
                            <div
                                class="bg-gradient-to-br from-blue-50 to-blue-100 p-2 sm:p-3 rounded-lg sm:rounded-xl text-center">
                                <div class="text-xl sm:text-2xl font-bold text-blue-700">98%</div>
                                <div class="text-xs text-gray-600 flex items-center justify-center gap-1">
                                    <i class="fas fa-check-circle text-xs"></i> <span
                                        class="hidden sm:inline">Lulus</span>
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-br from-purple-50 to-purple-100 p-2 sm:p-3 rounded-lg sm:rounded-xl text-center">
                                <div class="text-xl sm:text-2xl font-bold text-purple-700">50+</div>
                                <div class="text-xs text-gray-600 flex items-center justify-center gap-1">
                                    <i class="fas fa-user-graduate text-xs"></i> <span
                                        class="hidden sm:inline">Guru</span>
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-br from-pink-50 to-pink-100 p-2 sm:p-3 rounded-lg sm:rounded-xl text-center">
                                <div
                                    class="text-xl sm:text-2xl font-bold text-pink-700 flex items-center justify-center gap-1">
                                    4.9 <i class="fas fa-star text-yellow-500 text-xs sm:text-sm"></i>
                                </div>
                                <div class="text-xs text-gray-600 hidden sm:block">Rating</div>
                            </div>
                        </div>

                        <!-- Benefit List -->
                        <div class="space-y-2 sm:space-y-3 mb-5 sm:mb-6">
                            <div
                                class="flex items-center gap-2 sm:gap-3 p-2 sm:p-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg sm:rounded-xl border-2 border-blue-200">
                                <div
                                    class="w-7 h-7 sm:w-8 sm:h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-semibold text-gray-900">
                                    Materi Pembelajaran Terstruktur
                                </span>
                            </div>

                            <div
                                class="flex items-center gap-2 sm:gap-3 p-2 sm:p-3 bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg sm:rounded-xl border-2 border-purple-200">
                                <div
                                    class="w-7 h-7 sm:w-8 sm:h-8 bg-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-semibold text-gray-900">
                                    Pengajar Berpengalaman & Berkompeten
                                </span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <button
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 sm:py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all font-bold shadow-lg hover:shadow-xl transform hover:scale-[1.02] flex items-center justify-center gap-2 text-sm sm:text-base">
                            Daftar Sekarang
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section id="programs" class="relative bg-white py-12 md:py-20 dot-pattern overflow-hidden">
        <!-- Wave Top -->
        <div class="wave-top">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="fill-blue-50"></path>
            </svg>
        </div>

        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-20 left-10 w-32 h-32 bg-blue-200 rounded-full opacity-20 blur-2xl float-animation">
            </div>
            <div class="absolute bottom-32 right-16 w-40 h-40 bg-purple-200 rounded-full opacity-20 blur-2xl float-animation"
                style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-pink-300 rounded-3xl opacity-15 transform rotate-45 float-animation"
                style="animation-delay: 0.5s;"></div>
            <!-- Small decorative dots -->
            <div class="absolute top-40 right-1/3 w-3 h-3 bg-blue-400 rounded-full opacity-30"></div>
            <div class="absolute bottom-40 left-1/3 w-2 h-2 bg-purple-400 rounded-full opacity-30"></div>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10">
            <div class="text-center mb-12 sm:mb-14 md:mb-16">
                <span
                    class="inline-block bg-blue-100 text-blue-700 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold mb-3 sm:mb-4">Keunggulan
                    Kami</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Kenapa Memilih
                    InvestaStar?</h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto px-4">Program bimbingan
                    belajar terbaik dengan fasilitas lengkap dan metode pembelajaran inovatif</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 md:gap-8 max-w-6xl mx-auto">
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-lg card-hover border-2 border-transparent group-hover:border-blue-300">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-6 float-animation">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Materi Berkualitas</h3>
                        <p class="text-gray-600 text-center leading-relaxed">Kurikulum terstruktur dan sesuai dengan
                            standar nasional untuk semua jenjang pendidikan</p>
                    </div>
                </div>

                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-400 to-purple-600 rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-lg card-hover border-2 border-transparent group-hover:border-purple-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center mx-auto mb-6 float-animation"
                            style="animation-delay: 0.2s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Pengajar Berpengalaman</h3>
                        <p class="text-gray-600 text-center leading-relaxed">Tenaga pengajar profesional dan
                            berpengalaman lulusan universitas terkemuka</p>
                    </div>
                </div>

                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-pink-400 to-pink-600 rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-lg card-hover border-2 border-transparent group-hover:border-pink-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-700 rounded-2xl flex items-center justify-center mx-auto mb-6 float-animation"
                            style="animation-delay: 0.4s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Kelas Kecil</h3>
                        <p class="text-gray-600 text-center leading-relaxed">Pembelajaran dengan kelas kecil untuk
                            perhatian maksimal pada setiap siswa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about"
        class="relative bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 py-12 md:py-20 overflow-hidden">
        <!-- Animated Background Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Large circles -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500 rounded-full opacity-10 blur-3xl animate-pulse">
            </div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500 rounded-full opacity-10 blur-3xl animate-pulse"
                style="animation-delay: 1.5s;"></div>

            <!-- Floating geometric shapes -->
            <div
                class="absolute top-1/4 left-10 w-24 h-24 bg-blue-400 rounded-2xl opacity-10 transform rotate-12 float-animation">
            </div>
            <div class="absolute bottom-1/4 right-20 w-32 h-32 bg-purple-400 rounded-full opacity-15 float-animation"
                style="animation-delay: 0.7s;"></div>
            <div class="absolute top-1/3 right-1/3 w-16 h-16 bg-pink-400 rounded-3xl opacity-10 transform rotate-45 float-animation"
                style="animation-delay: 1.2s;"></div>

            <!-- Decorative lines -->
            <svg class="absolute bottom-1/3 left-1/4 w-32 h-32 opacity-5" viewBox="0 0 200 200">
                <circle cx="100" cy="100" r="80" stroke="white" stroke-width="2" fill="none"
                    stroke-dasharray="10,10" />
            </svg>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center">
                <!-- Text Content (now on left) -->
                <div class="space-y-5 sm:space-y-6 text-white text-center lg:text-left">
                    <span
                        class="inline-block bg-white/20 backdrop-blur-sm text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold">Tentang
                        Kami</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight text-slate-50">
                        Memberdayakan Siswa Melalui Pendidikan Berkualitas
                    </h2>
                    <p class="text-base sm:text-lg text-blue-100 leading-relaxed">
                        InvestaStar didirikan dengan misi sederhana: menjadikan pendidikan berkualitas dapat diakses
                        oleh semua kalangan. Kami percaya bahwa setiap siswa dapat meraih prestasi gemilang dengan
                        bimbingan yang tepat.
                    </p>
                    <p class="text-base sm:text-lg text-blue-100 leading-relaxed">
                        Program bimbingan kami menggabungkan kurikulum komprehensif, pengajar ahli, dan metode
                        pembelajaran interaktif untuk membangun kepercayaan diri siswa.
                    </p>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-3 gap-3 sm:gap-4 pt-4 sm:pt-6">
                        <div
                            class="bg-white/10 backdrop-blur-md p-3 sm:p-4 rounded-lg sm:rounded-xl border border-white/20 text-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-1">5.000+</h3>
                            <p class="text-xs sm:text-sm text-blue-200">Siswa Aktif</p>
                        </div>
                        <div
                            class="bg-white/10 backdrop-blur-md p-3 sm:p-4 rounded-lg sm:rounded-xl border border-white/20 text-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-1">50+</h3>
                            <p class="text-xs sm:text-sm text-blue-200">Pengajar Ahli</p>
                        </div>
                        <div
                            class="bg-white/10 backdrop-blur-md p-3 sm:p-4 rounded-lg sm:rounded-xl border border-white/20 text-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-1">98%</h3>
                            <p class="text-xs sm:text-sm text-blue-200">Kelulusan</p>
                        </div>
                    </div>
                </div>

                <!-- Image (now on right) -->
                <div class="relative mt-8 lg:mt-0">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&h=800&fit=crop"
                            alt="Siswa Belajar"
                            class="rounded-2xl sm:rounded-3xl shadow-2xl w-full h-[350px] sm:h-[450px] md:h-[500px] object-cover border-4 border-white/20">
                    </div>
                    <!-- Floating badge -->
                    <div
                        class="absolute -bottom-6 -left-6 sm:-bottom-8 sm:-left-8 bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-4 sm:p-6 rounded-xl sm:rounded-2xl shadow-2xl max-w-[200px] sm:max-w-xs z-20">
                        <div class="flex items-center gap-2 sm:gap-3 mb-1 sm:mb-2">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <div>
                                <p class="text-xs sm:text-sm font-semibold">Rating 4.9/5</p>
                                <p class="text-xs opacity-90">dari 2000+ review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section class="relative py-12 md:py-20 bg-gradient-to-b from-gray-50 to-white grid-pattern overflow-hidden">
        <!-- Wave Top -->
        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Gradient circles -->
            <div
                class="absolute top-32 right-20 w-48 h-48 bg-gradient-to-br from-blue-300 to-purple-300 rounded-full opacity-10 blur-3xl float-animation">
            </div>
            <div class="absolute bottom-40 left-16 w-56 h-56 bg-gradient-to-br from-purple-300 to-pink-300 rounded-full opacity-10 blur-3xl float-animation"
                style="animation-delay: 1s;"></div>

            <!-- Geometric shapes -->
            <div class="absolute top-1/3 left-1/4 w-20 h-20 bg-yellow-300 rounded-2xl opacity-15 transform rotate-12 float-animation"
                style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/3 right-1/4 w-28 h-28 bg-blue-300 rounded-3xl opacity-10 transform -rotate-12 float-animation"
                style="animation-delay: 1.5s;"></div>

            <!-- Small dots -->
            <div class="absolute top-1/4 right-1/3 w-4 h-4 bg-purple-400 rounded-full opacity-25"></div>
            <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-blue-400 rounded-full opacity-25"></div>
            <div class="absolute top-2/3 right-1/2 w-2 h-2 bg-pink-400 rounded-full opacity-25"></div>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10" style="padding-top: 40px;">
            <div class="text-center mb-12 sm:mb-14 md:mb-16">
                <span
                    class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold mb-3 sm:mb-4 shadow-lg">Program
                    Kami</span>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mt-3 sm:mt-4 mb-3 sm:mb-4 px-4">
                    Pilihan Program Belajar
                </h2>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto px-4">
                    Berbagai pilihan program bimbingan belajar sesuai kebutuhan dan jenjang pendidikan Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 md:gap-8 max-w-7xl mx-auto">
                <!-- Program SD -->
                <div
                    class="relative bg-white p-8 rounded-3xl shadow-xl card-hover border border-gray-100 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-200 to-blue-100 rounded-bl-full opacity-50">
                    </div>
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Program SD</h3>
                        <p class="text-gray-600 mb-4">Bimbingan belajar untuk siswa Sekolah Dasar</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Matematika, IPA, Bahasa Indonesia</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Metode belajar menyenangkan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">4x pertemuan per minggu</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-blue-700 mb-1">Rp 500.000</p>
                        <p class="text-gray-600 text-sm mb-4">per bulan</p>
                        <button
                            class="w-full bg-blue-700 text-white py-3 rounded-lg hover:bg-blue-800 transition font-semibold">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>

                <!-- Program SMP -->
                <div
                    class="relative bg-gradient-to-br from-blue-600 to-blue-800 p-6 sm:p-7 md:p-8 rounded-2xl sm:rounded-3xl shadow-2xl card-hover lg:transform lg:scale-105 overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white rounded-full opacity-10"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white rounded-full opacity-10"></div>
                    <div class="text-center mb-6 relative z-10">
                        <span
                            class="bg-yellow-400 text-gray-900 px-4 py-1 rounded-full text-sm font-bold shadow-lg inline-flex items-center gap-2">
                            <i class="fas fa-star"></i> POPULER
                        </span>
                        <div
                            class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 mt-4 shadow-lg">
                            <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Program SMP</h3>
                        <p class="text-blue-100 mb-4">Bimbingan belajar untuk siswa SMP</p>
                    </div>
                    <ul class="space-y-3 mb-6 relative z-10">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-yellow-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-white">Semua mata pelajaran utama</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-yellow-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-white">Try Out rutin setiap bulan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-yellow-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-white">5x pertemuan per minggu</span>
                        </li>
                    </ul>
                    <div class="text-center relative z-10">
                        <p class="text-4xl font-bold text-white mb-1">Rp 750.000</p>
                        <p class="text-blue-100 text-sm mb-4">per bulan</p>
                        <button
                            class="w-full bg-white text-blue-700 py-3 rounded-lg hover:bg-blue-50 transition font-bold shadow-lg">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>

                <!-- Program SMA -->
                <div
                    class="relative bg-white p-8 rounded-3xl shadow-xl card-hover border border-gray-100 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-200 to-purple-100 rounded-bl-full opacity-50">
                    </div>
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Program SMA</h3>
                        <p class="text-gray-600 mb-4">Bimbingan UTBK & Pelajaran SMA</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Persiapan UTBK SNBT</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Materi IPA & IPS lengkap</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">6x pertemuan per minggu</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-blue-700 mb-1">Rp 1.000.000</p>
                        <p class="text-gray-600 text-sm mb-4">per bulan</p>
                        <button
                            class="w-full bg-blue-700 text-white py-3 rounded-lg hover:bg-blue-800 transition font-semibold">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="relative py-12 md:py-20 bg-gradient-to-r from-pink-50 via-purple-50 to-blue-50 overflow-hidden">
        <!-- Decorative SVG Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg width="100%" height="100%">
                <pattern id="testimonial-pattern" x="0" y="0" width="100" height="100"
                    patternUnits="userSpaceOnUse">
                    <circle cx="50" cy="50" r="2" fill="currentColor" class="text-blue-500" />
                    <circle cx="25" cy="75" r="2" fill="currentColor" class="text-purple-500" />
                    <circle cx="75" cy="25" r="2" fill="currentColor" class="text-pink-500" />
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#testimonial-pattern)" />
            </svg>
        </div>

        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Gradient blobs -->
            <div
                class="absolute top-20 left-10 w-64 h-64 bg-gradient-to-br from-pink-300 to-rose-300 rounded-full opacity-15 blur-3xl animate-pulse">
            </div>
            <div class="absolute bottom-20 right-10 w-72 h-72 bg-gradient-to-br from-purple-300 to-indigo-300 rounded-full opacity-15 blur-3xl animate-pulse"
                style="animation-delay: 2s;"></div>

            <!-- Floating shapes -->
            <div
                class="absolute top-1/4 right-20 w-24 h-24 bg-pink-400 rounded-2xl opacity-10 transform rotate-45 float-animation">
            </div>
            <div class="absolute bottom-1/3 left-24 w-32 h-32 bg-purple-400 rounded-full opacity-10 float-animation"
                style="animation-delay: 0.8s;"></div>
            <div class="absolute top-2/3 right-1/3 w-20 h-20 bg-blue-400 rounded-3xl opacity-10 transform -rotate-12 float-animation"
                style="animation-delay: 1.3s;"></div>

            <!-- Star shapes -->
            <svg class="absolute top-40 left-1/3 w-8 h-8 text-yellow-400 opacity-20 float-animation"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <svg class="absolute bottom-1/4 right-1/4 w-10 h-10 text-pink-400 opacity-20 float-animation"
                style="animation-delay: 1.5s;" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10">
            <div class="text-center mb-12 sm:mb-14 md:mb-16">
                <span
                    class="inline-block bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold mb-3 sm:mb-4 shadow-lg">Testimoni</span>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mt-3 sm:mt-4 mb-3 sm:mb-4 px-4">
                    Apa Kata Siswa Kami
                </h2>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 max-w-3xl mx-auto px-4">
                    Ribuan siswa telah merasakan manfaat belajar di InvestaStar dan meraih prestasi gemilang
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 md:gap-8 max-w-7xl mx-auto">
                <div
                    class="relative bg-white p-8 rounded-3xl shadow-xl card-hover border-l-4 border-blue-500 overflow-hidden">
                    <!-- Quote icon -->
                    <div class="absolute top-4 right-4 opacity-10">
                        <svg class="w-16 h-16 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-xl font-bold text-white">AM</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Andi Maulana</h4>
                            <p class="text-sm text-gray-600">Siswa SMP Kelas 9</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        "Setelah ikut bimbel di InvestaStar, nilai matematika saya meningkat drastis dari 70 menjadi 95.
                        Guru-gurunya sangat sabar dan cara mengajarnya mudah dipahami!"
                    </p>
                </div>

                <div
                    class="relative bg-white p-8 rounded-3xl shadow-xl card-hover border-l-4 border-purple-500 overflow-hidden">
                    <!-- Quote icon -->
                    <div class="absolute top-4 right-4 opacity-10">
                        <svg class="w-16 h-16 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-xl font-bold text-white">SP</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Siti Permata</h4>
                            <p class="text-sm text-gray-600">Siswi SMA Kelas 12</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        "Alhamdulillah lolos PTN impian berkat bimbingan intensif persiapan UTBK di InvestaStar. Try
                        out-nya sangat membantu dan mirip dengan soal asli!"
                    </p>
                </div>

                <div
                    class="relative bg-white p-8 rounded-3xl shadow-xl card-hover border-l-4 border-pink-500 overflow-hidden">
                    <!-- Quote icon -->
                    <div class="absolute top-4 right-4 opacity-10">
                        <svg class="w-16 h-16 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>
                    <div class="flex items-center mb-4 relative z-10">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-700 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-xl font-bold text-white">BW</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Budi Wijaya</h4>
                            <p class="text-sm text-gray-600">Siswa SD Kelas 6</p>
                        </div>
                    </div>
                    <div class="flex mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        "Cara belajarnya seru dan tidak membosankan. Saya jadi lebih semangat belajar dan nilai rapor
                        saya meningkat. Terima kasih InvestaStar!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section
        class="relative py-16 md:py-24 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Large pulse circles -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-white rounded-full blur-3xl opacity-20 animate-pulse">
            </div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-yellow-300 rounded-full blur-3xl opacity-20 animate-pulse"
                style="animation-delay: 1s;"></div>

            <!-- Floating geometric shapes -->
            <div
                class="absolute top-1/4 right-16 w-32 h-32 bg-white rounded-3xl opacity-10 transform rotate-12 float-animation">
            </div>
            <div class="absolute bottom-1/3 left-20 w-28 h-28 bg-yellow-200 rounded-full opacity-15 float-animation"
                style="animation-delay: 0.7s;"></div>
            <div class="absolute top-1/2 right-1/3 w-24 h-24 bg-pink-300 rounded-2xl opacity-10 transform -rotate-45 float-animation"
                style="animation-delay: 1.4s;"></div>

            <!-- Small decorative elements -->
            <div class="absolute top-1/3 left-1/4 w-16 h-16 bg-white rounded-xl opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-1/4 right-1/4 w-20 h-20 bg-yellow-300 rounded-full opacity-10"></div>

            <!-- Sparkle effects -->
            <svg class="absolute top-20 left-1/3 w-12 h-12 text-yellow-300 opacity-30 float-animation"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <svg class="absolute bottom-20 right-1/3 w-10 h-10 text-white opacity-30 float-animation"
                style="animation-delay: 0.5s;" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
        </div>

        <!-- Wave Shape Top -->


        <div class="px-4 sm:px-8 lg:px-16 relative z-10">
            <div class="max-w-5xl mx-auto text-center">
                <div
                    class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold mb-4 sm:mb-6">
                    <i class="fas fa-bullseye"></i>
                    Daftar Sekarang
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-5 sm:mb-6 leading-tight px-4">
                    Siap Meningkatkan<br />Prestasi Belajar?
                </h2>
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 sm:mb-10 text-white/90 max-w-3xl mx-auto px-4">
                    Bergabunglah dengan InvestaStar sekarang dan raih prestasi terbaikmu bersama mentor profesional!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center mb-10 sm:mb-14 px-4">
                    <a href="#contact"
                        class="group bg-white text-blue-700 px-6 sm:px-8 md:px-10 py-3 sm:py-4 md:py-5 rounded-xl sm:rounded-2xl hover:bg-yellow-400 hover:text-gray-900 transition-all duration-300 font-bold text-base sm:text-lg inline-flex items-center justify-center gap-2 sm:gap-3 shadow-2xl hover:shadow-3xl transform hover:scale-105">
                        <i class="fas fa-user-plus group-hover:scale-110 transition-transform"></i>
                        Daftar Sekarang
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#programs"
                        class="bg-white/10 backdrop-blur-md border-2 border-white text-white px-6 sm:px-8 md:px-10 py-3 sm:py-4 md:py-5 rounded-xl sm:rounded-2xl hover:bg-white hover:text-blue-700 transition-all duration-300 font-bold text-base sm:text-lg shadow-xl transform hover:scale-105 inline-flex items-center justify-center gap-2 sm:gap-3">
                        <i class="fas fa-book-reader"></i>
                        Lihat Program
                    </a>
                </div>

                <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                        <div class="text-5xl font-bold mb-2">5000+</div>
                        <p class="text-white/80 text-lg">Siswa Bergabung</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                        <div class="text-5xl font-bold mb-2">50+</div>
                        <p class="text-white/80 text-lg">Pengajar Profesional</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                        <div class="text-5xl font-bold mb-2">98%</div>
                        <p class="text-white/80 text-lg">Tingkat Kepuasan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="relative py-12 md:py-20 bg-gray-50 grid-pattern overflow-hidden">
        <!-- Wave shape -->


        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Gradient blobs -->
            <div
                class="absolute top-32 left-16 w-56 h-56 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-20 blur-3xl float-animation">
            </div>
            <div class="absolute bottom-32 right-20 w-64 h-64 bg-gradient-to-br from-purple-200 to-pink-200 rounded-full opacity-20 blur-3xl float-animation"
                style="animation-delay: 1.2s;"></div>

            <!-- Geometric shapes -->
            <div class="absolute top-1/4 right-1/4 w-24 h-24 bg-blue-300 rounded-3xl opacity-15 transform rotate-12 float-animation"
                style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/3 left-1/4 w-28 h-28 bg-purple-300 rounded-2xl opacity-15 transform -rotate-12 float-animation"
                style="animation-delay: 1.5s;"></div>
            <div class="absolute top-1/2 left-1/3 w-20 h-20 bg-pink-300 rounded-full opacity-15 float-animation"
                style="animation-delay: 0.8s;"></div>

            <!-- Small decorative elements -->
            <div class="absolute top-40 right-1/3 w-16 h-16 bg-yellow-300 rounded-xl opacity-10 transform rotate-45">
            </div>
            <div class="absolute bottom-40 left-1/2 w-12 h-12 bg-blue-300 rounded-full opacity-15"></div>

            <!-- Email/Message icons decorative -->
            <svg class="absolute top-1/3 left-16 w-10 h-10 text-blue-300 opacity-10 float-animation" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            <svg class="absolute bottom-1/3 right-16 w-12 h-12 text-purple-300 opacity-10 float-animation"
                style="animation-delay: 1s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                </path>
            </svg>

            <!-- Dots pattern -->
            <div class="absolute top-1/4 left-1/3 w-3 h-3 bg-blue-400 rounded-full opacity-30"></div>
            <div class="absolute bottom-1/4 right-1/3 w-2 h-2 bg-purple-400 rounded-full opacity-30"></div>
            <div class="absolute top-2/3 right-1/2 w-4 h-4 bg-pink-400 rounded-full opacity-30"></div>
        </div>

        <div class="px-4 sm:px-6 md:px-8 lg:px-16 relative z-10" style="padding-top: 40px;">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 lg:gap-16">
                    <div class="space-y-8">
                        <div>
                            <span
                                class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">Hubungi
                                Kami</span>
                            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-4 leading-tight">
                                Mari Mulai Perjalanan Belajar
                            </h2>
                            <p class="text-lg text-gray-600 mt-4 leading-relaxed">
                                Punya pertanyaan tentang program kami atau butuh konsultasi? Kami siap membantu
                                perjalanan belajar Anda.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-white p-6 rounded-2xl shadow-lg card-hover border-l-4 border-blue-500">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                                        <p class="text-gray-600">info@investastar.com</p>
                                        <p class="text-gray-600">pendaftaran@investastar.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-2xl shadow-lg card-hover border-l-4 border-purple-500">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Telepon</h3>
                                        <p class="text-gray-600">021-5551-2345</p>
                                        <p class="text-gray-600">0812-3456-7890 (WhatsApp)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-2xl shadow-lg card-hover border-l-4 border-pink-500">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-700 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-2">Alamat</h3>
                                        <p class="text-gray-600">Jl. Pendidikan Raya No. 88<br>Jakarta Selatan,
                                            12110<br>Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-4 pt-4">
                            <a href="#"
                                class="w-12 h-12 bg-gray-100 hover:bg-blue-700 rounded-lg flex items-center justify-center transition group">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-gray-100 hover:bg-blue-700 rounded-lg flex items-center justify-center transition group">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-gray-100 hover:bg-blue-700 rounded-lg flex items-center justify-center transition group">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-gray-100 hover:bg-blue-700 rounded-lg flex items-center justify-center transition group">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-100 to-purple-100 rounded-3xl transform rotate-3">
                        </div>
                        <div class="relative bg-white p-8 rounded-3xl shadow-2xl">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                            <form class="space-y-5">
                                <div>
                                    <label class="block text-sm font-bold text-gray-900 mb-2">Nama Lengkap</label>
                                    <input type="text"
                                        class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition-colors bg-gray-50 focus:bg-white"
                                        placeholder="Nama Anda">
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-gray-900 mb-2">Email</label>
                                    <input type="email"
                                        class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition-colors bg-gray-50 focus:bg-white"
                                        placeholder="email@example.com">
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-gray-900 mb-2">Nomor Telepon</label>
                                    <input type="tel"
                                        class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition-colors bg-gray-50 focus:bg-white"
                                        placeholder="0812-3456-7890">
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-gray-900 mb-2">Pesan</label>
                                    <textarea rows="4"
                                        class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition-colors bg-gray-50 focus:bg-white resize-none"
                                        placeholder="Ceritakan kebutuhan belajar Anda..."></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all font-bold text-lg shadow-lg hover:shadow-xl transform hover:scale-[1.02] flex items-center justify-center gap-2">
                                    <i class="fas fa-paper-plane"></i>
                                    Kirim Pesan
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 md:py-20">
        <div class="px-4 sm:px-8 lg:px-16">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold text-blue-400">InvestaStar</h2>
                    <p class="text-gray-400 text-sm">
                        Bimbingan belajar terpercaya untuk masa depan cerah generasi Indonesia.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold text-lg mb-4">Menu Cepat</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                        <li><a href="#programs" class="hover:text-blue-400 transition">Program</a></li>
                        <li><a href="#contact" class="hover:text-blue-400 transition">Kontak</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Galeri</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Berita</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-lg mb-4">Program Bimbel</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Bimbel SD</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Bimbel SMP</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Bimbel SMA</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Persiapan UTBK</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Les Privat</a></li>
                    </ul>
                </div>


            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">© 2026 InvestaStar. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-blue-400 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-blue-400 transition">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-blue-400 transition">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/app.js') }}"></script>
</body>

</html>
