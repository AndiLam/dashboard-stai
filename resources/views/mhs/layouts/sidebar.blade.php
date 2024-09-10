<nav class="bg-gray-800 text-white w-64 p-6">
    <div class="text-center mb-6">
        <img src="images/users.png" alt="Profile Picture" class="h-24 w-24 rounded-full mx-auto mb-2">
        <h3 class="text-lg font-bold">Andi Muhamad Nur Ilhami</h3>
        <p class="text-gray-400">1234567890</p>
    </div>
    <ul>
        <li><a href="{{ route('dashboard') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-home mr-3"></i> Home</a></li>
        <li><a href="{{ route('krs') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-file-alt mr-3"></i> KRS/Kartu Ujian</a></li>
        <li><a href="{{ route('khs') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-calendar mr-3"></i> Kartu Hasil Studi</a></li>
        <li><a href="{{ route('jadwal') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-book mr-3"></i> Jadwal Kuliah</a></li>
        <li><a href="{{ route('prs') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-pencil-alt mr-3"></i> Pengisian Rencana Studi</a></li>
        <li><a href="{{ route('status') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-chalkboard-teacher mr-3"></i> Status Aktif</a></li>
        <li><a href="{{ route('absensi') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-check-square mr-3"></i> Absensi</a></li>
        <li><a href="{{ route('transkrip') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-question-circle mr-3"></i> Transkrip</a></li>
        <li><a href="{{ route('keuangan') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-graduation-cap mr-3"></i> Keuangan</a></li>
        <li><a href="{{ route('perpustakaan') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-users mr-3"></i> Perpustakaan</a></li>
    </ul>
</nav>
