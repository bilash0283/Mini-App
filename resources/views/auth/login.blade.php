<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


<!-- 
    <!doctype html>
    <html lang="bn">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>bKash স্টাইল লগইন পেজ — Tailwind CSS</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            /* ছোট কাস্টমাইজেশন */
            .bkash-grad {
                background: linear-gradient(135deg, #ff3b6b 0%, #ff8a00 100%);
            }

            input:focus {
                outline: none;
                box-shadow: 0 0 0 4px rgba(255, 138, 0, 0.08);
            }
        </style>
    </head>

    <body class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
        <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left: Branding / Welcome -->
            <div
                class="hidden md:flex flex-col items-start justify-center space-y-6 p-8 bg-white rounded-3xl shadow-lg">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-bold text-xl">
                        bK</div>
                    <div>
                        <h1 class="text-2xl font-extrabold text-gray-800">bKash স্টাইল লগইন</h1>
                        <p class="text-sm text-gray-500">সহজ, দ্রুত ও নিরাপদে আপনার পেমেন্ট অ্যাক্সেস করুন</p>
                    </div>
                </div>

                <div class="mt-4 text-gray-600">
                    <p class="leading-relaxed">এই পেজটি Tailwind CSS দিয়ে ডিজাইন করা হয়েছে — সুন্দর, রেসপন্সিভ এবং
                        মোবাইল-ফ্রেন্ডলি। নিচে লগইন ফর্মে আপনার ফোন নম্বর ও ওটিপি/পাসওয়ার্ড দিয়ে লগইন করুন।</p>
                </div>

                <ul class="space-y-3 mt-4 text-sm text-gray-600">
                    <li>• দ্রুত ওটিপি লগইন</li>
                    <li>• পাসওয়ার্ড নিরাপত্তা</li>
                    <li>• সহজ অ্যাকাউন্ট রিকভারি</li>
                </ul>

                <div class="mt-6 w-full">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?auto=format&fit=crop&w=800&q=60"
                        alt="payment" class="rounded-xl shadow-md w-full object-cover h-48" />
                </div>
            </div>

            <!-- Right: Login Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-extrabold text-lg">
                            bK</div>
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">অ্যাকাউন্টে প্রবেশ করুন</h2>
                            <p class="text-sm text-gray-500">ফোন নম্বর ও ওটিপি/পাসওয়ার্ড দিয়ে লগইন করুন</p>
                        </div>
                    </div>
                    <div class="text-sm text-gray-400">শক্তিশালী এনক্রিপশন</div>
                </div>

                <form class="space-y-4" onsubmit="event.preventDefault(); alert('লগইন পোস্ট সিমুলেট করা হয়েছে।')">
                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">ফোন নম্বর</label>
                        <div class="flex items-center bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
                            <span class="px-3 text-sm text-gray-600">+880</span>
                            <input type="tel" required placeholder="1XXXXXXXXX"
                                class="w-full p-3 bg-transparent text-gray-800 placeholder-gray-400" />
                        </div>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600 mb-1 block">ওটিপি / পাসওয়ার্ড</label>
                        <div class="relative">
                            <input type="text" required placeholder="৬ ডিজিট ওটিপি অথবা পাসওয়ার্ড"
                                class="w-full p-3 border border-gray-200 rounded-lg" />
                            <button type="button"
                                class="absolute right-2 top-2 bg-white border border-gray-200 px-3 py-1 rounded text-sm shadow-sm"
                                onclick="alert('ওটিপি পাঠানোর সিমুলেশন')">ওটিপি পাঠান</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-orange-500" checked />
                            <span class="text-gray-600">মনে রাখুন</span>
                        </label>
                        <a href="#" class="text-orange-500 font-medium">পাসওয়ার্ড ভুলে গেছেন?</a>
                    </div>

                    <div>
                        <button
                            class="w-full py-3 rounded-lg bkash-grad text-white font-semibold shadow hover:shadow-lg transform hover:-translate-y-0.5 transition">লগইন</button>
                    </div>

                    <div class="text-center text-sm text-gray-500">
                        <span>নতুন ব্যবহারকারী? </span>
                        <a href="#" class="text-orange-500 font-medium">অ্যাকাউন্ট খুলুন</a>
                    </div>

                    <div class="mt-4 text-xs text-gray-400">
                        <p>দ্রষ্টব্য: এই পেজটি একটি ডিজাইন নমুনা — বাস্তব পৃথিবীর পেমেন্ট সিস্টেমে ব্যবহার করার আগে
                            নিরাপত্তা যাচাই করুন।</p>
                    </div>
                </form>

                <!-- micro footer -->
                <div class="mt-6 pt-4 border-t border-gray-100 text-xs text-gray-400 flex items-center justify-between">
                    <div>© GSC — ডিজাইন নমুনা</div>
                    <div class="flex items-center space-x-3">
                        <a href="#" class="hover:underline">শর্ত ও নীতিমালা</a>
                        <a href="#" class="hover:underline">সাহায্য</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // হালকা ইন্টারঅ্যাকশন: Enter চাপলে সাবমিট সিমুলেট
            document.querySelectorAll('input').forEach(i => {
                i.addEventListener('keypress', e => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        document.querySelector('button[type=submit]')?.click();
                    }
                });
            });
        </script>
    </body>

    </html> -->

