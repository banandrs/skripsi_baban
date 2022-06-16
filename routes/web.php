<?php

// User Routes
Route::group(['namespace' => 'User'], function () {
	Route::get('/', 'HomeController@index')->name('user.home');
	Route::get('post/{post}', 'PostController@post')->name('post');

	Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::get('post/category/{category}', 'HomeController@category')->name('category');

	//vue routes
	Route::post('getPosts', 'PostController@getAllPosts');
	Route::post('saveLike', 'PostController@saveLike');

	//User
	Route::get('paket-foto', 'PaketController@index')->name('user.paket-foto');
	Route::get('paket-foto/{id}/booking', 'PaketController@create')->name('user.paket.create');
	Route::post('paket-foto/booking', 'PaketController@store')->name('user.paket.booking');
	Route::get('paket-foto/{id}/invoice', 'PaketController@show')->name('user.paket.invoice');

	Route::get('promo', 'PromoController@index');

	Route::get('galeri-foto', 'GaleriController@index')->name('user.galeri');

	Route::get('pendaftaran', 'PendaftaranController@index');

	Route::get('project', 'ProjectController@index');

	Route::get('tentang', 'TentangController@index')->name('user.tentang');

	Route::get('dashboard', 'DashboardController@index');

	Route::get('testimoni', 'TestimoniController@index')->name('user.testimoni');
	Route::post('testimoni/store', 'TestimoniController@store');

	Route::get('kontak', 'KontakController@index')->name('user.kontak');
});


//Admin Routes
Route::group(['namespace' => 'Admin'], function () {
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	// Deals Routes
	Route::get('admin/reservasi/export_excel', 'DealsController@exportExcel')->name('reservasi.export');
	Route::resource('admin/reservasi', 'DealsController');
	// Paket Foto Routes
	Route::resource('admin/paket', 'PaketController');
	// Galeri Foto Routes
	Route::resource('admin/galeri', 'GaleriController');
	// Jadwal Foto Routes
	Route::resource('admin/jadwal', 'JadwalController');
	// Mail Routes
	Route::resource('admin/mail', 'MailController');
	// Users Routes
	Route::get('admin/user/scan/{phone}', 'UserController@scan')->name('user.scan');
	Route::resource('admin/user', 'UserController');
	// Pelanggan Routes
	Route::resource('admin/pelanggan', 'PelangganController');
	// Promo Routes
	Route::resource('admin/promo', 'PromoController');
	Route::get('admin/{id}/kirim-email', 'PromoController@email')->name('admin.email');
	// Route::get('pengaduan/{id}/email','PengaduanController@email')->name('pengaduan.email');
	Route::resource('admin/kirim-wa', 'WAController');
	// Roles Routes
	Route::resource('admin/role', 'RoleController');
	// Aktivitas Routes
	Route::resource('admin/aktivitas', 'AktivitasController');
	// Contact Routes
	Route::resource('admin/kontak', 'KontakController');
	// Laporan Routes
	Route::resource('admin/laporan', 'LaporanController');
	// Progress Routes
	Route::resource('admin/progres', 'ProgressController');
	// Permission Routes
	Route::resource('admin/permission', 'PermissionController');
	Route::resource('admin/tag', 'TagController');
	// Post Routes
	Route::resource('admin/post', 'PostController');
	// Tag Routes
	Route::resource('admin/testimoni', 'TestimoniController');
	// Category Routes
	Route::resource('admin/category', 'CategoryController');
	// Admin Auth Routes
	Route::get('admin-log-in', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-log-in', 'Auth\LoginController@login');
	// Admin Log Activity
	Route::get('add-to-log', 'HomeController@myTestAddToLog');
	Route::get('logActivity', 'HomeController@logActivity');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
