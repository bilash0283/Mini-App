<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dahboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md hidden md:block">
        <div class="p-6 text-xl font-bold border-b flex col-span-2 items-center">
            <img src="{{ asset('assets/app_images/app_logo.png') }}" class="w-10 h-10 rounded-full" alt=""> 
            <h4>Dashboard</h4>
        </div>
        <nav class="mt-6">
            <a href="{{ route('dashboard') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">Dashboard</a>
            <a href="{{ route('profile.show') }}" class="block px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">Profile</a>
            
            <div x-data="{ open: false }" class="space-y-1">
                <!-- Main Category Button -->
                <button @click="open = !open" 
                    class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">
                    <span>Category</span>
                    <!-- Dropdown Icon -->
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform duration-200" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown Links -->
                <div x-show="open" x-transition class="pl-6 space-y-1">
                    <a href="{{ route('profile.show') }}" 
                        class="block px-6 py-2 text-gray-600 hover:bg-gray-100 rounded">
                        Add Category
                    </a>
                    <a href="{{ route('category.index') }}" 
                        class="block px-6 py-2 text-gray-600 hover:bg-gray-100 rounded">
                        Manage Category
                    </a>
                </div>
            </div>

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
            <div class="text-xl font-bold border-b flex col-span-2 items-center">
                <img src="{{ asset('assets/app_images/app_logo.png') }}" class="w-10 h-10 rounded-full" alt=""> 
                <h4>Dashboard</h4>
            </div>
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
            <div x-data="{ open: false }" class="space-y-1">
                <!-- Main Category Button -->
                <button @click="open = !open" 
                    class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-200 rounded">
                    <span>Category</span>
                    <!-- Dropdown Icon -->
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform duration-200" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown Links -->
                <div x-show="open" x-transition class="pl-6 space-y-1">
                    <a href="{{ route('profile.show') }}" 
                        class="block px-6 py-2 text-gray-600 hover:bg-gray-100 rounded">
                        Add Category
                    </a>
                    <a href="{{ route('category.index') }}" 
                        class="block px-6 py-2 text-gray-600 hover:bg-gray-100 rounded">
                        Manage Category
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-100">Logout</button>
            </form>
        </div>



        