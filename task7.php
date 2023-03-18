<?php
function validator($input): string
{
    $response = filter_var($input, FILTER_VALIDATE_URL);

    if ($response == true) {
        return "OK";
    } else {
        return "Not a valid URL";
    }
}

echo(validator('https://innowise.com/'));
echo PHP_EOL;
echo(validator('https://innowise,com/'));