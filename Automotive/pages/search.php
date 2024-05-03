<?php

include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/header.php';

$searchString = $_GET['search'];

$query = "SELECT * FROM cars INNER JOIN carbrands ON cars.CarBrandId = carbrands.CarBrandId WHERE CarModel LIKE '%$searchString%' OR CarBrandName LIKE '%$searchString%'";
$stmt = $pdo->prepare($query);
$stmt->execute();
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div class="wrapper">
        <section class="info">
            <h2>Zoekresultaten</h2>
        </section>
        <section class="manage">
            <table>
                <tr>
                    <th>Merk</th>
                    <th>Model</th>
                </tr>
                <?php
                foreach ($cars as $car) {
                    echo '<tr>
                        <td>' . $car['CarBrandName'] . '</td>
                        <td>' . $car['CarModel'] . '</td>
                    </tr>';
                }
                ?>
            </table>
        </section>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/footer.php'; ?>
