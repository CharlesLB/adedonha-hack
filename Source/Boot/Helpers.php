<?php

//
// ─── ROUTES ─────────────────────────────────────────────────────────────────────
//

function url( string $uri = null): string
{
    if ($uri){
        return ROOT . "/{$uri}";
    }

    return ROOT;
}

//
// ─── MESSAGE ────────────────────────────────────────────────────────────────────
//

function message(string $message, string $type): string
{
    return "<div class=\"message {$type}\">{$message}</div>";
}

//
// ─── WORDS TREATMENT ────────────────────────────────────────────────────────────
//

function verifyWords(array $words, string $letter){
    foreach ($words as $word){
        if( strpos($word,0,1) == $letter){
            return true;
        }
    }
    
    return false;
}