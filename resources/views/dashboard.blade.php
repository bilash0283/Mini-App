@include('admin.admin-layout.header')

        <!-- Page content -->
        <main class="p-6">
            <div class="w-full py-4 bg-slate-300 px-10">
                <h1 class="text-2xl font-bold mb-6">Welcome, {{ Auth::user()->name }}</h1>
            </div>

            <!-- Profile Card -->
            <div class="bg-white p-6 rounded shadow w-full max-w-md mt-5">
                <h2 class="text-lg font-bold mb-2">Profile Info</h2>
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline mt-4 inline-block">Edit Profile</a>
            </div>
        </main>



        
    </div>
</div>


@include('admin.admin-layout.footer')
