<?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="intro coqu etiq">
        <div class="content">
            <div class="logo sew" data-border-radius="30"> <?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ) ?> </div>
            <div class="texte">
                <?php echo $zone_de_texte; ?>
                <a class="button" alt="Nos Tissus"href="/nos-tissus">Découvrez nos tissus</a>
            </div>
            <div class="image"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
        </div>
    </section>