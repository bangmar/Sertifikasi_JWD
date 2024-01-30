# README.md - Aplikasi Beasiswa

Aplikasi Beasiswa ini dikembangkan menggunakan Laravel dan memerlukan beberapa langkah untuk dijalankan dengan baik. Pastikan Anda telah mengikuti petunjuk di bawah ini untuk menyiapkan dan menjalankan aplikasi dengan benar.

## Menjalankan Aplikasi

1. Pastikan server Laravel berjalan dengan perintah:

    ```bash
    php artisan serve
    ```

2. Untuk menggunakan Tailwind CSS, jalankan perintah:

    ```bash
    npm run dev
    ```

    Pastikan Anda memiliki Node.js dan npm terinstal sebelum menjalankan perintah ini.

## Menggunakan Aplikasi

1. **Halaman Utama (Index)**: Akses halaman landing page dengan membuka browser dan pergi ke `http://localhost:8000`. Ini adalah halaman utama aplikasi Beasiswa.

2. **Halaman Pendaftaran (Create)**: Untuk mendaftar beasiswa, buka `http://localhost:8000/create`. Di sini, Anda dapat memasukkan semua data yang diperlukan. Jika terdapat kesalahan dalam pengisian data sesuai ketentuan, aplikasi akan menampilkan pesan error.

3. **Halaman Hasil (Result)**: Semua data yang dimasukkan ke database akan ditampilkan di halaman `http://localhost:8000/result`. Ini adalah tempat untuk melihat hasil pendaftaran beasiswa.

## Catatan

-   Pastikan semua dependensi Laravel telah diinstal dan konfigurasi database sudah benar sebelum menjalankan aplikasi.
-   Pastikan Anda menjalankan `npm run dev` setiap kali ada perubahan pada file CSS atau JavaScript untuk Tailwind CSS.
-   Harap sesuaikan panduan ini sesuai dengan kebutuhan dan konfigurasi spesifik proyek Anda.

Selamat menggunakan aplikasi Beasiswa! Jika Anda memiliki pertanyaan atau masalah, jangan ragu untuk menghubungi kami.
