@extends('components.user.header')

@section('title', 'Home')

@section('content')
    <main class="container mx-auto p-4 min-h-screen">
        <!-- Hero Section -->
        <section class="relative rounded-2xl overflow-hidden mb-16">
            <div class="bg-gradient-to-r from-emerald-800 to-emerald-900 h-[500px] relative">
                <!-- Background Image Overlay -->
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- Hero Content -->
                <div class="relative z-10 h-full flex flex-col justify-center items-center text-center p-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                        Wujudkan Perjalanan Suci Anda
                    </h1>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl">
                        Bersama kami, raih pengalaman umroh yang khusyuk, nyaman, dan terpercaya dengan bimbingan ustadz
                        berpengalaman
                    </p>
                    <a href="#packages"
                        class="bg-white text-emerald-800 px-8 py-3 rounded-full font-semibold hover:bg-emerald-50 transition duration-300 shadow-lg hover:shadow-xl">
                        Lihat Paket Umroh
                    </a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-mosque text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Bimbingan Terpercaya</h3>
                    <p class="text-gray-600">Dibimbing langsung oleh ustadz berpengalaman yang akan mendampingi selama
                        perjalanan ibadah.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-hotel text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Hotel Berkualitas</h3>
                    <p class="text-gray-600">Akomodasi hotel bintang 4 & 5 dengan lokasi strategis dekat Masjidil Haram.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-plane text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Penerbangan Terjadwal</h3>
                    <p class="text-gray-600">Penerbangan langsung dengan maskapai terpercaya untuk kenyamanan perjalanan
                        Anda.</p>
                </div>
            </div>
        </section>

        <!-- Popular Packages Section -->
        <section class="mb-16" id="packages">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Paket Umroh Populer</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pilih paket umroh sesuai dengan kebutuhan Anda. Kami menyediakan
                    berbagai pilihan paket dengan fasilitas terbaik.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Regular Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition duration-300">
                    <div class="bg-emerald-600 p-4 text-white">
                        <h3 class="text-xl font-semibold">Paket Regular</h3>
                        <p class="text-sm opacity-90">9 Hari</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4 text-emerald-600">
                            Rp 35.000.000
                            <span class="text-sm font-normal text-gray-500">/orang</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Hotel Bintang 4
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Penerbangan Economy Class
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Visa Umroh
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Makan 3x Sehari
                            </li>
                        </ul>
                        <a href="/paket/regular"
                            class="block text-center bg-emerald-600 text-white py-3 rounded-lg hover:bg-emerald-700 transition duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition duration-300">
                    <div class="bg-emerald-700 p-4 text-white">
                        <h3 class="text-xl font-semibold">Paket Premium</h3>
                        <p class="text-sm opacity-90">12 Hari</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4 text-emerald-700">
                            Rp 45.000.000
                            <span class="text-sm font-normal text-gray-500">/orang</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Hotel Bintang 5
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Penerbangan Business Class
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Visa Umroh Premium
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Makan 3x Sehari + Snack
                            </li>
                        </ul>
                        <a href="/paket/premium"
                            class="block text-center bg-emerald-700 text-white py-3 rounded-lg hover:bg-emerald-800 transition duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- VIP Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition duration-300">
                    <div class="bg-emerald-800 p-4 text-white">
                        <h3 class="text-xl font-semibold">Paket VIP</h3>
                        <p class="text-sm opacity-90">15 Hari</p>
                    </div>
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4 text-emerald-800">
                            Rp 60.000.000
                            <span class="text-sm font-normal text-gray-500">/orang</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Hotel Bintang 5 Premium
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Penerbangan First Class
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Visa Umroh VIP
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-emerald-500 mr-2"></i>
                                Full Service Meals
                            </li>
                        </ul>
                        <a href="/paket/vip"
                            class="block text-center bg-emerald-800 text-white py-3 rounded-lg hover:bg-emerald-900 transition duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Testimoni Jamaah</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Apa kata jamaah yang telah menggunakan layanan kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-emerald-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Ahmad Sudirman</h4>
                            <div class="text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Alhamdulillah, pelayanan sangat memuaskan. Hotel dekat dengan Masjidil Haram
                        dan bimbingan ibadah sangat membantu."</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-emerald-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Siti Aminah</h4>
                            <div class="text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Perjalanan umroh jadi lebih khusyuk dengan bimbingan ustadz yang sabar.
                        Makanan dan hotel juga memuaskan."</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-emerald-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Abdul Rahman</h4>
                            <div class="text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Sangat puas dengan pelayanan yang diberikan. Pengurusan visa lancar dan
                        jadwal perjalanan teratur."</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-gradient-to-r from-emerald-800 to-emerald-900 rounded-2xl p-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Mulai Perjalanan Suci Anda Sekarang</h2>
            <p class="text-white/90 mb-8 max-w-2xl mx-auto">Hubungi kami untuk informasi lebih lanjut dan konsultasi gratis
                seputar paket umroh yang sesuai dengan kebutuhan Anda.</p>
            <div class="flex justify-center gap-4">
                <a href="/contact"
                    class="bg-white text-emerald-800 px-8 py-3 rounded-full font-semibold hover:bg-emerald-50 transition duration-300">
                    Hubungi Kami
                </a>
                <a href="/packages"
                    class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white/10 transition duration-300">
                    Lihat Semua Paket
                </a>
            </div>
        </section>
    </main>
@endsection
