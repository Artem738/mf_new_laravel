<?php

namespace App\Services\Audio\Contracts;

interface SpeechToTextProviderInterface
{
    /**
     * Transcribes an audio file into text.
     *
     * @param string $audioFilePath Absolute path to the audio file.
     * @param string $language Optional language code hint (e.g. 'en').
     * @return string Transcribed text.
     */
    public function transcribe(string $audioFilePath, string $language = 'en', ?string $originalName = null): string;
}
