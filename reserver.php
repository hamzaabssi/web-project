<?php
include 'db_connect.php'; // Ensure database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $space_id = $_POST['space_id'] ?? null;
    $name = $_POST['name'] ?? null;
    $surname = $_POST['surname'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $days = $_POST['days'] ?? null;

    // Check if all required fields are filled
    if (!empty($space_id) && !empty($name) && !empty($surname) && !empty($phone) && !empty($days)) {

        // Secure SQL query with prepared statement
        $stmt = $conn->prepare("INSERT INTO reservations (coworking_space_id, name, surname, phone, days) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi", $space_id, $name, $surname, $phone, $days);

        if ($stmt->execute()) {
            // Update coworking space status
            $updateQuery = "UPDATE coworking_spaces SET status='Réservé' WHERE id=$space_id";
            $conn->query($updateQuery);

            // Redirect to payment page
            header("Location: payment.php");
            exit();
        } else {
            echo "Erreur lors de la réservation: " . $conn->error;
        }

        $stmt->close(); // Close the prepared statement

    } else {
        echo "Erreur: Tous les champs sont obligatoires.";
    }
}

$space_id = $_GET['space_id'] ?? ''; // Get space ID from URL if exists
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réservation</title>
    <link rel="stylesheet" href="reserver.css">

</head>
<body>
    <form method="POST">
        <input type="hidden" name="space_id" value="<?= $space_id ?>">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="text" name="surname" placeholder="Prénom" required>
        <input type="text" name="phone" placeholder="Téléphone" required>
        <input type="number" name="days" placeholder="Nombre de jours" required>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
