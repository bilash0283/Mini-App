@include('admin.admin-layout.header')

<!-- Page content -->
<main class="p-6">
    <div class="w-full py-4 bg-slate-300 px-10 mb-5 rounded-sm">
        <h1 class="text-2xl font-bold mb-6">Blog Add From</h1>
    </div>

    <div class="w-full ">
        <form action="{{ route('category.store') }}" method="POST" class="mx-auto  max-w-xl">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="first-name" class="block text-sm/6 font-semibold text-black">Name</label>
                    <div class="mt-2.5">
                        <input id="first-name" type="text" name="name" autocomplete="given-name"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                    </div>
                </div>
                
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-black">Description</label>
                    <div class="mt-2.5">
                        <textarea id="message" name="description" rows="4"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-black">Category</label>
                    <div class="mt-2.5">
                        <select name="status" class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" id="">
                            <option selected disabled>Select One</option>
                            @foreach ($category as $categories)
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-black">Status</label>
                    <div class="mt-2.5">
                        <select name="status" class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" id="">
                            <option selected disabled>Select One</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-black shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
            </div>
        </form>
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