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




<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registation From</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bkash-grad {
      background: linear-gradient(135deg,#ff3b6b 0%, #ff8a00 100%);
    }
    input:focus { outline: none; box-shadow: 0 0 0 4px rgba(255,138,0,0.08); }
  </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center">
  <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-1 mx-auto px-3 py-10 gap-8 items-center">
   
    <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-12">
      <div class="flex items-center mb-6">
        <div class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-extrabold text-lg">bK</div>
        <div class="ml-3">
          <h2 class="text-xl font-bold text-gray-800">Create a New Account</h2>
          <p class="text-sm text-gray-500">Please fill in the following information</p>
        </div>
      </div>

      <form class="space-y-4" >
        <div>
          <label class="text-sm text-gray-600 mb-1 block">Full Name</label>
          <input type="text" required placeholder="FUll Name" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">Phone No</label>
          <div class="flex items-center bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
            <input type="tel" required placeholder="Phone No" class="w-full p-3 bg-transparent text-gray-800 placeholder-gray-400" />
          </div>
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">Email</label>
          <input type="email" required placeholder="you@example.com" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">Password</label>
          <input type="password" required placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div>
          <label class="text-sm text-gray-600 mb-1 block">Confirm Password</label>
          <input type="password" required placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-orange-500" required />
          <span class="text-sm text-gray-600">I agree to the terms and policies</span>
        </div>

        <button class="w-full py-3 rounded-lg bkash-grad text-white font-semibold shadow hover:shadow-lg transform hover:-translate-y-0.5 transition">Registation</button>

        <div class="text-center text-sm text-gray-500">
          <span>I have a Account? </span>
          <a href="{{ route('login') }}" class="text-orange-500 font-medium">Login Hear</a>
        </div>
      </form>

      <div class="mt-6 pt-4 border-t border-gray-100 text-xs text-gray-400 flex items-center justify-between">
        <div>© BK TECH-24</div>
        <div class="flex items-center space-x-3">
          <a href="#" class="hover:underline">terms and policies</a>
          <a href="#" class="hover:underline">Help</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html> 

