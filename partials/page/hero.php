<?php

$field = get_field('hero');

?>

<section id="home">
    <div class="container">
        <div class="row hero-row">
            <div class="col-12">
                <div class="heading">
                    <h1><?= $field['titulo'] ?></h1>
                    <h2><?= $field['subtitulo'] ?></h2>
                </div>
                <div class="event-info d-flex">
                    <div class="date d-flex align-items-center">
                        <img src="<?= get_template_directory_uri() . '/assets/img/calendario.png' ?>" alt="" />
                        <p><?= $field['data'] ?></p>
                    </div>
                    <div class="location d-flex align-items-center">
                        <img src="<?= get_template_directory_uri() . '/assets/img/pin.png' ?>" alt="" />
                        <p><?= $field['local'] ?></p>
                    </div>
                </div>
                <div class="sobre">
                    <?= $field['sobre'] ?>
                </div>
            </div>
        </div>
    </div>

</section>