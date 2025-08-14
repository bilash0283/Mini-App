@include('admin.admin-layout.header')

        <!-- Page content -->
        <main class="p-6">
            <h1 class="text-2xl font-bold mb-6">Welcome, {{ Auth::user()->name }}</h1>

            <!-- Profile Card -->
            <div class="bg-white p-6 rounded shadow w-full max-w-md">
                <h2 class="text-lg font-bold mb-2">Profile Info</h2>
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline mt-4 inline-block">Edit Profile</a>
            </div>
        </main>
    </div>
</div>


@include('admin.admin-layout.footer')
