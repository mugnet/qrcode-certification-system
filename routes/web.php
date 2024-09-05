<?php

use App\Livewire\Forms\Beneficiary;
use App\Livewire\Lists\Beneficiaries;
use App\Livewire\Reports\CertificationView;
use App\Models\Certification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['register'=>false]);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/beneficiaries', Beneficiaries::class)->name('beneficiary.index');
    Route::get('/beneficiary/create', Beneficiary::class)->name('beneficiary.create');
});

Route::get('/certification/{name}/{uid}', CertificationView::class)->name('certification.show');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});