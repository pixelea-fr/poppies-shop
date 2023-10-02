    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="etape">
        <div class="content">
            <h2><?php echo $titre; ?></h2>
            <?php foreach ($etapes as $e) : extract($e) ?>
                <div class="item">
                    <figure>
                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                    </figure>
                    <div class="text">
                        <h3 class="h2"><?php echo $titre; ?></h3>
                        <?php echo $texte; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>