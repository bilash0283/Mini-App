<!doctype html>
<html lang="bn">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bkash-grad {
            background: linear-gradient(135deg, #ff3b6b 0%, #ff8a00 100%);
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 138, 0, 0.08);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center px-3">

    <div class="bg-white rounded-3xl shadow-2xl px-5 py-5 mx-auto my-10">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 rounded-full bkash-grad flex items-center justify-center text-white font-extrabold text-lg"><img src="{{ asset('assets/app_images/app_logo.png') }}" alt=""></div>
                <div>
                    <h1 class="text-2xl font-extrabold text-gray-800">Login Here</h1>
                    <p class="text-sm text-gray-500">Login here to earn money</p>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm text-gray-600 mb-1 block">Email or Phone</label>
                <div class="relative">
                    <input id="email" type="text" name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="Email or Phone" class="w-full p-3 border border-gray-200 rounded-lg" />
                </div>
                @error('email')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="text-sm text-gray-600 mb-1 block">Password</label>
                <div class="relative">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        placeholder="Password" class="w-full p-3 border border-gray-200 rounded-lg" />
                </div>
                @error('password')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="inline-flex items-center space-x-2">
                    <input id="remember_me" type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-orange-500" />
                    <span class="text-gray-600">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-orange-500 font-medium">Forget your Password?</a>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full py-3 rounded-lg bkash-grad text-white font-semibold shadow hover:shadow-lg transform hover:-translate-y-0.5 transition">
                    Login
                </button>
            </div>

            <div class="text-center text-sm text-gray-500">
                <span>New User? </span>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-orange-500 font-medium">Create Account</a>
                @endif
            </div>

            <div class="mt-4 text-xs text-gray-400">
                <p>Never share your login details. It’s your personal information and must be kept safe.</p>
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

















