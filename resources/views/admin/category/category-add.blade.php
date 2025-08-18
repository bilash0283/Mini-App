@include('admin-layout.header')

<!-- Page content -->
<main class="p-6">
    <div class="w-full py-4 bg-slate-300 px-10 mb-5 rounded-sm">
        <h1 class="text-2xl font-bold mb-6">Category Management</h1>
    </div>

    <div class="w-full ">
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm/6 font-semibold text-black">First name</label>
                    <div class="mt-2.5">
                        <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm/6 font-semibold text-black">Last name</label>
                    <div class="mt-2.5">
                        <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm/6 font-semibold text-black">Company</label>
                    <div class="mt-2.5">
                        <input id="company" type="text" name="company" autocomplete="organization"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-semibold text-black">Email</label>
                    <div class="mt-2.5">
                        <input id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm/6 font-semibold text-black">Phone number</label>
                    <div class="mt-2.5">
                        <div
                            class="flex rounded-md bg-black/5 outline-1 -outline-offset-1 outline-black/10 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-500">
                            <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                                <select id="country" name="country" autocomplete="country" aria-label="Country"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-transparent py-2 pr-7 pl-3.5 text-base text-gray-400 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="phone-number" type="text" name="phone-number" placeholder="123-456-7890"
                                class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-black placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-black">Message</label>
                    <div class="mt-2.5">
                        <textarea id="message" name="message" rows="4"
                            class="block w-full rounded-md bg-black/5 px-3.5 py-2 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2">
                    <div class="flex h-6 items-center">
                        <div
                            class="group relative inline-flex w-8 shrink-0 rounded-full bg-black/5 p-px inset-ring inset-ring-black/10 outline-offset-2 outline-indigo-500 transition-colors duration-200 ease-in-out has-checked:bg-indigo-500 has-focus-visible:outline-2">
                            <span
                                class="size-4 rounded-full bg-black shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5"></span>
                            <input id="agree-to-policies" type="checkbox" name="agree-to-policies"
                                aria-label="Agree to policies"
                                class="absolute inset-0 appearance-none focus:outline-hidden" />
                        </div>
                    </div>
                    <label for="agree-to-policies" class="text-sm/6 text-gray-400">
                        By selecting this, you agree to our
                        <a href="#" class="font-semibold blackspace-nowrap text-indigo-400">privacy policy</a>.
                    </label>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-black shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Let's
                    talk</button>
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