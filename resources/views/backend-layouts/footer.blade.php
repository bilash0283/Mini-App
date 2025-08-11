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

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const button = document.getElementById("check-balance-btn");
      const icon = button.querySelector("i");
      const text = button.querySelector("span");

      button.addEventListener("click", function () {
        icon.classList.remove("animate-spin");
        text.textContent = <?php echo $money; ?>; 

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





