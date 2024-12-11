<?php
// Database configuration
$servername = "localhost"; // Change if necessary
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "orghub_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON input
// This code expects a JSON POST request with an 'org_name' field
// Example input: {"org_name": "organization_name_here"}
$data = json_decode(file_get_contents("follow.php"), true);
$org_name = $data['org_name'];

/**
 * Retrieves the user ID from the session or other authentication methods
 * @return int|null Returns user ID if authenticated, null otherwise
 */
function getUserId() {
    session_start();
    if (isset($_SESSION['user_id'])) {
        return $_SESSION['user_id'];
    }
    return null;
}

// Get user ID using the retrieval method
$user_id = getUserId();
if ($user_id === null) {
    echo json_encode(['success' => false, 'message' => 'User not authenticated']);
    exit;
}
// SQL query to insert the followed organization
$sql = "INSERT INTO followedorgs.html (user_id, org_name) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $org_name);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $stmt->error]);
}

// Close the statement and