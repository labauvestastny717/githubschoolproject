<?php
// Define variables and constants
$username = "your_username";
$password = "your_password";

// Check if username and password are provided
if (!empty($username) && !empty($password)) {
    // Log in using curl
    $curl = curl_init("https://api.github.com/login/oauth/access_token");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "client_id=" . $username . "&client_secret=" . $password . "&grant_type=login_credentials");
    $response = curl_exec($curl);

    // Decode JSON response
    $decodedResponse = json_decode($response, true);

    if (isset($decodedResponse['access_token'])) {
        echo "Logged in as: " . $username . " with access token: " . $decodedResponse['access_token'];
    } else {
        echo "Failed to authenticate. Please check your credentials.";
    }
} else {
    // If no username or password provided, display error message
    echo "Please provide a username and password for authentication.";
}
