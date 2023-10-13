    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="creation">
        <div class="content">
            <div class="left">
                <h2><?php echo $titre; ?></h2>
                <p class="sous-titre"><?php echo $intro; ?></p>
                <div class="grid">
                    <?php foreach ($galerie as $i) : ?>
                        <figure>
                            <?php echo wp_get_attachment_image($i, 'full'); ?>
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right">
                <?php echo wp_get_attachment_image($image_de_droite, 'full'); ?>
                <div class="te">
                    <div class="text"><?php echo $sous_image; ?></div>
                    <a class="button" alt="Nos Tissus" href="/nos-tissus">Découvrez nos tissus</a>
                </div>
            </div>
        </div>
    </section>