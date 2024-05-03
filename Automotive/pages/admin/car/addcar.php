<?php

include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/header.php';

// Prepare and execute the query
$stmt = $pdo->prepare("SELECT * FROM carbrands");
$stmt->execute();

// Fetch the results
$carBrands = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])) {

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $amountSold = $_POST['amountSold'];

    try {
        $query = "INSERT INTO cars (CarModel, CarBrandId) VALUES (:model, :brand)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':brand', $brand);

        if ($stmt->execute()) {
            $message = "Auto is succesvol toegevoegd.";
        } else {
            $message = "Kan Auto niet toevoegen.";
        }

    } catch (PDOException $e) {
        $message = $e->getMessage();
    }

    try {
        $carId = $pdo->lastInsertId();

        $query = "INSERT INTO carprices (CarPriceAmount, CarPriceYear, AmountSold, CarId) VALUES (:price, :year, :amountSold, :carId)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':amountSold', $amountSold);
        $stmt->bindParam(':carId', $carId);

        if ($stmt->execute()) {
            $message = "Auto is succesvol toegevoegd.";
        } else {
            $message = "Kan Auto niet toevoegen.";
        }

    } catch (PDOException $e) {
        $message = $e->getMessage();
    }
}

?>

<main>
    <div class="wrapper">
        <section class="info">
            <h2>Auto toevoegen</h2>
        </section>
        <section class="manage">
            <form action="" method="post">
                <label for="brand">Merk</label>
                <select type="" name="brand" id="brand" required>
                    <?php foreach ($carBrands as $carBrand) {
                        echo '<option value="' . $carBrand['CarBrandId'] . '">' . $carBrand['CarBrandName'] . '</option>';
                    } ?>
                </select>
                <label for="model">Model</label>
                <input type="text" name="model" id="model" required>
                <label for="year">Jaar</label>
                <input type="number" name="year" min="1908" max="2108" step="1" value="2023" id="year" required />
                <label for="price">Prijs van dat jaar</label>
                <input type="number" name="price" min="1" value="1" id="price" required>
                <label for="amountSold">Aantal verkocht in dat jaar</label>
                <input type="number" name="amountSold" min="0" value="0" id="amountSold" required>
                <?php if(isset($message)) echo $message; ?>
                <input type="submit" name="submit" value="Toevoegen">
            </form>
        </section>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/includes/footer.php'; ?>
