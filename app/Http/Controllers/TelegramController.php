<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TelegramController extends Controller
{
    /**
     * Отправка сообщения в Telegram
     */
    public function sendMessage(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'date' => 'required|string|max:20',
                'time' => 'required|string|max:10',
            ]);

            $token = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');

            if (!$token || !$chatId) {
                return response()->json([
                    'success' => false,
                    'message' => 'Telegram configuration error'
                ], 500);
            }

            $message = $this->formatMessage($request->all());
            $url = "https://api.telegram.org/bot{$token}/sendMessage";

            $data = [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200 && $response) {
                $result = json_decode($response, true);
                if ($result && isset($result['ok']) && $result['ok']) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Message sent successfully!'
                    ]);
                }
            }

            return response()->json([
                'success' => false,
                'message' => 'Ошибка при отправке сообщения'
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Отправка данных калькулятора в Telegram
     */
    public function sendCalculatorMessage(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'contact_method' => 'required|string|max:20',
                'kitchen_type' => 'required|string|max:50',
                'area' => 'required|string|max:20',
                'facade_type' => 'required|string|max:50',
                'source' => 'required|string|max:20',
            ]);

            $token = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');

            if (!$token || !$chatId) {
                return response()->json([
                    'success' => false,
                    'message' => 'Telegram configuration error'
                ], 500);
            }

            $message = $this->formatCalculatorMessage($request->all());
            $url = "https://api.telegram.org/bot{$token}/sendMessage";

            $data = [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200 && $response) {
                $result = json_decode($response, true);
                if ($result && isset($result['ok']) && $result['ok']) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Calculator request sent successfully!'
                    ]);
                }
            }

            return response()->json([
                'success' => false,
                'message' => 'Ошибка при отправке запроса калькулятора'
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Форматирование сообщения для Telegram
     */
    private function formatMessage(array $data): string
    {
        return "📞 <b>Новая заявка на обратный звонок</b>\n\n" .
               "👤 <b>Имя:</b> " . htmlspecialchars($data['name']) . "\n" .
               "📱 <b>Телефон:</b> " . htmlspecialchars($data['phone']) . "\n" .
               "📅 <b>Дата звонка:</b> " . htmlspecialchars($data['date']) . "\n" .
               "⏰ <b>Время звонка:</b> " . htmlspecialchars($data['time']) . "\n\n" .
               "🕐 <i>Получено: " . now()->format('d.m.Y H:i:s') . "</i>";
    }

    /**
     * Форматирование сообщения калькулятора для Telegram
     */
    private function formatCalculatorMessage(array $data): string
    {
        // Маппинг значений для читаемого отображения
        $kitchenTypes = [
            'corner' => 'Corner',
            'peninsular' => 'Peninsular',
            'u-shaped' => 'U-shaped',
            'linear' => 'Linear',
            'island' => 'Island',
            'double-linear' => 'Double linear'
        ];

        $areas = [
            'up-to-20' => 'Up to 20 m²',
            '30' => '30 m²',
            '40' => '40 m²',
            '50-or-more' => '50 m² or more'
        ];

        $facadeTypes = [
            'laminate' => 'Laminate',
            'lacquer' => 'Lacquer',
            'veneer' => 'Veneer',
            'glass' => 'Glass',
            'tile' => 'Tile',
            'metal' => 'Metal'
        ];

        $contactMethods = [
            'phone' => 'Phone',
            'whatsapp' => 'WhatsApp',
            'telegram' => 'Telegram',
            'botim' => 'Botim'
        ];

        return "🧮 <b>Новая заявка через калькулятор</b>\n\n" .
               "👤 <b>Имя:</b> " . htmlspecialchars($data['name']) . "\n" .
               "📱 <b>Телефон:</b> " . htmlspecialchars($data['phone']) . "\n" .
               "💬 <b>Способ связи:</b> " . ($contactMethods[$data['contact_method']] ?? $data['contact_method']) . "\n\n" .
               "🏠 <b>Тип кухни:</b> " . ($kitchenTypes[$data['kitchen_type']] ?? $data['kitchen_type']) . "\n" .
               "📏 <b>Площадь:</b> " . ($areas[$data['area']] ?? $data['area']) . "\n" .
               "🎨 <b>Тип фасада:</b> " . ($facadeTypes[$data['facade_type']] ?? $data['facade_type']) . "\n\n" .
               "🕐 <i>Получено: " . now()->format('d.m.Y H:i:s') . "</i>";
    }
}
