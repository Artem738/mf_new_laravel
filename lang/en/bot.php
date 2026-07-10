<?php

return [
    'screens' => [
        'main' => [
            'text' => "<b>Welcome to Mindflasher!</b> 🚀\n\nThe most advanced spaced repetition learning system based on the Leitner method. Build your knowledge systematically and permanently.\n\nWhat would you like to explore?",
        ],
        'leitner' => [
            'text' => "<b>The Leitner System</b> 🧠\n\nA spaced repetition method proposed by the German scientist Sebastian Leitner in 1972. It is based on managing flashcards across different boxes (levels) depending on how well you remember them.\n\n<b>How it works in Mindflasher:</b>\n📦 <b>Box 1:</b> Reviewed every day.\n📦 <b>Box 2:</b> Every 2 days.\n📦 <b>Box 3:</b> Every 5 days.\n📦 <b>Box 4:</b> Every 9 days.\n📦 <b>Box 5:</b> Every 14 days (after success here, the card is considered fully mastered).\n\n<b>Transition Rules:</b>\n✅ <b>Correct Answer:</b> The card moves to the next box and is shown less frequently.\n❌ <b>Mistake:</b> The card drops back to <b>Box 1</b> for relearning, regardless of which box it fell from.\n\nThis saves your time and focuses your effort only on difficult material, moving knowledge into your long-term memory.\n\n📖 <a href=\"https://en.wikipedia.org/wiki/Leitner_system\">Read more on Wikipedia</a>",
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
