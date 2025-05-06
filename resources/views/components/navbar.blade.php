<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gradient-to-r from-gray-700 via-rose-950 to-red-700 text-white px-6 py-4 shadow-md flex justify-between items-center sticky top-0 z-50">
    <div class="flex space-x-6 font-semibold">
        <a href="{{ route('dashboard') }}" class="text-lg hover:text-white">Dashboard</a>
        <a href="{{ route('pengelolaan') }}" class="text-lg hover:text-white">Pengelolaan Barang</a>
        <a href="{{ route('profile') }}" class="text-lg hover:text-white">Profile</a>
    </div>

    <div class="flex items-center space-x-3">
        @if(session('username'))
            <span class="text-sm font-medium">Halo, {{ session('username') }}!</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                    Logout
                </button>                
            </form>
        @else
            <a href="{{ route('login') }}" class="bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-lg hover:bg-gradient-to-l hover:from-green-400 hover:to-green-500">
                Login
            </a>
        @endif
    </div>
</nav>
