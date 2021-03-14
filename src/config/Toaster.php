<?php
return [
    'alwaysLoadJS' => env('SWEET_ALERT_ALWAYS_LOAD_JS', false),
    'neverLoadJS' => env('SWEET_ALERT_NEVER_LOAD_JS', false),
    'timer' => env('SWEET_ALERT_TIMER', 5000),
    'width' => env('SWEET_ALERT_WIDTH', '32rem'),
    'height_auto' => env('SWEET_ALERT_HEIGHT_AUTO', true),
    'padding' => env('SWEET_ALERT_PADDING', '1.25rem'),
    'animation' => [
        'enable' => env('SWEET_ALERT_ANIMATION_ENABLE', false),
    ],
    'animatecss' => env('SWEET_ALERT_ANIMATECSS', 'https://cdn.jsdelivr.net/npm/animate.css'),
    'show_confirm_button' => env('SWEET_ALERT_CONFIRM_BUTTON', true),
    'show_close_button' => env('SWEET_ALERT_CLOSE_BUTTON', false),
    'toast_position' => env('SWEET_ALERT_TOAST_POSITION', 'top-end'),

];
