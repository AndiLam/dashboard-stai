document.addEventListener('DOMContentLoaded', function() {
    // Toggle Sidebar
    const sidebar = document.querySelector('.sidebar');
    const toggleButton = document.getElementById('sidebarToggle');
    if (toggleButton) {
        toggleButton.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
        });
    }

    // Profile Dropdown
    const profileToggle = document.getElementById('profileDropdownToggle');
    const profileMenu = document.getElementById('profileDropdownMenu');
    if (profileToggle && profileMenu) {
        profileToggle.addEventListener('click', function() {
            profileMenu.classList.toggle('hidden'); // Use 'hidden' class to toggle visibility
            this.querySelector('i').classList.toggle('rotate');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!profileToggle.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden'); // Ensure the menu is hidden
            }
        });
    }
});
