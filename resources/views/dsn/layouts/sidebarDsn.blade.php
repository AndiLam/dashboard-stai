<nav class="bg-gray-800 text-white w-64 p-6">
    <div class="text-center mb-6">
        <img src="images/users.png" alt="Profile Picture" class="h-24 w-24 rounded-full mx-auto mb-2">
        <h3>Dr. Budi Santoso</h3>
        <p>1234567890</p>
    </div>
    <ul>
        <li><a href="{{ route('dashboardDsn') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="{{ route('jadwalKls') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-file-alt"></i> Jadwal Kelas</a></li>
        <li><a href="{{ route('absen') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-calendar"></i> Absensi</a></li>
        <li><a href="{{ route('isiNilai') }}" class="flex items-center py-2 px-4 hover:bg-green-700 rounded-md"><i class="fas fa-pencil-alt"></i> Pengisian Nilai</a></li>
    </ul>
</nav>
