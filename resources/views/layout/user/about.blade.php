@extends('components.user.header')

@section('title', 'Tentang Kami')

@section('content')
<main class="container mx-auto p-4 min-h-screen">
<section class="mb-16">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Tentang Perusahaan Kami</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Kami adalah perusahaan yang berdedikasi untuk memberikan layanan terbaik kepada pelanggan kami. Dengan tim yang berpengalaman dan profesional, kami berkomitmen untuk mewujudkan perjalanan spiritual yang tidak terlupakan.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-users text-2xl text-blue-600"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Tim Profesional</h3>
            <p class="text-gray-600">Kami memiliki tim profesional yang siap melayani Anda dengan sepenuh hati.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-globe text-2xl text-green-600"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Layanan Global</h3>
            <p class="text-gray-600">Kami menawarkan layanan di berbagai negara dengan kualitas terbaik.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-award text-2xl text-yellow-600"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3">Penghargaan</h3>
            <p class="text-gray-600">Kami telah menerima berbagai penghargaan atas komitmen kami terhadap kualitas dan layanan.</p>
        </div>
    </div>
</section>
<section class="mb-16">
    <div class="bg-gradient-to-r from-blue-800 to-blue-900 rounded-2xl p-12 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Komitmen Kami</h2>
        <p class="mb-8 max-w-2xl mx-auto">
            Kami berkomitmen untuk memberikan pengalaman terbaik bagi setiap pelanggan kami dengan layanan yang terpercaya dan perhatian yang tulus.
        </p>
    </div>
</section>

</main>
@endsection