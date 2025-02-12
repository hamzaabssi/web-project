<?php
include 'db_connect.php';

// Fetch places from the database
$placesQuery = "SELECT * FROM places";
$placesResult = $conn->query($placesQuery);

// Handle place selection
$coworkingSpaces = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['place'])) {
    $selectedPlace = $_POST['place'];

    // Fetch coworking spaces for the selected place
    $spacesQuery = "SELECT * FROM coworking_spaces WHERE place_id = $selectedPlace";
    $spacesResult = $conn->query($spacesQuery);

    if ($spacesResult) {
        while ($row = $spacesResult->fetch_assoc()) {
            $coworkingSpaces[] = $row;
        }
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="st_reservation.css">

    <style>
        .coworking-img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Réserver un espace de coworking</h2>

        <!-- Selection du lieu -->
        <form method="POST" class="text-center mt-4">
            <label for="place">Choisissez un quartier :</label>
            <select name="place" id="place" class="form-select w-50 mx-auto">
                <option value="">Sélectionnez un lieu</option>
                <?php while ($place = $placesResult->fetch_assoc()) { ?>
                    <option value="<?php echo $place['id']; ?>"><?php echo $place['name']; ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Voir les espaces</button>
        </form>

        <!-- Affichage des espaces de coworking -->
        <div class="row mt-5">
            <?php if (!empty($coworkingSpaces)) { ?>
                <?php foreach ($coworkingSpaces as $space) { ?>
                    <div class="col-md-4 text-center mb-4">
                        <img src="images/<?php echo $space['image']; ?>" class="coworking-img" alt="<?php echo $space['name']; ?>">
                        <h5><?php echo $space['name']; ?></h5>
                        <p class="text-<?php echo ($space['status'] == 'Disponible') ? 'success' : 'danger'; ?>">
                            <?php echo $space['status']; ?>
                        </p>
                        <?php if ($space['status'] == 'Disponible') { ?>
                            <a href="reserver.php?space_id=<?php echo $space['id']; ?>" class="btn btn-success">Réserver</a>
                        <?php } else { ?>
                            <button class="btn btn-secondary" disabled>Réservé</button>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p class="text-center mt-4">Sélectionnez un quartier pour voir les espaces disponibles.</p>
            <?php } ?>
        </div>
    </div>
</body>
</html>
