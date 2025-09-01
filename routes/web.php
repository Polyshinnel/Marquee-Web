<?php

use App\Http\Controllers\Pages\IndexPageController;
use App\Http\Controllers\Pages\MansonsKitchenController;
use App\Http\Controllers\TelegramController;
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

Route::get('/', IndexPageController::class)->name('index');
Route::get('/mesons', MansonsKitchenController::class)->name('mesons');

// Маршрут для отправки сообщений в Telegram
Route::post('/send-telegram-message', [TelegramController::class, 'sendMessage'])->name('send.telegram.message');

// Маршрут для отправки данных калькулятора в Telegram
Route::post('/send-calculator-message', [TelegramController::class, 'sendCalculatorMessage'])->name('send.calculator.message');

// Тестовый маршрут для проверки работы контроллера
Route::get('/test-telegram', function() {
    return response()->json([
        'message' => 'Telegram controller is working',
        'env_check' => [
            'token_exists' => !empty(env('TELEGRAM_BOT_TOKEN')),
            'chat_id_exists' => !empty(env('TELEGRAM_CHAT_ID'))
        ]
    ]);
});

// Тестовый маршрут для проверки работы калькулятора
Route::get('/test-calculator', function() {
    return response()->json([
        'message' => 'Calculator endpoint is working',
        'test_data' => [
            'name' => 'Test User',
            'phone' => '+971 50 123 4567',
            'contact_method' => 'phone',
            'kitchen_type' => 'corner',
            'area' => '30',
            'facade_type' => 'laminate',
            'source' => 'calculator'
        ]
    ]);
});