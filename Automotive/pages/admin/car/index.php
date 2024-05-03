<?php

include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/header.php';

// Prepare and execute the query
$stmt = $pdo->prepare("SELECT * FROM cars INNER JOIN carbrands ON cars.CarBrandId = carbrands.CarBrandId");
$stmt->execute();

// Fetch the results
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="wrapper">
        <section class="info">
            <h2>Beheer auto's</h2>
        </section>
        <section class="manage">
            <a href="addcar.php" class="add">Auto toevoegen</a>
            <ul class="cars">
                <?php
                foreach ($cars as $car) {
                    echo '<li>
                        <a href="car.php?id=' . $car['CarId'] . '">
                            <p>
                                ' . $car['CarBrandName'] . ' ' . $car['CarModel'] . '
                            </p>
                        </a>
                        <div>
                            <a href="editcar.php?id=' . $car['CarId'] . '" class="edit">Bewerken</a><a href="deletecar.php?id=' . $car['CarId'] . '" class="delete">Verwijderen</a>
                        </div>
                    <li>';
                }
                ?>
            </ul>
        </section>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/footer.php'; ?>