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