<header>
  <setion class="header-info">
    <div class="flex items-center py-[25px] px-[15px]">
      <!-- Header Logo -->
      <div class="w-[263px]">
        <a class="cursor-pointer" href="index.php">
          <img srcset="./pages/image/banner/logo.png 2x" alt="Logo" class="w-full max-w-[200px] object-cover" />
        </a>
      </div>
      <!-- Header Right -->
      <div class="flex items-center gap-5 flex-1 justify-end">
        <!-- Header Input -->
        <form class="w-full max-w-[679px]">
          <div class="flex items-center border border-primary p-1 rounded-md">
            <input type="text" class="outline-none text-base flex-1 placeholder:text-gray75" placeholder="Tìm kiếm...." />
            <button class="bg-primary text-white py-[5px] px-3 rounded-lg hover:bg-primaryHover transition-all">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>
            </button>
          </div>
        </form>
        <!-- Header nav -->
        <div class="flex items-center gap-7">
          <a href="carts.php" class="flex flex-col items-center gap-1 text-xs hover:text-primaryHover font-medium transition-all uppercase">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
            </span>
            <span>Giỏ hàng</span>
          </a>

          <a class="flex flex-col items-center gap-1 text-xs hover:text-primaryHover font-medium transition-all uppercase">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
            </span>
            <span>Liên hệ</span>
          </a>

          <a class="flex flex-col items-center gap-1 text-xs hover:text-primaryHover font-medium transition-all uppercase" href="signin.php">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </span>
            <span>Đăng nhập</span>
          </a>
        </div>
      </div>
    </div>
  </setion>

  <!-- Header Navigation -->
  <section class="header-nav flex items-center justify-center bg-graydb px-[15px] py-[20px]">
    <nav>
      <ul class="flex items-center gap-14">
        <li>
          <a href="index.php" class="uppercase font-semibold nav-active relative">Trang Chủ</a>
        </li>
        <li>
          <a href="#" class="uppercase font-semibold relative">Về chúng tôi</a>
        </li>
        <li>
          <a href="#" class="uppercase font-semibold relative">Tin tức</a>
        </li>
        <li>
          <a href="#" class="uppercase font-semibold relative">Chính sách vận chuyển</a>
        </li>
        <li>
          <a href="#" class="uppercase font-semibold relative">Chính sách bảo hành</a>
        </li>
      </ul>
    </nav>
  </section>
</header>