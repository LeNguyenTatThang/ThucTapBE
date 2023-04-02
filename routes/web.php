<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('signin');
});

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});
Route::get('/404.blade.php', function () {
    return view('404');
});


// dang nhap
Route::get('/signin.blade.php', function () {
    return view('signin');
});


// dang ky
Route::get('/signup.blade.php', function () {
    return view('signup');
});



Route::get('/QuanLyKhachHang.blade.php', function () {
    $khachhang = DB::table('khachhang')->get();
    return view('QuanLyKhachHang',['khachhang'=>$khachhang]);
});
Route::get('/QuanLyNhanVien.blade.php', function () {
    $nhanvien = DB::table('nhanvien')->get();
    return view('QuanLyNhanVien',['nhanvien'=>$nhanvien]);
});
Route::get('/batdongsan.blade.php', function () {
    $batdongsan = DB::table('batdongsan')->get();
    return view('batdongsan',['batdongsan'=>$batdongsan]);
});
Route::get('/addProduct.blade.php', function () {
    
    return view('addProduct');
});
Route::get('/quanlykygui.blade.php', function () {
    $hopdongkygui = DB::table('hopdongkygui')->get();
    return view('quanlykygui',['hopdongkygui'=>$hopdongkygui]);
});
Route::get('/qlhopdongchuyennhuong.blade.php', function () {
    $hopdongchuyennhuong = DB::table('hopdongchuyennhuong')->get();
    return view('qlhopdongchuyennhuong',['hopdongchuyennhuong'=>$hopdongchuyennhuong]);
});
Route::get('/qldatcoc.blade.php', function () {
    $hopdongdatcoc = DB::table('hopdongdatcoc')->get();
    return view('qldatcoc',['hopdongdatcoc'=>$hopdongdatcoc]);
});
