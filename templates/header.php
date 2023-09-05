<?php
    $mainMenu = [
        [
            "page" => "index.php", 
            "title" => "Accueil", 
            "icon" => "bi bi-house",
            "meta_description" => ""
        ],

        [
            "page" => "compétences.php", 
            "title" => "mes compétences", 
            "icon" => "bi bi-book",
            "meta_description" => ""
        ],

        [
            "page" => "projets.php", 
            "title" => "Mes projets", 
            "icon" => "bi bi-kanban",
            "meta_description" => ""
        ],

        [
            "page" => "propos.php", 
            "title" => "A propos", 
            "icon" => "bi bi-file-earmark-person",
            "meta_description" => ""
        ],

        [
            "page" => "contact.php", 
            "title" => "Me contacter", 
            "icon" => "bi bi-telephone-fill",
            "meta_description" => ""
        ]
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $menuItem["meta_description"];?>">

    <!-- Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- google font -->
    
    
    <!-- feuille de style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="assets/img/logo_tete_de_chat.png" alt="Logo tête de chat" width="120">
            </a>

            <ul class="nav nav-pills">
                <?php foreach ($mainMenu as $key => $menuItem) { ?>
                    <li>
                        
                        <a href="<?= $menuItem["page"];?>" class="nav-link px-2">
                            <i classe="<?= $menuItem["icon"];?>"></i> 
                            <?= $menuItem["title"];?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </header>
    </div>