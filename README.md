# PROJECT-4_HASLINABINTIAHMAD_230204622025
Project ini merupakan website portofolio pribadi yang dibangun menggunakan **Laravel**
Website ini terdiri dari halaman:
- Beranda (Home)
- Tentang Saya (About)
- Proyek (Projects)
- Kontak (Contact)
Semua halaman menggunakan controller tersendiri dan routing yang terstruktur.
1. Tujuan Pengembangan
   Tujuan project ini adalah:
1. Menerapkan arsitektur **MVC** Laravel secara benar.
2. Menggunakan **controller** untuk memisahkan logika bisnis dari tampilan.
3. Membuat routing yang rapih dan mudah dibaca.
4. Mengirim data dari controller ke view Blade.
5. Membangun website portofolio yang informatif dan mudah dikembangkan.
2. Analisis & Penjelasan
2.1 Penggunaan Controller
Setiap halaman memiliki controller khusus:
| Halaman       | Controller               | Fungsi Utama |
|---------------|--------------------------|--------------|
| Home          | HomeController           | Menampilkan beranda dan mengirim judul halaman |
| About         | AboutController          | Menampilkan informasi tentang diri |
| Projects      | ProjectController        | Menampilkan daftar proyek portofolio |
| Contact       | ContactController        | Menampilkan form kontak + menangani POST form |
menggunakan controller
- Memisahkan logika dari tampilan (good practice)
- File view tetap bersih dari proses
- Routing lebih jelas dan mudah dipahami
- Memudahkan pengembangan tambahan di masa depan
➡ **Menggunakan controller membuat project jauh lebih profesional dan sesuai standar industri.**
2.2 Routing (web.php)
Routing sudah dimodifikasi 

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
```
Analisis:
- Setiap route **mengarah ke controller**, bukan ke view langsung.
- Routing diberi **name()** agar mudah dipanggil di Blade.
- Form Contact memakai `POST` untuk keamanan.
2.3 Pengiriman Data dari Controller ke View
di HomeController:

```php
public function index()
{
    $title = "Welcome To My Portfolio";
    return view('home', compact('title'));
}
```
Analisis:
- Controller memproses data
- Controller mengirim data `$title` ke file `home.blade.php`
- Hal ini menunjukkan pemahaman konsep **data passing dari controller ke view**
2.4 Blade Template & Layout
File utama layout:
```
resources/views/layouts/app.blade.php
```

Layout ini digunakan oleh semua halaman dengan:

```php
@extends('layouts.app')
```

Analisis:
- Menggunakan layout mengurangi duplikasi kode
- Website lebih konsisten (header/footer seragam)
3. Fitur Website
1. **Home Page dengan background foto**
2. **About Page** berisi deskripsi singkat
3. **Projects Page** menampilkan daftar proyek portofolio
4. **Contact Page** dengan form kirim pesan
5. Menggunakan **TailwindCSS**
6. Template Blade yang bersih dan modular
7. Routing dan controller terorganisir rapi

Author
**Haslina Ahmad**     
