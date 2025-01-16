<?php
use Illuminate\Support\Facades\Route;

#route du sg
Route::get('/dashboard_sg', function () {
    return view('layouts.sg.dashboard');
})->name('dashboard_sg');

Route::get('/dashboard_sg_tab', function () {
    return view('layouts.sg.tableau');
})->name(name: 'dashboard_sg_tab');

Route::get('/dashboard_sg_work', function () {
    return view('layouts.sg.workflow');
})->name(name: 'dashboard_sg_work');

Route::get('/dashboard_sg_compte', function () {
    return view('layouts.sg.compte');
})->name(name: 'dashboard_sg_compte');

#chemin du chargé d'étude

Route::get('/dashboard_ce', function () {
    return view('layouts.charge_etude.dashboard');
})->name('dashboard_ce');

Route::get('/dashboard_ce_tab', function () {
    return view('layouts.charge_etude.tableau');
})->name('dashboard_ce_tab');


#chemin assistante
# Chemin de l'assistante
Route::get('/dashboard_as', function () {
    return view('layouts.assistante.dashboard');
})->name('dashboard_as');

Route::get('/dashboard_as_tab', function () {
    return view('layouts.assistante.tab');
})->name('dashboard_as_tab');

Route::get('/dashboard_as_form', function () {
    return view('layouts.assistante.form');
})->name('dashboard_as_form');


# Chemin de la receptionniste
Route::get('/dashboard_rec', function () {
    return view('layouts.reception.dashboard');
})->name('dashboard_rec');

Route::get('/dashboard_rec_tab', function () {
    return view('layouts.reception.tab');
})->name('dashboard_rec_tab');

Route::get('/dashboard_rec_form', function () {
    return view('layouts.reception.form');
})->name('dashboard_rec_form');
