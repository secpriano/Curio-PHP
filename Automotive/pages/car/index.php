<?php

include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/header.php';

$brand = $_GET['merk'] ?? '';

// Prepare and execute the query
$stmt = $pdo->prepare("SELECT * FROM cars INNER JOIN carbrands ON cars.CarBrandId = carbrands.CarBrandId WHERE carbrands.CarBrandName = :brand");
$stmt->bindParam(':brand', $brand);
$stmt->execute();

// Fetch the results
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="wrapper">
        <section class="info">
            <h2><?= $brand ?></h2>
        </section>
        <section class="manage">
            <table>
                <tr>
                    <th>Models</th>
                </tr>
                <?php
                foreach ($cars as $car) {
                    echo '<tr>
                        <td>' . $car['CarModel'] . '</td>
                    </tr>';
                }
                ?>
            </table>
        </section>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/footer.php'; ?>
