<h1>Bincang_</h1>

<br>

<p>Bincang_ adalah sebuah platform berbasis web yang memungkinkan pengguna untuk berdiskusi dan memberikan ulasan terhadap berbagai buku yang telah mereka baca. Bincang_ bertujuan untuk menjadi tempat komunitas berbagi wawasan, rekomendasi, dan perspektif tentang dunia literasi.</p>

<br>

<h3>Teknologi yang Digunakan</h3>
<p>Bincang_ dikembangkan menggunakan teknologi berikut:</p>
<ul>
    <li><b>Framework</b>: Laravel (PHP)</li>
    <li><b>Database</b>: MySQL</li>
    <li><b>Front-End</b>: HTML, CSS, Bootstrap</li>
    <li><b>Autentikasi</b>: Laravel Authentication</li>
    <li><b>Penyimpanan Gambar</b>: Laravel Storage</li>
</ul>

<br>

<h3>Fitur Utama</h3>
<ul>
    <li><b>Registrasi & Login Pengguna</b>: Pengguna dapat membuat akun dan masuk untuk memberikan ulasan.</li>
    <li><b>Manajemen Buku</b>: Pengguna dapat menambahkan buku baru ke dalam daftar.</li>
    <li><b>Review & Rating</b>: Pengguna dapat memberikan ulasan dan penilaian terhadap buku.</li>
    <li><b>Kategori & Genre Buku</b>: Buku dikategorikan berdasarkan genre untuk mempermudah pencarian.</li>
    <li><b>Komentar & Diskusi</b>: Fitur komentar untuk berdiskusi lebih lanjut mengenai suatu buku.</li>
    <li><b>Pencarian & Filter Buku</b>: Memudahkan pengguna menemukan buku berdasarkan judul, penulis, atau genre.</li>
    <li><b>Profil Pengguna</b>: Setiap pengguna memiliki halaman profil dengan daftar buku yang telah mereka ulas.</li>
</ul>

<br>

<h3>Instalasi</h3>
<p>Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:</p>
<i># Clone repositori ini</i>
<p><b>git clone https://github.com/SyafiraNurAzizah/Bincang_.git</b></p>
<i># Masuk ke direktori proyek</i>
<p><b>cd bincang_</b></p>
<i># Buat file konfigurasi .env berdasarkan .env.example</i>
<p><b>cp .env.example .env</b></p>
<i># Generate application key</i>
<p><b>php artisan key:generate</b></p>
<i># Jalankan migrasi database</i>
<p><b>php artisan migrate --seed</b></p>
<i># Jalankan server Laravel</i>
<p><b>php artisan serve</b></p>

<p>Akses website melalui http://127.0.0.1:8000.</p>
