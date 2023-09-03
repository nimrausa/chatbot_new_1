<?php
namespace ChatWTF;

use Orhanerday\OpenAi\OpenAi;

class ProgrammerChatWTF extends ChatWTF
{
    public function __construct(
        protected OpenAi $open_ai_api,
    ) {
        $this->set_default_prompt( "Act as an AI mentor for a programmer by answering the questions provided.\n\n" );

        $sample_questions = [
            new ChatWTFResponse(
                question: "What is the Modest fashion in north America?",
                answer: "The modest fashion industry is projected to reach USD 122.73 billion by 2030, growing at a CAGR of 5.70% from 2023 to 2030\n.",
            ),
            new ChatWTFResponse(
                question: "What is Islamic Finance?",
                answer: "Islamic finance has emerged as an effective tool for financing development worldwide, including in non-Muslim countries.\n\n",
            ),
        ];

        $this->set_sample_questions( $sample_questions );
    }
}
