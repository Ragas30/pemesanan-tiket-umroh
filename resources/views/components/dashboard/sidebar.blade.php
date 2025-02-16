<div class="h-screen w-64 bg-gray-800 shadow-lg">
    <div class="flex items-center justify-center py-4">
        <a href="{{ route('dashboard') }}" class="text-white text-3xl font-bold uppercase">
            {{ config('app.name') }}
        </a>
    </div>
    <ul class="list-none text-white">
        <li class="py-2 px-4 hover:bg-gray-700">
            <a href="{{ route('dashboard') }}" class="block">
                <i class="fas fa-home mr-2"></i>Dashboard
            </a>
        </li>
        <li class="py-2 px-4 hover:bg-gray-700">
            <a href="{{ route('profile') }}" class="block">
                <i class="fas fa-user mr-2"></i>Profile
            </a>
        </li>
        <li class="py-2 px-4 hover:bg-gray-700">
            <a href="{{ route('logout') }}" class="block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </li>
    </ul>
</div>

