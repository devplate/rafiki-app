<?php
// database connection established

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editorData = $_POST['editor_data'];
    // Sanitize and validate $editorData if necessary
    
    // Insert the data into the database
    $sql = "INSERT INTO your_table_name (content_column) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$editorData]);

    // Optionally, you can redirect to a success page
    header("Location: success.php");
    exit();
}
?>
