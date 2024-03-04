<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use App\Mocks\Payments\AlphaPaymentApiMock;
use App\Mocks\Payments\SberPaymentApiMock;

class WebhookController extends Controller
{
    /**
     * Реализовать уведомления о ревью и деплойментах для команды разработки из Gitlab в Telegram (команда скоро планирует перейти в Slack).
     * - Произошел успешный деплой в прод - уведомление всей команде
     * - Кто-то написал комментарий к моему MR, отправить мне уведомление
     * - MR получил 2 аппрува - отправить разработчику уведомление о переносе задачи в QA
     */
}
