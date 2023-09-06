<?php

    require_once __DIR__ . "/templates/header.php";

    $mainSkills = [

        "front" => [

            "HTML" =>[
                "name" => "HTML",
                "color" => "#0c0459",
                "icon" => "fa-brands fa-html5",
                "percent" => "90"
            ],

            "CSS" =>[
                "name" => "CSS",
                "color" => "#f2a50a",
                "icon" => "fa-brands fa-css3",
                "percent" => "60"
            ],

            "JAVASCRIPT" =>[
                "name" => "JAVASCRIPT",
                "color" => "#c40e26",
                "icon" => "fa-brands fa-square-js",
                "percent" => "30"
            ]

        ],

        "Back" => [

            "PHP" =>[
                "name" => "PHP",
                "color" => "#393659",
                "icon" => "fa-brands fa-php",
                "percent" => "60"
            ],

            "SQL" =>[
                "name" => "SQL",
                "color" => "#aef55d",
                "icon" => "fa-solid fa-database",
                "percent" => "60"
            ]

        ]

    ];

    

?>

<main>
    <?php foreach ($mainSkills as $key => $mainSkill) { ?>
        <section class="container">

            <h2><?= $key;?></h2>
            
            <hr>
            
            <div class="value">
                <?php foreach($mainSkill as $key1 => $value){ ?>
                    
                    <i class="<?= $value["icon"] ?>" style="color: <?= $value["color"] ?>"></i>
                    <p><?= $value["name"] ?></p>
   
                    <div class="progress">
                        <div class="value v-<?= $value["percent"] ?>"><?= $value["percent"] ?>%</div>
                    </div>

                    
                <?php } ?>
            </div>
        </section>
    <?php } ?>
</main>

<?php

require_once __DIR__ . "/templates/footer.php";