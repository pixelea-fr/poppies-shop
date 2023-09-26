    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="intro coqu etiq">
        <div class="content">
            <div class="logo sew"> <?php the_custom_logo() ?> </div>
            <div class="texte">
                <?php echo $zone_de_texte; ?>
                <a class="button" href="#">Découvrez nos tissus</a>
            </div>
            <div class="image"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
        </div>
    </section>