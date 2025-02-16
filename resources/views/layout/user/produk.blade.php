@extends('components.user.header')

@section('title', 'Produk')

@section('content')
    <main class="container mx-auto p-4 min-h-screen mt-16">
        <section class="mb-16" id="packages">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Paket Umroh Populer</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pilih paket umroh sesuai dengan kebutuhan Anda. Kami menyediakan
                    berbagai pilihan paket dengan fasilitas terbaik.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
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
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="p-6">
                        <div class="text-3xl font-bold mb-4 text-emerald-700">
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
                        <a href="/paket/premium"
                            class="block text-center bg-emerald-700 text-white py-3 rounded-lg hover:bg-emerald-800 transition duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
