<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <?php
                if (!empty($_SESSION['erreur'])) {
                    echo '<div class="alert alert-danger" role="alert">
                                ' . $_SESSION['erreur'] . '
                            </div>';
                    $_SESSION['erreur'] = "";
                }
                ?>
                <?php
                if (!empty($_SESSION['message'])) {
                    echo '<div class="alert alert-success" role="alert">
                                ' . $_SESSION['message'] . '
                            </div>';
                    $_SESSION['message'] = "";
                }
                ?>
                <h1>Liste des produits</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Nombre</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        // On boucle sur la variable result
                        foreach ($products as $product) {
                        ?>
                            <tr>
                                <td><?= $products['id'] ?></td>
                                <td><?= $products['produit'] ?></td>
                                <td><?= $products['prix'] ?></td>
                                <td><?= $products['nombre'] ?></td>
                                <td><a class="btn btn-primary" href="index.php?action=view&AMP;id=<?= $products['id'] ?>">Voir</a>
                                 <a class="btn btn-success" href="index.php?action=update&AMP;id=<?= $products['id'] ?>">Modifier</a>
                                  <a class="btn btn-danger" href="index.php?action=delete&AMP;id=<?= $products['id']?>">Supprimer</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="index.php?action=add" class="btn btn-primary">Ajouter un produit</a>
            </section>
        </div>
    </main>
</body>

</html>