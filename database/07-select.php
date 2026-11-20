<?php

require_once "06-connexion.php";

$sql = "SELECT * FROM products WHERE price > 300";

$statement = $pdo->query($sql);

$products = $statement->fetchAll(
    PDO::FETCH_ASSOC
);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Liste des produits</title>

</head>

<body>

    <h1>Gestion de mes produits</h1>

    <?php

    if (count($products) > 0) {

        foreach ($products as $product) {

    ?>

            <div>

                <h2>
                    <?php
                    echo htmlspecialchars(
                        $product["name"]
                    );
                    ?>
                </h2>

                <p>

                    Prix :

                    <?php
                    echo $product["price"];
                    ?>

                    DH

                </p>

                <p>

                    Quantité :

                    <?php
                    echo $product["quantity"];
                    ?>

                </p>

            </div>

            <hr>

    <?php

        }

    

        

    ?>
    <table order="1" width="60%" bgcolor="lightyellow" align="center">
         <tr bgcolor="lightblue">
        <th>name_product</th>
        <th>price</th>
        <th>quantity</th>
        <th>Total_stock</th>
    </tr>
        
        <?php foreach($products as $product){
            $Totalstock = $product["price"] * $product["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["name"]); ?></td>
            <td><?php echo htmlspecialchars($product["price"]); ?></td>
            <td><?php echo htmlspecialchars($product["quantity"]); ?></td>
            <td><?php echo $Totalstock; ?> DH </td>
        </tr>
        <?php } ?>
    </table>
    <?php } else { ?>
    echo "<p>Aucun produit trouvé.</p>";

   <?php } ?>

</body>

</html>





<!-- [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => "8500.00",
        "quantity" => 2
    ],
    [
        "id" => 2,
        "name" => "Mouse",
        "price" => "200.00",
        "quantity" => 10
    ]
] -->


<!-- [
    0 => 1,
    "id" => 1,

    1 => "Laptop",
    "name" => "Laptop",

    2 => "8500",
    "price" => "8500"
] -->