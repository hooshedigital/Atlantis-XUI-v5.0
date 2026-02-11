<?php
header("Content-Type: application/json");
echo json_encode([
    "status" => "ok",
    "version" => "5.0.0",
    "project" => "Atlantis-XUI"
]);
