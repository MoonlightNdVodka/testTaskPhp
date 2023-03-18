<?php
function stringFixer($input): string
{
    $string = str_replace(['_', '-', ' '], '', mb_convert_case($input, MB_CASE_TITLE));
    return ucfirst($string);
}

echo(stringFixer('               Быстрая коричневая_лиса  перепрыгивает через ленивую собаку            '));
echo PHP_EOL;
echo(stringFixer('               The quick-brown_fox jumps over the_lazy-dog       '));