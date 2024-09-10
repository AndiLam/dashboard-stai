<header class="bg-green-600 text-white flex items-center justify-between p-4 sticky top-0 z-10 shadow-md">
    <button id="sidebarToggle" class="text-white text-xl">
        <i class="fas fa-bars"></i>
    </button>
    <div class="text-lg font-semibold">MY ACADEMIC</div>
    <div class="relative">
        <div class="flex items-center cursor-pointer" id="profileDropdownToggle">
            <img src="images/user.png" alt="User Profile" class="w-8 h-8 rounded-full mr-2">
            <span>Andi</span>
            <i class="fas fa-chevron-down ml-1"></i>
        </div>
        <div class="absolute right-1 mt-2 w-48 bg-white text-black rounded-lg shadow-lg hidden" id="profileDropdownMenu">
            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Lihat Profil</a>
            <a href="{{ route('mhs.loginMhs') }}" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</header>
