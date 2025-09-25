@include('admin.admin-layout.header')

    <!-- Page content -->
        <main class="p-6">
            <div class="w-full py-4 bg-slate-300 px-10 mb-5 rounded-sm">
                <h1 class="text-2xl font-bold mb-6">Blog Management</h1>
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
                        <tr class="hover:bg-slate-500 hover:text-white">
                            <td class="px-4 py-3">01</td>
                            <td>01</td>
                            <td>01</td>
                            <td>01</td>
                            <td>01</td>
                        </tr>
                    </tbody>
                </table>
               
                </div>
            </div>
            <!-- category mage page exit done  -->
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