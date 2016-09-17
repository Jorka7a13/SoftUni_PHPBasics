<?php

foreach (getSundays(2014, 8) as $sunday) {
    echo $sunday->format("jS F, Y\n");
}

function getSundays($year, $month)
{
    $endMonth = $month + 1;

    return new DatePeriod(
        new DateTime("first sunday of $year-$month"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("first day of $year-$endMonth")
    );
}
?>