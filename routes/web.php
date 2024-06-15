<?php

use App\Livewire\ShowContacto;
use App\Livewire\ShowFAQ;
use App\Livewire\ShowHome;
use App\Livewire\ShowServico;
use App\Livewire\ShowServicos;
use App\Livewire\ShowSobre;
use App\Livewire\ShowTime;
use App\Models\Servico;
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
    $servicos = Servico::orderBy('nome', 'ASC')->get();

    return view('index', [
        'servicos' => $servicos
    ]);
});

// Route::get('/', ShowHome::class)->name('inicio');
// Route::get('/sobre', ShowSobre::class)->name('sobre');
// Route::get('/servicos', ShowServicos::class)->name('servicos');
// Route::get('/servico/{id}', ShowServico::class)->name('servico');
// Route::get('/time', ShowTime::class)->name('time');
// Route::get('/faq', ShowFAQ::class)->name('faq');
// Route::get('/contacto', ShowContacto::class)->name('contacto');
