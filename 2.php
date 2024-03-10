<?php
header("Access-Control-Allow-Origin: *");
// Check if the request method is PATCH
if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    // Get the PATCH request body
    $boolVar1 = true;
    // Process the PATCH request
    // For example, update a resource based on the received data
    // This is just a placeholder, you should implement your own logic here
    if ($boolVar1) {
        // Update the resource with the new name
        // This is just an example, you should adjust it to your needs
        header('Flag: BypassCTF(I_ll_try_rot32_twice)' );
    } else {
        // If 'name' key is not present in the PATCH request body
        http_response_code(400);
        echo "Bad Request: 'name' field is required in the PATCH request body";
    }

    // No need to output anything else, as a PATCH request does not expect a body
    exit();
}
else if ($_SERVER['REQUEST_METHOD'] === 'HEAD') {
    // Perform any necessary actions for a HEAD request
    // For example, you might set headers without sending a body
    header('Content-Type: text/html');
    header('X-Response: You are hacked!!!');
    
    // No need to output anything else, as a HEAD request does not expect a body
    exit();
}
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // For a regular GET request, you might output a full HTML page
    // This is just an example, you should adjust it to your needs
    echo json_encode(array("color" => "green"));
    exit();
}
else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // For a regular GET request, you might output a full HTML page
    // This is just an example, you should adjust it to your needs
    echo json_encode(array("color" => "yellow"));
    exit();
}

// For other request methods (e.g., GET), you might output a different response
// This is just an example, you should adjust it to your needs
http_response_code(405);
echo "Patch Up Yaar!";