<?php

include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/header.php';

// Get the order_by value from the GET request
$order_by = $_GET['order_by'] ?? 'cars.CarId';
$year = $_GET['year'] ?? '0';

// Prepare and execute the query
if ($year >= 1908 && $year <= 2108)
{
    $query = "SELECT * FROM carprices INNER JOIN cars ON carprices.CarId = cars.CarId INNER JOIN carbrands ON cars.CarBrandId = carbrands.CarBrandId WHERE CarPriceYear = :year ORDER BY $order_by DESC";

} else {
    $query = "SELECT * FROM carprices INNER JOIN cars ON carprices.CarId = cars.CarId INNER JOIN carbrands ON cars.CarBrandId = carbrands.CarBrandId ORDER BY $order_by DESC";
};

$stmt = $pdo->prepare($query);

if ($year >= 1908 && $year <= 2108)
{
    $stmt->bindParam(':year', $year);
}

$stmt->execute();

// Fetch the results
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="wrapper">
        <section class="info">
            <h2>Beheer auto's</h2>
        </section>
        <section class="statistic">
            <form method="get">
                <select name="order_by">
                    <option value="AmountSold">Aantal verkocht</option>
                    <option value="CarPriceAmount">Prijs</option>
                </select>
                <label for="year">Jaar</label>
                <input type="number" name="year" min="0" max="2108" value="2023" step="1" id="year" required />
                <input type="submit" value="Order">
            </form>

            <table>
                <tr>
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Jaar</th>
                    <th>Prijs</th>
                    <th>Aantal vekocht</th>
                </tr>
                <?php
                foreach ($cars as $car) {
                    echo '<tr>
                        <td>' . $car['CarBrandName'] . '</td>
                        <td>' . $car['CarModel'] . '</td>
                        <td>' . $car['CarPriceYear'] . '</td>
                        <td>€' . $car['CarPriceAmount'] . ',-</td>
                        <td>' . $car['AmountSold'] . '</td>
                    </tr>';
                }
                ?>
            </table>
        </section>
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/footer.php'; ?>

