<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Module Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور module — همهٔ کلیدهای مستندشده در `docs/03-engines/module.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/module.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('MODULE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('MODULE_PREFIX', 'module:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('MODULE_LOG_CHANNEL', 'module'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Module',
        'accessor' => 'modules',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];