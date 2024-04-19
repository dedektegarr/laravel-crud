
## Cara Install

Silahkan download code diatas dengan cara git clone atau download file zip
(Bagi yang menggunakan file zip silahkan ekstrak projek ke direktori yang sudah ditentukan)

- Buka projek melalui visual studio code, buka terminal dan jalankan perintah dibawah ini satu persatu.
- composer install (jika tidak bisa coba jalankan composer update).
- copy .env.example .env (jika tidak bisa coba jalankan cp .env.example .env)
- Ubah konfigurasi pada file .env sesuaikan dengan database kalian
- php artisan key:generate
- php artisan migrate --seed
- php artisan serve
