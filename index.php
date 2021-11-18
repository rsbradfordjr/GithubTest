<?php

$ch = curl_init();

$headers = [
    "Authorization: token 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",
    //"User-Agent: daveh"
];

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "rsbradfordjr"
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
