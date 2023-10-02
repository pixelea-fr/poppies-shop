    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="nos-creations">
        <div class="content">
            <div class="titre">
                <h2><?php echo $titre; ?></h2>
                <p><?php echo $sous_titre; ?></p>
            </div>
            <div class="gallery">
                <?php foreach ($galerie as $g) : ?>
                    <figure>
                        <?php echo wp_get_attachment_image($g, 'full'); ?>
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>