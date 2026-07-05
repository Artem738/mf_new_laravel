<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Audio Provider
    |--------------------------------------------------------------------------
    |
    | This option controls the default audio TTS provider that will be used.
    |
    */
    'default' => env('AUDIO_PROVIDER', 'openai'),

    /*
    |--------------------------------------------------------------------------
    | Available Providers & Voices
    |--------------------------------------------------------------------------
    |
    | Define the settings for each provider, including the available voices
    | which can be chosen randomly or specified by the client.
    |
    */
    'providers' => [
        'openai' => [
            'key' => env('OPENAI_API_KEY'),
            'model' => env('OPENAI_TTS_MODEL', 'tts-1'), // tts-1 or tts-1-hd
            'voices' => [
                'alloy',
                'echo',
                'fable',
                'onyx',
                'nova',
                'shimmer',
            ],
            'default_voice' => 'alloy',
        ],
    ],
];
