<?php

return [
    'screens' => [
        'main' => [
            'text' => "<b>Welcome to Mindflasher!</b> 🚀\n\nThe most advanced spaced repetition learning system based on the Leitner method. Build your knowledge systematically and permanently.\n\nWhat would you like to explore?",
        ],
        'leitner' => [
            'text' => "<b>Spaced Repetition System (SRS) in Mindflasher</b> 🧠\n\nThe application utilizes a modern, adaptive Spaced Repetition System (based on the SM-2 algorithm). Instead of rigid fixed boxes, repetition intervals for each card are calculated dynamically to match your memory.\n\nEach card has its own <b>Ease Factor</b>. The easier it is for you to recall the answer, the faster this factor grows and the less frequently you will see that card.\n\n<b>3 review outcomes:</b>\n❌ <b>Bad (Mistake / Red):</b>\nThe repetition interval is reset to 0 days. The card returns to the learning phase and will be shown again <b>immediately</b>, while its ease factor decreases.\n\n🟡 <b>Medium (Almost correct / Yellow):</b>\nThe Ease Factor remains unchanged. The interval increases moderately: 1 day for a new card, and multiplied by <b>1.5</b> for a previously studied card.\n\n✅ <b>Good (Correct / Green):</b>\nThe Ease Factor increases. The interval increases faster: 3 days for a new card, and multiplied by the current <b>Ease Factor</b> (ranging from 1.3 to 3.0) for a previously studied card.\n\nThis ensures the algorithm automatically filters out well-known words and keeps you focused only on the material you actually struggle with, successfully shifting knowledge into long-term memory.\n\n📖 <a href=\"https://en.wikipedia.org/wiki/Leitner_system\">Read more about the Leitner method on Wikipedia</a>",
        ],
        'hands_free' => [
            'text' => "<b>Hands-Free Mode</b> 🎙️\n\nMindflasher supports an advanced voice-controlled mode. You can learn while walking, driving, or cooking—no hands required! The AI listens to your answers and evaluates them automatically.",
        ],
    ],
    'buttons' => [
        'launch' => '🚀 Launch Mindflasher',
        'leitner' => '🧠 How it works (Leitner)',
        'hands_free' => '🎙️ Hands-Free Mode',
        'back' => '🔙 Back',
    ]
];
