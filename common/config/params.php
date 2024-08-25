<?php

$today = time();
$year_courses = date('Y', $today); //Рік, в якому курси відбуваються
$year_zamovlennya = $year_courses + 1; //Рік, на який курси замовляються


return [
    'adminEmail' => 'admin_dn@oippo.onmicrosoft.com',
    'supportEmail' => 'admin_dn@oippo.onmicrosoft.com',
    //'senderEmail' => 'noreply@example.com',

    'senderName' => 'КЗ СОІППО',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,

    'year_courses' => $year_courses,
    'year_zamovlennya' => $year_zamovlennya,
];
