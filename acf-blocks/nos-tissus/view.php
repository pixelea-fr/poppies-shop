    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="nos-tissus">
        <div class="content">
            <div class="text">
                <h2><?php echo $titre; ?></h2>
                <div class="sous-titre"><?php echo $sous_titre; ?> </div>
            </div>
            <div class="images etiq">
                <div class="galerie sew" data-border-radius="30">
                    <?php foreach ($galerie as $g) : ?>
                        <?php echo wp_get_attachment_image($g, 'full'); ?>
                    <?php endforeach ?>
                </div>
                <span class="dots"></span>
            </div>
        </div>
    </section>