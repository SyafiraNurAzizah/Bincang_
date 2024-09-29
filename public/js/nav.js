// Fungsi untuk menangani pencarian
function searchFunction() {
    var query = document.getElementById("search-submit").value;
    if (query.trim() !== '') {
        alert('Mencari: ' + query);
        // Lakukan tindakan pencarian atau pengalihan ke halaman pencarian
        // Contoh: window.location.href = 'https://example.com/search?q=' + encodeURIComponent(query);
    }
    // Tidak melakukan apa pun jika search bar kosong
}

// Fungsi untuk menghapus isi search bar
function clearSearch() {
    var searchInput = document.getElementById("search-submit");
    searchInput.value = '';
    searchInput.focus();
}

// Menambahkan event listener untuk menekan Enter di input pencarian
var input = document.getElementById("search-submit");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        searchFunction(); // Panggil fungsi pencarian saat Enter ditekan
    }
});

// Menambahkan event listener untuk mengklik tombol pencarian
var searchButton = document.querySelector('.search-button');
searchButton.addEventListener('click', function() {
    var query = document.getElementById("search-submit").value;
    if (query.trim() !== '') {
        searchFunction(); // Panggil fungsi pencarian jika input tidak kosong
    }
    // Tidak melakukan apa pun jika search bar kosong
});

// Menambahkan dan menghapus kelas 'focused' saat input pencarian fokus atau blur
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-submit');
    const searchContainer = document.querySelector('.search-container');
    const clearButton = document.querySelector('.clear-button');

    searchInput.addEventListener('focus', function() {
        searchContainer.classList.add('focused');
        // Tunggu sampai transisi selesai, lalu tambahkan kelas transition-complete
        setTimeout(() => {
            searchContainer.classList.add('transition-complete');
            clearButton.style.opacity = 1; // Mengatur opacity langsung pada elemen
        }, 700); // Durasi sesuai dengan transisi input:focus di CSS
    });

    searchInput.addEventListener('blur', function(event) {
        // Cek apakah elemen yang terkait dengan event blur adalah tombol clear atau tombol pencarian
        if (!clearButton.contains(event.relatedTarget) && !searchButton.contains(event.relatedTarget)) {
            searchContainer.classList.remove('focused', 'transition-complete');
            clearButton.style.opacity = 0; // Reset opacity saat blur
        }
    });

    // Mencegah blur saat tombol clear diklik
    clearButton.addEventListener('mousedown', function(event) {
        event.preventDefault();
        clearSearch(); // Panggil fungsi untuk menghapus isi search bar saat clear button diklik
    });

    // Mencegah blur saat tombol pencarian diklik
    searchButton.addEventListener('mousedown', function(event) {
        event.preventDefault();
        var query = searchInput.value;
        if (query.trim() !== '') {
            searchInput.focus(); // Fokus kembali pada input search saat tombol pencarian diklik
        }
        // Tidak melakukan apa pun jika search bar kosong
    });
});



// ===================================== M E N U   A C T I V E ================================ //
document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu a');

    // Ambil path saat ini
    const currentPath = window.location.pathname.split('/').pop();
    console.log('Current Path:', currentPath); // Menampilkan path saat ini

    menuItems.forEach(item => {
        const itemHref = item.getAttribute('href');
        const itemPath = itemHref === '#' ? itemHref : new URL(itemHref, window.location.origin).pathname.split('/').pop();

        console.log('Item Href:', itemHref); // Menampilkan href dari setiap item menu
        console.log('Item Path:', itemPath); // Menampilkan path item

        // Bandingkan path saat ini dengan href
        if (currentPath === itemPath || (currentPath === '' && itemPath === 'index')) {
            item.classList.add('active');
            console.log('Active Item:', itemPath); // Menampilkan item yang aktif
        } else {
            item.classList.remove('active'); // Pastikan kelas aktif dihapus dari item lain
        }
    });
});

// ============================================================================================= //
  