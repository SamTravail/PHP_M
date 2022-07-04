<?php

use LDAP\Result;

include('includes/header.php');
include('includes/fonctions.php');
?>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 700px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        row-gap: 3rem;
        
    }

    .card {
        border: 1px, solid, #0f0;
        /* background-color: #d9d9d9d9; */
        row-gap: 3rem;
        width: 50%;
    }
</style>
<main>
    <?php

   
    // $users = file_get_contents("./users.json");
    // debug($users);

    // $users_array_php = json_decode($users, true);

    // $id_users = $users_array_php['results'];

    // echo(count($id_users));
    /*
    ?>
    <div class="container">
        <?php
        foreach ($id_users as $id_user) {
        ?>

            <div class="card" style="text-align: center;">
                <img src="<?=$id_user['picture']['medium']; ?>" alt="image_user"></img>
                <h2><?=$id_user['name']['first']; ?>
                    <span> <?=$id_user['name']['last']; ?></span>
                </h2>
                <h4><?=$id_user['email'] ?></h4>
                <h4><?=$id_user['dob']['age']; ?> ans</h4>
                <p>adresse : <?=$id_user['location']['state']; ?></p>
                <p>telephone : <?=$id_user['cell']; ?></p>
            </div>

        <?php }; ?>
    </div>
    <?php
    // debug($users_array_php);

    ?>
    <!-- 
    <img src="<?php
                // echo $peoples_array_php[1]['image'];

                ?>" alt="Amy image"></img> -->
                */

                $users = file_get_contents("./persons.json");
            
                $tab_users = json_decode($users, true);
            
                echo(count($tab_users));

                // debug($tab_users);

                ?>

                               
                        <div class="card" style="text-align: center;">
                            <h1><?=$tab_users[2]['friends'][1]['name']; ?></h1>
                            <p>La couleur des yeux de Ball Shaffer est :
                                <?=$tab_users[1]['eyeColor']; ?></p>
                            <hr>
                            <article>
                                <?php foreach ($tab_users as $key => $value) {?>
                                <p><img src="<?=$value("picture")?>"></p>
                                <p>Nom : <?=$value["name"]?></p>

                            </article>
                           
                        </div>
            
                    <?php }; ?>
                <?php




                ?>
</main>

<?php
include('includes/footer.php');
