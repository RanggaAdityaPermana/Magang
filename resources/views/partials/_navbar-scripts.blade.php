<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const profilDropdown = document.getElementById('profil-dropdown');
        const profilDropdownMenu = document.getElementById('profil-dropdown-menu');
        if (profilDropdown && profilDropdownMenu && !profilDropdown.contains(event.target)) {
            profilDropdownMenu.classList.remove('show');
        }
        
        const layananDropdown = document.getElementById('layanan-dropdown');
        const layananDropdownMenu = document.getElementById('layanan-dropdown-menu');
        if (layananDropdown && layananDropdownMenu && !layananDropdown.contains(event.target)) {
            layananDropdownMenu.classList.remove('show');
        }
        
        const informasiDropdown = document.getElementById('informasi-dropdown');
        const informasiDropdownMenu = document.getElementById('informasi-dropdown-menu');
        if (informasiDropdown && informasiDropdownMenu && !informasiDropdown.contains(event.target)) {
            informasiDropdownMenu.classList.remove('show');
        }
        
        const contactDropdown = document.getElementById('contact-dropdown');
        const contactDropdownMenu = document.getElementById('contact-dropdown-menu');
        if (contactDropdown && contactDropdownMenu && !contactDropdown.contains(event.target)) {
            contactDropdownMenu.classList.remove('show');
        }
    });
</script>
