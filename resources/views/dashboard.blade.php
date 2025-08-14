<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GSC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md hidden md:block">
        <div class="p-6 text-xl font-bold border-b">GSC Dashboard</div>
        <nav class="mt-6">
            <a href="{{ route('dashboard') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">Dashboard</a>
            <a href="{{ route('profile.show') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-6 py-3 text-red-600 hover:bg-red-100 rounded">Logout</button>
            </form>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col overflow-auto">
        <!-- Mobile header -->
        <header class="md:hidden flex items-center justify-between bg-white p-4 shadow">
            <span class="text-xl font-bold">GSC Dashboard</span>
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
            <a href="{{ route('dashboard') }}" class="block px-4 py-3 hover:bg-gray-200">Dashboard</a>
            <a href="{{ route('profile.show') }}" class="block px-4 py-3 hover:bg-gray-200">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-100">Logout</button>
            </form>
        </div>

        <!-- Page content -->
        <main class="p-6">
            <h1 class="text-2xl font-bold mb-6">Welcome, {{ Auth::user()->name }}</h1>

            <!-- Profile Card -->
            <div class="bg-white p-6 rounded shadow w-full max-w-md">
                <h2 class="text-lg font-bold mb-2">Profile Info</h2>
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline mt-4 inline-block">Edit Profile</a>
            </div>
        </main>
    </div>
</div>

<script>
    // Mobile menu toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
