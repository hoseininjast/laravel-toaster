<?php
return [
    'alwaysLoadJS' => env('TOASTER_ALWAYS_LOAD_JS', false),
    'neverLoadJS' => env('TOASTER_NEVER_LOAD_JS', false),
    'timer' => env('TOASTER_TIMER', 5000),
    'width' => env('TOASTER_WIDTH', '32rem'),
    'height_auto' => env('TOASTER_HEIGHT_AUTO', true),
    'padding' => env('TOASTER_PADDING', '1.25rem'),
    'animation' => [
        'enable' => env('TOASTER_ANIMATION_ENABLE', false),
    ],
    'animatecss' => env('TOASTER_ANIMATECSS', 'https://cdn.jsdelivr.net/npm/animate.css'),
    'show_confirm_button' => env('TOASTER_CONFIRM_BUTTON', true),
    'show_close_button' => env('TOASTER_CLOSE_BUTTON', false),
    'toast_position' => env('TOASTER_TOAST_POSITION', 'top-end'),

];
