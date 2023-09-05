<?php
    $mainMenu = [
        "index.php" => [ 
            "menu_title" => "Accueil", 
            "head_title" => "Bienvenue sur mon portfolio",
            "menu_icon" => "bi bi-house",
            "meta_description" => ""
        ],

        "competences.php" => [
            "menu_title" => "mes compétences", 
            "head_title" => "Tous les skills acquis",
            "menu_icon" => "bi bi-book",
            "meta_description" => ""
        ],

        "projets.php" => [
            "menu_title" => "Mes projets", 
            "head_title" => "Mes mises en pratique",
            "menu_icon" => "bi bi-kanban",
            "meta_description" => ""
        ],

        "propos.php" => [
            "menu_title" => "A propos", 
            "head_title" => "En savoir plus sur moi",
            "menu_icon" => "bi bi-file-earmark-person",
            "meta_description" => ""
        ],

        "contact.php" => [
            "menu_title" => "Me contacter", 
            "head_title" => "Posez moi vos questions",
            "menu_icon" => "bi bi-telephone-fill",
            "meta_description" => ""
        ]
    ];

    $currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $mainMenu["$currentPage"]["meta_description"];?>">

    <!-- Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- google font -->
    
    
    <!-- feuille de style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title><?= $mainMenu["$currentPage"]["head_title"] ?></title>
</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="assets/img/logo_tete_de_chat.png" alt="Logo tête de chat" width="120">
            </a>

            <ul class="nav nav-pills">
                <?php foreach ($mainMenu as $key => $menuItem) { ?>
                    <li class="nav-item">   
                        <a href="<?= $key;?>" class="nav-link px-2 
                            <?php
                                if ($key === $currentPage){
                                    echo "active";
                                }
                            ?>
                        ">
                            <i class="<?= $menuItem["menu_icon"] ?>"></i>
                            <?= $menuItem["menu_title"];?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </header>
    </div>