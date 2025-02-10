use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('alur-kerja-sama', [PageController::class, 'alurKerjaSama'])->name('alur-kerja-sama');
Route::get('daftar-program', [PageController::class, 'daftarProgram'])->name('daftar-program');

// Other routes can remain in the controller group if desired
Route::controller(PageController::class)->group(function (){
    Route::get('/', 'home')->name('home');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('layanan', 'layanan')->name('layanan');
    Route::get('galeri', 'galeri')->name('galeri');
    Route::get('benefit', 'benefit')->name('benefit');
    Route::get('tim-kami', 'timKami')->name('tim-kami');
    Route::get('testimoni', 'testimoni')->name('testimoni');
    Route::get('kontak', 'kontak')->name('kontak');
    Route::get('event', 'event')->name('event');
    Route::get('karir', 'karir')->name('karir');
});