<?php

namespace gitflow;

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response('Oops', 400);
$response->send();
