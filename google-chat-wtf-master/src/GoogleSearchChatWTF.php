<?php
namespace ChatWTF;

use Orhanerday\OpenAi\OpenAi;

class GoogleSearchChatWTF extends ChatWTF
{
    public function __construct(
        protected OpenAi $open_ai_api,
    ) {
        $this->set_default_prompt( "\n\n" );

        $sample_questions = [
            new ChatWTFResponse(
                question: "What is modest fashion?",
                answer: "the modest fashion  or modest dressing refers to",
            ),
            new ChatWTFResponse(
                question: "What is halal finance?",
                answer: "Islamic finance, Islamic banking",
            ),
            new ChatWTFResponse(
                question: "What is halal food?",
                answer: "Halal is in Arabic word that translate",
            ),
        ];

        $this->set_sample_questions( $sample_questions );
    }
}
