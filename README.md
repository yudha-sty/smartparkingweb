# Smart Parking Web

## Cara Upload perubahan project ke Github

1. git add .
2. git commit -m "pesan"
3. git push

## Cara install Vendor

1. composer install

## Generate Key Laravel .env

1. php artisan key:generate

## Other Docs (solo)

1. git commit -m "message" memberi komentar
2. git branch -M main masukkan di repo main/master
3. git remote add origin (url tujuan git) masukkan url tujuan aplikasi ingin upload di repository yang diinginkan
4. git remote rm origin (Hapus tujuan Repo) .

### Cara update repositori dari parent (https://github.com/sttindonesia/smartparkingweb)

Saat seorang developer melakukan Pull Request (PR) kemudian disetujui oleh Maintainer, tidak secara otomatis repo developer lain terupdate. Oleh karena itu masing-masing perlu untuk menyinkronkan dengan parent repo. Caranya adalah sebagai berikut :

1. git remote add upstream https://github.com/sttindonesia/smartparkingweb.git
2. git fetch upstream
3. git rebase upstream/main
4. git push origin main --force
5. git pull

Catatan:

1. langkah ke satu cukup sekali dilakukan.
2. kalau `main` tidak jalan ganti pakai `master`.
3. LAKUKAN LANGKAH INI SETIAP KALI MAU MENGERJAKAN PROJECT SUPAYA TIDAK CONFLICT SAAT MERGE.
