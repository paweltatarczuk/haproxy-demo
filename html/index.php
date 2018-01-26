<?php

header('Content-Type: application/json');

sleep(rand(0, 5));

print json_encode([
  'client_ip' => $_SERVER['HTTP_X_FORWARDED_FOR'],
  'web_ip' => $_SERVER['SERVER_ADDR'],
  'php_ip' => gethostbyname(gethostname()),
], JSON_PRETTY_PRINT);
