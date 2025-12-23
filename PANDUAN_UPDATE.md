# Update Portofolio & Panduan Penggunaan

Halo! Saya telah melakukan perbaikan besar pada desain dan struktur website portofolio kamu. Sekarang tampilannya lebih modern, responsif, dan siap untuk digunakan.

## Apa yang Baru?

1.  **Desain Modern (Glassmorphism):**
    *   Tampilan kartu (cards) sekarang memiliki efek transparan dan blur yang keren (seperti kaca).
    *   Warna tema diperbarui menjadi kombinasi Hitam Elegan & Bisque (Krem).
    *   Animasi halus saat mengarahkan kursor (hover) ke tombol atau kartu.

2.  **Tanpa Backend (Static Site):**
    *   Website ini sekarang **100% Statis (HTML/CSS/JS)**.
    *   File PHP lama (`index.php`, `submit.php`, dll) sudah dipindahkan ke folder `legacy/` (bisa dihapus jika tidak butuh).
    *   Kamu bisa hosting gratis di **GitHub Pages**, **Vercel**, atau **Netlify**.

3.  **Form Kontak:**
    *   Menggunakan layanan **Formspree** agar kamu tetap bisa menerima pesan via email tanpa perlu server sendiri.

---

## Langkah Selanjutnya (Wajib Dilakukan)

Agar website ini berfungsi 100%, kamu perlu melakukan langkah-langkah berikut:

### 1. Mengaktifkan Form Kontak
Saat ini form kontak belum tersambung ke emailmu.
1.  Buka website [Formspree](https://formspree.io/).
2.  Daftar (Sign up) gratis.
3.  Buat form baru (New Form).
4.  Copy URL yang diberikan (contoh: `https://formspree.io/f/xvbdjdjd`).
5.  Buka file `index.html` di kodinganmu.
6.  Cari baris ini (sekitar baris 308):
    ```html
    <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
    ```
7.  Ganti `https://formspree.io/f/YOUR_FORM_ID` dengan URL Formspree milikmu.

### 2. Update Sertifikat
Saya sudah menyiapkan tempat untuk sertifikat barumu.
1.  Siapkan gambar sertifikat kamu (screenshot atau foto), simpan di folder `assets/`.
2.  Buka `index.html`.
3.  Cari bagian `<!-- Sertifikat Baru 1 -->` dan `<!-- Sertifikat Baru 2 -->`.
4.  Ganti `src="..."` dengan nama file gambar kamu.
5.  Ganti judul sertifikat sesuai keinginanmu.

### 3. Cara Mengganti Warna (Opsional)
Jika kamu bosan dengan warna "Bisque", kamu bisa menggantinya dengan mudah.
1.  Buka file `porto.css`.
2.  Di bagian paling atas, cari `:root`.
3.  Ubah kode warna pada `var(--primary-color)`.
    ```css
    :root {
        --primary-color: #ffe4c4; /* Ganti kode hex ini */
        /* ... */
    }
    ```

### 4. Upload ke GitHub
Setelah selesai edit, upload (push) semua perubahan ini ke repository GitHub kamu.
Lalu aktifkan **GitHub Pages** di menu Settings repository untuk melihat websitemu online!

Selamat mencoba dan semoga sukses dengan portofolionya!
