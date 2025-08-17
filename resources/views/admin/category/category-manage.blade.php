@include('admin-layout.header')

    <!-- Page content -->
        <main class="p-6">
            <div class="w-full py-4 bg-slate-300 px-10">
                <h1 class="text-2xl font-bold mb-6">Category Management</h1>
            </div>

            <div class="w-full max-w-4xl">
                <h1 class="text-2xl font-semibold mb-4">User Table</h1>

                <div class="overflow-x-auto rounded-lg shadow-lg">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-gray-800 text-gray-300 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                    <tr class="hover:bg-gray-800">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">Arifa Khan</td>
                        <td class="px-4 py-3">arifa.khan@example.com</td>
                        <td class="px-4 py-3">Admin</td>
                        <td class="px-4 py-3 text-green-400">Active</td>
                    </tr>
                    <tr class="hover:bg-gray-800">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">Mehedi Hasan</td>
                        <td class="px-4 py-3">mehedi.hasan@example.com</td>
                        <td class="px-4 py-3">Editor</td>
                        <td class="px-4 py-3 text-yellow-400">Idle</td>
                    </tr>
                    <tr class="hover:bg-gray-800">
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">Nusrat Jahan</td>
                        <td class="px-4 py-3">nusrat.jahan@example.com</td>
                        <td class="px-4 py-3">Viewer</td>
                        <td class="px-4 py-3 text-red-400">Inactive</td>
                    </tr>
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