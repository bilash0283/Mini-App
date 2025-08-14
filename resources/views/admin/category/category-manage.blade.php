@include('admin-layout.header')

    <!-- Page content -->
        <main class="p-6">
            <div class="w-full py-4 bg-slate-300 px-10">
                <h1 class="text-2xl font-bold mb-6">Category Management</h1>
            </div>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>SL</th>
                        </tr>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Bilash</td>
                        </tr>
                    </tbody>
                </table>
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