<?php
/* Updates an active session. Acts as a refresh. */
require_once "../contrib/lib.php";
require_once "../contrib/api_request.php";

set_headers();

$json_data = file_get_contents('php://input');
$data = json_decode($json_data);

if (isset($data->user_id) && force_logout($data->user_id)) {
    force_logout_response();
    exit();
}

$result = fetch("sessions/{$data->payload->session_id}", "PATCH");
echo $result;
?>