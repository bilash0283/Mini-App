@include('admin-layout.header')

    <!-- Page content -->
        <main class="p-6">
            <div class="w-full py-4 bg-slate-300 px-10 mb-5 rounded-sm">
                <h1 class="text-2xl font-bold mb-6">Category Management</h1>
            </div>

            @if (session('success'))
                <h5 class="text-green-700 my-5">{{ session('success') }}</h5>
            @endif

            <div class="w-full ">
                <div class="overflow-x-auto rounded-lg shadow-lg">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-gray-800 text-gray-300 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3">SL</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach ($categories as $category)
                            <tr class="hover:bg-gray-800 hover:text-white">
                                <td class="px-4 py-3">{{ $category->id }}</td>
                                <td class="px-4 py-3">{{ $category->name }}</td>
                                <td class="px-4 py-3">{{ $category->description }}</td>
                                <td class="px-4 py-3 text-green-400">{{ $category->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td class="px-4 py-3">
                                    <div class="">
                                        <a href="" class="bg-blue-500 px-2 py-1 text-white rounded-md">Edit</a>
                                        <a href="" class="bg-red-600 px-2 py-1 text-white rounded-md">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            
        </main>

    <!-- Alpine.js Script -->
<script src="//unpkg.com/alpinejs" defer></script>
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