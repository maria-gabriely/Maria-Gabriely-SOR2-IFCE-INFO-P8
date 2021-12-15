<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Docker | Testando o Docker</title>
    </head>

    <body>
        <?php
            $result = file_get_contents("http://node-container:9001/products");
            $products = json_decode($result);
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->price; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>