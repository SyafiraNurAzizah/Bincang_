document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.register a[href="signup.php"]').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah default action pindah halaman
        
        // Tambahkan kelas animasi untuk form dan circles
        document.getElementById('loginForm').classList.add('move-out-left');
        document.getElementById('circlesContainer').classList.add('move-in-right');
        
        // Simulasikan delay sebelum redirect ke halaman signup
        setTimeout(function() {
            window.location.href = "signup.php";
        }, 1000); // Delay 1 detik agar animasi terlihat
    });
});
