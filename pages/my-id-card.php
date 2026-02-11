<?php

// Create ID card view and download page

// Fetch ID details from the database or any source
// Example Data (You should replace this with actual data fetching)
$id = "12345";
$name = "John Doe";
$dob = "1990-01-01";

// HTML structure for ID card
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
</head>
<body>
    <div style="border: 1px solid #000; width: 250px; padding: 10px;">
        <h2>ID Card</h2>
        <p><strong>ID:</strong> <?php echo $id; ?></p>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <button onclick="window.print()">Print</button>
    </div>
</body>
</html>
<?php

// Save the HTML to a file for download
if(isset($_POST['download'])) {
    $html = ob_get_clean();
    // You can save this HTML to a .html file and prompt it to download
    header('Content-Type: text/html; charset=utf-8');
    header('Content-Disposition: attachment; filename="id_card.html"');
    echo $html;
    exit;
}
?>