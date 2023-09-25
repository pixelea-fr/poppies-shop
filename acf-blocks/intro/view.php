    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="intro">
        <div class="content">
            <p class="texte"><?php echo $zone_de_texte; ?></p>
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
    </section>