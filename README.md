# Gits-MSIB4-Tugas6
Nama | Universitas
------------------- | --------------
Hesekiel Nainggolan | Institut Teknologi Sepuluh Nopember

## Deskripsi
* Tugas 6 pada program Studi Independent Fullstack Web Developer oleh partner GITS.id, MSIB Batch 4, membuat sebuah Content Management System (CMS)
* Menggunakan role admin, dalam proses CRUD

## Tampilan
* Home

![image](https://user-images.githubusercontent.com/94334247/229951242-66c3f377-b798-46de-9831-7fb524203a6f.png)

* Login

![image](https://user-images.githubusercontent.com/94334247/229951380-837aa066-d52d-4a3d-be4e-90b71d3a14a9.png)

* Register

![image](https://user-images.githubusercontent.com/94334247/229951445-1c3f9eef-4bfe-41db-9244-63623427d0a6.png)

* Products

![image](https://user-images.githubusercontent.com/94334247/229951643-6fc8f433-57be-491f-b307-39b93b14e3d1.png)

* Category

![image](https://user-images.githubusercontent.com/94334247/229951711-5142005e-c0d7-425d-a67d-7deb71dad365.png)

## Demo Aplikasi

https://user-images.githubusercontent.com/94334247/229985367-7d9972b0-7478-440e-9232-1f4580d164a3.mp4

## Cara Menggunakan
* Clone Repository Ini
```
git clone https://github.com/kielnaingggolan07/Gits-MSIB4-Tugas6.git
```
* Copy Paste file .env.example dan ubah namanya menjadi .env
```
cp .env.example .env
```
* Ubah nama database pada DB_Database sesuai dengan database di file .env dan  meng-cache konfigurasi Laravel setelah mengubah file .env
```
php artisan config:cache
```
* Generate kunci enkripsi Laravel
```
php artisan key:generate
```
* Install dependencies dengan Composer
```
composer install
```
* Migrasi database
```
php artisan migrate
```
* Jalankan server Laravel
```
php artisan serve
```
* Buka web browser dan akses http://127.0.0.1:8000/home

## Stack yang Digunakan
* Laravel 9
* CSS
* Bootstrap 5.2
* HTML
* Authentication manual

