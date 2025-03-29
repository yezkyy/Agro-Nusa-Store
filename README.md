# AgroNusaStore

AgroNusaStore adalah sebuah website e-commerce yang dirancang untuk mempermudah pengguna dalam membeli produk-produk pertanian secara online. Website ini dibangun menggunakan framework Laravel yang modern dan powerful.

## Fitur
- **Manajemen Produk**: Tambah, edit, dan hapus produk.
- **Keranjang Belanja**: Fitur untuk menambahkan produk ke keranjang belanja.
- **Pembayaran**: Integrasi dengan metode pembayaran online.
- **Manajemen Pengguna**: Registrasi, login, dan pengelolaan akun pengguna.
- **Dashboard Admin**: Untuk mengelola data produk, pesanan, dan pengguna.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di mesin lokal Anda:

### Requirement
Pastikan Anda telah menginstal:
- PHP >= 8.0
- Composer
- MySQL
- Node.js dan npm

### Langkah Instalasi
1. Clone repository:
    ```bash
    git clone https://github.com/username/AgroNusaStore.git
    cd AgroNusaStore
    ```

2. Instal dependensi PHP menggunakan Composer:
    ```bash
    composer install
    ```

3. Instal dependensi frontend menggunakan npm:
    ```bash
    npm install
    ```

4. Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

5. Konfigurasi file `.env` sesuai dengan pengaturan database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```

6. Generate application key:
    ```bash
    php artisan key:generate
    ```

7. Migrasi database:
    ```bash
    php artisan migrate
    ```

8. Jalankan seeder untuk mengisi data awal:
    ```bash
    php artisan db:seed
    ```

9. Jalankan build frontend:
    ```bash
    npm run dev
    ```

10. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

11. Buka browser dan akses:
    ```
    http://127.0.0.1:8000
    ```

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau laporkan masalah melalui [Issues](https://github.com/username/AgroNusaStore/issues).

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).
