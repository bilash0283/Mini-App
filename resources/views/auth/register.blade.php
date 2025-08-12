<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
  <title>bKash স্টাইল রেজিস্ট্রেশন পেজ — Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bkash-grad {
      background: linear-gradient(135deg,#ff3b6b 0%, #ff8a00 100%);
    }
    input:focus { outline: none; box-shadow: 0 0 0 4px rgba(255,138,0,0.08); }
  </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <div class="hidden md:flex flex-col items-start justify-center space-y-6 p-8 bg-white rounded-3xl shadow-lg">
      <div class="flex items-center space-x-3">
        <div class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-bold text-xl">bK</div>
        <div>
          <h1 class="text-2xl font-extrabold text-gray-800">bKash স্টাইল রেজিস্ট্রেশন</h1>
          <p class="text-sm text-gray-500">নতুন অ্যাকাউন্ট তৈরির জন্য সহজ ধাপ</p>
        </div>
      </div>
      <p class="text-gray-600 leading-relaxed">Tailwind CSS দিয়ে সুন্দর ও রেসপন্সিভ ডিজাইন করা এই ফর্মে আপনার নাম, ফোন নম্বর, ইমেইল ও পাসওয়ার্ড দিন এবং অ্যাকাউন্ট তৈরি করুন।</p>
      <ul class="space-y-3 mt-4 text-sm text-gray-600">
        <li>• নিরাপদ তথ্য সংরক্ষণ</li>
        <li>• দ্রুত অ্যাকাউন্ট ভেরিফিকেশন</li>
        <li>• রিয়েল-টাইম ওটিপি সাপোর্ট</li>
      </ul>
    </div>

    <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">
      <div class="flex items-center mb-6">
        <div class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-extrabold text-lg">bK</div>
        <div class="ml-3">
          <h2 class="text-xl font-bold text-gray-800">নতুন অ্যাকাউন্ট তৈরি করুন</h2>
          <p class="text-sm text-gray-500">নিচের তথ্যগুলো পূরণ করুন</p>
        </div>
      </div>

      <form class="space-y-4" onsubmit="event.preventDefault(); alert('রেজিস্ট্রেশন সিমুলেট করা হয়েছে।')">
        <div>
          <label class="text-sm text-gray-600 mb-1 block">পুরো নাম</label>
          <input type="text" required placeholder="আপনার নাম" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">ফোন নম্বর</label>
          <div class="flex items-center bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
            <span class="px-3 text-sm text-gray-600">+880</span>
            <input type="tel" required placeholder="1XXXXXXXXX" class="w-full p-3 bg-transparent text-gray-800 placeholder-gray-400" />
          </div>
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">ইমেইল</label>
          <input type="email" required placeholder="you@example.com" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">পাসওয়ার্ড</label>
          <input type="password" required placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">পাসওয়ার্ড নিশ্চিত করুন</label>
          <input type="password" required placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-orange-500" required />
          <span class="text-sm text-gray-600">আমি শর্ত ও নীতিমালা মেনে নিচ্ছি</span>
        </div>

        <button class="w-full py-3 rounded-lg bkash-grad text-white font-semibold shadow hover:shadow-lg transform hover:-translate-y-0.5 transition">রেজিস্ট্রেশন</button>

        <div class="text-center text-sm text-gray-500">
          <span>ইতিমধ্যে অ্যাকাউন্ট আছে? </span>
          <a href="#" class="text-orange-500 font-medium">লগইন করুন</a>
        </div>
      </form>

      <div class="mt-6 pt-4 border-t border-gray-100 text-xs text-gray-400 flex items-center justify-between">
        <div>© GSC — ডিজাইন নমুনা</div>
        <div class="flex items-center space-x-3">
          <a href="#" class="hover:underline">শর্ত ও নীতিমালা</a>
          <a href="#" class="hover:underline">সাহায্য</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html> -->

