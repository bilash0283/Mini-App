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