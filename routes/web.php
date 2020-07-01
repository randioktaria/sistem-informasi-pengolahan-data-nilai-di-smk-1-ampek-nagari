<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Administrator
Route::resource('/guru', 'Admin\GuruController')->middleware('admin');
Route::resource('/kelas', 'Admin\KelasController');
Route::resource('/mata-pelajaran', 'Admin\MapelController')->middleware('admin');
Route::resource('/ta', 'Admin\TaController')->middleware('admin');
Route::resource('/siswa', 'Admin\SiswaController')->middleware('admin');
Route::resource('/mata-pelajaran-kelas', 'Admin\MapelKelasController')->middleware('admin');
// End

// Guru

// Profil Guru
Route::get('/profil-guru', 'Guru\ProfilController@index');
Route::post('/profil-guru/create/photo', 'Guru\ProfilController@createFoto');

// Kelas Yang Diajar
Route::resource('/kelas-diajar', 'Guru\KelasController');

// Kelola Kompetansi Dasar
Route::get('/kompetensi-dasar/{kode_mapel}', 'Guru\KdController@index');
Route::post('/kompetensi-dasar/store', 'Guru\KdController@store');
Route::get('/kompetensi-dasar/{kode_kd}/edit', 'Guru\KdController@edit');
Route::put('/kompetensi-dasar/update/{kode_kd}', 'Guru\KdController@update');
Route::delete('/kompetensi-dasar/delete/{kode_kd}', 'Guru\KdController@destroy');

// Nilai
Route::get('/nilai/{kode_kelas}/{kode_mapel}', 'Guru\NilaiController@index');

// Kelola Nilai Pengetahuan 
Route::get('/nilai-pengetahuan/{nis}/{kode_kelas}/{kode_mapel}', 'Guru\NilaiPengetahuanController@index');
Route::get('/nilai-pengetahuan/{nis}/{kode_mapel}/{kode_ta}/create', 'Guru\NilaiPengetahuanController@create');
Route::post('/nilai-pengetahuan/store', 'Guru\NilaiPengetahuanController@store');

// Kelola Nilai Keterampilan
Route::get('/nilai-keterampilan/{nis}/{kode_kelas}/{kode_mapel}', 'Guru\NilaiKeterampilanController@index');
Route::get('/nilai-keterampilan/{nis}/{kode_mapel}/{kode_ta}/create', 'Guru\NilaiKeterampilanController@create');
Route::post('/nilai-keterampilan/store', 'Guru\NilaiKeterampilanController@store');

// kelola Nilai Sikap
Route::get('/nilai-sikap/{nis}/{kode_kelas}/{kode_mapel}', 'Guru\NilaiSikapController@index');
Route::get('/nilai-sikap/js/{nis}/{kode_mapel}/{kode_ta}/create', 'Guru\NilaiSikapController@create_jurnal_sikap');
Route::get('/nilai-sikap/pk/{nis}/{kode_mapel}/{kode_ta}/create', 'Guru\NilaiSikapController@create_penilaian_karakter');

// Jurnal Sikap
Route::post('/nilai-sikap/js/store', 'Guru\NilaiSikapController@store_jurnal_sikap');
Route::delete('/nilai-sikap/js/{id}', 'Guru\NilaiSikapController@delete_jurnal_sikap');

// Penilaian Karakter
Route::post('/nilai-sikap/pk/store', 'Guru\NilaiSikapController@store_penilaian_karakter');
Route::delete('/nilai-sikap/pk/{id}', 'Guru\NilaiSikapController@delete_penilaian_karakter');

// Post Pengumuman
Route::resource('/post', 'Guru\PostController');

Route::get('/laporan-nilai-siswa', 'Guru\LaporanController@nilaiSiswaPerKelas');
Route::get('/laporan-nilai-siswa-cetak', 'Guru\LaporanController@nilaiSiswaPerKelasPdf');
// End


// Siswa

// Profil Siswa
Route::get('/profil-siswa', 'Siswa\ProfilController@index');
Route::post('/profil-siswa/create/photo', 'Siswa\ProfilController@createFoto');

// Cek Nilai 
Route::get('/nilai-cek', 'Siswa\CekNilaiController@index');
Route::get('/nilai-cek/{kode_mapel}', 'Siswa\CekNilaiController@show');

// Laporan Nilai
Route::get('/laporan', 'Siswa\LaporanController@nilaiSiswa');
Route::get('/laporan/cetak', 'Siswa\LaporanController@nilaiSiswaPdf');
// End




