## Install and Setup Laravel Project

Berikut adalah langkah-langkah:

1. Melakukan git clone Laravel Project
Untuk melakukan clone dengan menggunakan perintah berikut :

git clone https://github.com/SefiaAnggraeni/projekbps.git

2. Masuk ke Laravel Project
Sebelum melakukan konfigurasi masuk ke dalam direktori project terlebih dahulu :

cd projekbps
3. Instalasi composer
Melakukan instalasi yang dibutuhkan dalam project laravel dengan menggunakan composer :

composer install

4. Salin .env.example
Menyalin file .env.example dan simpan dengan nama .env yang nantinya akan digunakan sebagai file konfigurasi database dan hal yang lainnya.

Jika Menggunakan git_bash/linux

cp .env.example .env
Jika Menggunakan command prompt pada windows

copy .env.example .env
5. Konfigurasi Database
Melakukan konfigurasi pada file .env tepatnya pada baris berikut :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT= [Port MySQL]
DB_DATABASE= db_projekbps
DB_USERNAME= [Database User]
DB_PASSWORD= [Database Password]
Untuk DB_PORT, DB_USERNAME, dan DB_PASSWORD sesuaikan dengan settingan user masing-masing

6. Generate encryption key
Melakukan generate key untuk project laravel

php artisan key:generate
7. Melakukan migrate
Melakukan migrateuntuk membuat skema database yang sudah dibuat.

php artisan migrate
8. Menjalankan seeder (Opsional)
Menjalankan file seeder untuk melakukan pengisian data yang telah dibuat pada project ini.

php artisan db:seed
9. Run Project Laravel
Menjalankan project laravel dengan perintah :

php artisan serve
