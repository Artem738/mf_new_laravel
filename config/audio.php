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
        'google' => [
            'key' => env('GOOGLE_TTS_API_KEY'),
            'voices' => [
                'en-US-Neural2-F', // English Female (Requested by user)
                'en-US-Neural2-J', // English Male
                'en-US-Neural2-H', // English Female
                'en-US-Neural2-I', // English Male
                
                // German
                'de-DE-Neural2-F', // Female
                'de-DE-Neural2-B', // Male
                
                // French
                'fr-FR-Neural2-A', // Female
                'fr-FR-Neural2-B', // Male
                
                // Spanish
                'es-ES-Neural2-A', // Female
                'es-ES-Neural2-B', // Male
            ],
            'default_voice' => 'en-US-Neural2-J',
        ],
    ],
];
