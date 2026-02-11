<?php
// Admin panel for ID card requests

// Mock data for ID card requests
$idCardRequests = [
    ['id' => 1, 'name' => 'John Doe', 'status' => 'Pending'],
    ['id' => 2, 'name' => 'Jane Smith', 'status' => 'Approved'],
    ['id' => 3, 'name' => 'Alice Johnson', 'status' => 'Rejected'],
];

function displayRequests($requests) {
    echo '<h1>ID Card Requests</h1>';
    echo '<table border="1"><tr><th>ID</th><th>Name</th><th>Status</th></tr>';
    foreach ($requests as $request) {
        echo '<tr>';
        echo '<td>' . $request['id'] . '</td>';
        echo '<td>' . $request['name'] . '</td>';
        echo '<td>' . $request['status'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

displayRequests($idCardRequests);
?>
