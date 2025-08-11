<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mini Money Plant</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f2f2f2] text-gray-800">

  <!-- Top Bar -->
  <div class="bg-[#d6006e] text-white px-4 py-3 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <img src="https://randomuser.me/api/portraits/men/75.jpg" class="w-10 h-10 rounded-full border-2 border-white" />
      <div>
        <p class="text-sm font-bold">Rafiqul Rahman</p>
        <button id="check-balance-btn" class="text-[11px] bg-white text-[#d6006e] px-2 py-[2px] rounded-full mt-1 flex items-center">
          <i class="fas fa-dollar-sign animate-spin mr-1 text-[10px]"></i>
          <span>Tap to check balance</span>
        </button>
      </div>
    </div>
    <img src="{{ asset('assets/app_images/app_logo.png') }}" class="w-20 h-20" alt="this is logo" />
  </div>

  <!-- Grid Menu -->
  <div class="bg-white grid grid-cols-4 gap-4 p-4 text-center text-sm">
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500 ">
      <img src="https://cdn-icons-png.flaticon.com/128/1828/1828817.png" class="w-8 h-8" />
      <p>Send Money</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" class="w-8 h-8" />
      <p>Mobile Recharge</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/2089/2089709.png" class="w-8 h-8" />
      <p>Cash Out</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/318/318221.png" class="w-8 h-8" />
      <p>Payment</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/833/833472.png" class="w-8 h-8" />
      <p>Add Money</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/1041/1041870.png" class="w-8 h-8" />
      <p>Pay Bill</p>
    </div>
    <div class="flex flex-col items-center rounded-md p-1 hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/854/854878.png" class="w-8 h-8" />
      <p>Ticket</p>
    </div>
    <div class="flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
      <img src="https://cdn-icons-png.flaticon.com/128/1828/1828970.png" class="w-8 h-8" />
      <p>More</p>
    </div>
  </div>

  <!-- My bKash Horizontal Scroll -->
  <div class="bg-white p-4 mt-2">
    <h2 class="text-sm font-semibold mb-2">My User</h2>
    <div class="flex overflow-x-auto gap-3">
      <div class="min-w-[80px] flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">Serajus</p>
      </div>
      <div class="min-w-[80px] flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">Miraj Hossen</p>
      </div>
      <div class="min-w-[80px] flex flex-col items-center hover:p-1 hover:border-2 hover:border-green-500">
        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135768.png" class="w-10 h-10" />
        <p class="text-xs">Golok Kumar</p>
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
      <p>Home</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/565/565340.png" class="w-5 h-5" />
      <p>Payment</p>
    </div>
    <div class="flex flex-col items-center">
      <img src="https://cdn-icons-png.flaticon.com/128/1077/1077046.png" class="w-5 h-5" />
      <p>Inbox</p>
    </div>
  </div>

  <??>


  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const button = document.getElementById("check-balance-btn");
      const icon = button.querySelector("i");
      const text = button.querySelector("span");

      button.addEventListener("click", function () {
        icon.classList.remove("animate-spin");
        text.textContent = "56.75"; 

        button.disabled = true;

        setTimeout(() => {
          text.textContent = "Tap to check balance";
          icon.classList.add("animate-spin");
          button.disabled = false;
        }, 5000);
      });
    });
  </script>
</body>
</html>





