<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TelegramControllerTest extends TestCase
{
    /**
     * Тест валидации данных формы
     */
    public function test_validation_requires_all_fields()
    {
        $response = $this->postJson('/send-telegram-message', []);

        $response->assertStatus(422)
                ->assertJsonValidationErrors(['name', 'phone', 'date', 'time']);
    }

    /**
     * Тест отправки сообщения с корректными данными
     */
    public function test_sends_message_with_valid_data()
    {
        $data = [
            'name' => 'Тест Пользователь',
            'phone' => '+971 50 123 4567',
            'date' => '2025-01-15',
            'time' => '14:30'
        ];

        $response = $this->postJson('/send-telegram-message', $data);

        // Проверяем, что запрос обрабатывается (может вернуть ошибку конфигурации, но не 422)
        $response->assertStatus(200);
        
        // Проверяем структуру ответа
        $response->assertJsonStructure([
            'success',
            'message'
        ]);
    }

    /**
     * Тест обработки некорректных данных
     */
    public function test_handles_invalid_data()
    {
        $data = [
            'name' => '', // Пустое имя
            'phone' => 'invalid-phone',
            'date' => 'invalid-date',
            'time' => 'invalid-time'
        ];

        $response = $this->postJson('/send-telegram-message', $data);

        $response->assertStatus(422);
    }
}
