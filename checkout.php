<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OApxwFVfulaREbZtJlF4hOUUIDbx5BmOpkL9zi8XVM8drD3VcVJ4oI8tpdKGWhQ1ZB3WKhP9kD3WQSe5SBWWjza00UmkAOmPG";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "cancel_url" => "http://localhost/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 100,
                "product_data" => [
                    "name" => "Recipe"
                ]
            ]
        ]        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);