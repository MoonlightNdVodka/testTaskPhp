<?php
function birthdayCountdown($date): int
{
    $currDate = time();
    $date = date_parse($date);
    return (mktime(0, 0, 0, $date["month"], $date["day"], $date["year"]) - $currDate) / 86400;
}

echo birthdayCountdown('13-06-2023');



