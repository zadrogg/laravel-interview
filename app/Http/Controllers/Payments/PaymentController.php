<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Mocks\Payments\AlphaPaymentApiMock;
use App\Mocks\Payments\SberPaymentApiMock;

class PaymentController extends Controller
{
    /**
     * Реализовать АПИ метода для проведения платежа через 2 разных провайдера.
     *
     * Вводная:
     * - Пользователи пользуются мобильным приложением (интернет магазин)
     * - На странице товара, у них есть кнопка купить по нажатию на которую они видят 2 кнопки:
     *      * Купить через Сбербанк.
     *      * Купить через AlphaBank.
     * - Так же в дизайн предусмотрел пару итоговых страниц:
     *      * Успешная оплата
     *      * Ошибка платежа
     *      * Неизвестная ошибка, обратитесь в службу поддержки
     *
     * Что нужно сделать:
     * - Декомпозировать АПИ методы для реализации данного сценария
     * - Реализовать интеграцию с сервисами Сбербанк и AlphaBank
     *
     * Апи платежных провайдеров представлены в виде заглушек.
     * К заглушкам стоит относиться как к стороннему HTTP API, а так же как к документации.
     * @see AlphaPaymentApiMock
     * @see SberPaymentApiMock
     */
}
