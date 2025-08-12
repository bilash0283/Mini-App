  @include('backend-layouts.header')

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

  <!-- user caruent balance  -->
  <?php 
    $money = '50.40';
  ?>

@include('backend-layouts.footer')

