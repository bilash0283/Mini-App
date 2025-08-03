<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mini Money Plant</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f2f2f2] text-gray-800">

  <!-- Top Bar -->
  <div class="bg-[#d6006e] text-white px-4 py-3 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <img src="https://randomuser.me/api/portraits/men/75.jpg" class="w-10 h-10 rounded-full border-2 border-white" />
      <div>
        <p class="text-sm font-bold">Rafiqul Rahman</p>
        <button class="text-[11px] bg-white text-[#d6006e] px-2 py-[2px] rounded-full mt-1">ব্যালেন্স জানতে ট্যাপ করুন</button>
      </div>
    </div>
    <img src="{{ asset('assets/app_images/app_logo.png') }}" class="w-20 h-20" alt="this is logo" />
  </div>

  <!-- Grid Menu -->
  <div class="bg-white grid grid-cols-4 gap-4 p-4 text-center text-sm">
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1828/1828817.png" class="w-8 h-8" />
      <p>সেন্ড মানি</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" class="w-8 h-8" />
      <p>মোবাইল রিচার্জ</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/2089/2089709.png" class="w-8 h-8" />
      <p>ক্যাশ আউট</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/318/318221.png" class="w-8 h-8" />
      <p>পেমেন্ট</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/833/833472.png" class="w-8 h-8" />
      <p>অ্যাড মানি</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1041/1041870.png" class="w-8 h-8" />
      <p>পে বিল</p>
    </div>
    <div class="flex flex-col items-center border-2 border-green-500 rounded-md p-1">
      <img src="https://cdn-icons-png.flaticon.com/128/854/854878.png" class="w-8 h-8" />
      <p>টিকেট</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1828/1828970.png" class="w-8 h-8" />
      <p>আরো</p>
    </div>
  </div>

  <!-- My bKash Horizontal Scroll -->
  <div class="bg-white p-4 mt-2">
    <h2 class="text-sm font-semibold mb-2">আমার বিকাশ</h2>
    <div class="flex overflow-x-auto gap-3">
      <div class="min-w-[80px] flex flex-col items-center">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">Serajus</p>
      </div>
      <div class="min-w-[80px] flex flex-col items-center">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">Maa</p>
      </div>
      <div class="min-w-[80px] flex flex-col items-center">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">01919051487</p>
      </div>
    </div>
  </div>

  <!-- Banner -->
  <div class="mt-2 mb-[65px] px-4">
    <img src="{{ asset('assets/app_images/banner.png') }}" class="rounded-md w-full" alt="Ticket Banner" />
  </div>

  <!-- Bottom Nav -->
  <div class="fixed bottom-0 left-0 right-0 bg-[#d6006e] text-white flex justify-around py-2 text-xs">
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1946/1946433.png" class="w-5 h-5" />
      <p>হোম</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/565/565340.png" class="w-5 h-5" />
      <p>QR স্ক্যান</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1077/1077046.png" class="w-5 h-5" />
      <p>ইনবক্স</p>
    </div>
  </div>

</body>
</html>
