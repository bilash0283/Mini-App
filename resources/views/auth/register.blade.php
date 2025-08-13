<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bkash-grad {
      background: linear-gradient(135deg,#ff3b6b 0%, #ff8a00 100%);
    }
    input:focus { outline: none; box-shadow: 0 0 0 4px rgba(255,138,0,0.08); }
  </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center px-3">

    <div class="bg-white rounded-3xl shadow-2xl px-5 py-5 mx-auto my-10">
      <div class="flex items-center mb-6">
        <div class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-extrabold text-lg"><img src="{{ asset('assets/app_images/app_logo.png') }}" alt=""></div>
        <div class="ml-3">
          <h2 class="text-xl font-bold text-gray-800">Create a New Account</h2>
          <p class="text-sm text-gray-500">Please fill in the following information</p>
        </div>
      </div>

      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
          <label for="name" class="text-sm text-gray-600 mb-1 block">Full Name</label>
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                 placeholder="Full Name" class="w-full p-3 border border-gray-200 rounded-lg" />
          @error('name')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div>
          <label for="email" class="text-sm text-gray-600 mb-1 block">Email or Phone</label>
          <input id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="username"
                 placeholder="Email or Phone" class="w-full p-3 border border-gray-200 rounded-lg" />
          @error('email')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div>
          <label for="password" class="text-sm text-gray-600 mb-1 block">Password</label>
          <input id="password" type="password" name="password" required autocomplete="new-password"
                 placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
          @error('password')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div>
          <label for="password_confirmation" class="text-sm text-gray-600 mb-1 block">Confirm Password</label>
          <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                 placeholder="••••••••" class="w-full p-3 border border-gray-200 rounded-lg" />
          @error('password_confirmation')
            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-orange-500" required />
          <span class="text-sm text-gray-600">I agree to the terms and policies</span>
        </div>

        <button type="submit" class="w-full py-3 rounded-lg bkash-grad text-white font-semibold shadow hover:shadow-lg transform hover:-translate-y-0.5 transition">
          Registration
        </button>

        <div class="text-center text-sm text-gray-500">
          <span>Already have an account? </span>
          <a href="{{ route('home') }}" class="text-orange-500 font-medium">Login Here</a>
        </div>
      </form>

      <div class="mt-6 pt-4 border-t border-gray-100 text-xs text-gray-400 flex items-center justify-between">
        <div>© BK TECH-24</div>
        <div class="flex items-center space-x-3">
          <a href="#" class="hover:underline">Terms and Policies</a>
          <a href="#" class="hover:underline">Help</a>
        </div>
      </div>
    </div>
</body>
</html>
