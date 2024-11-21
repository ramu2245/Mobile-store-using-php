<?php
include_once('./stripe/stripe/init.php');

$publishableKey="pk_test_51QJqFWGC5LYnlyycxDZYOxtH7iIXgoNu2xYdqByhs1PPx1Bm3OGiWZH12Vsb2eM2aOAARRTV7o2zZIblgKQDR00G00HonrTz1S";

$secretKey="sk_test_51QJqFWGC5LYnlyycr3OlzUmLNkF4xLYl7tSqevDqGUaRy02c4r1XxBe12ZDKg7k3UcSNWwJjC8QrtBt94aHuCzot00QPhjtUvY";

\Stripe\Stripe::setApiKey($secretKey);
?>
