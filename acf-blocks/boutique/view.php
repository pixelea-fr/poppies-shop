    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="boutique">
        <div class="content">
            <div class="image">
                <?php echo wp_get_attachment_image($photo, 'full'); ?>
            </div>
            <div class="texte coqu sew" data-border-radius="30">
                <h2>La boutique</h2>
                <p>Découvrez notre adorable boutique, située en face du réputé Musée de la Tapisserie de Bayeux. Nichée au cœur de cette cité historique, notre boutique est une véritable pépite pour les passionnés d’artisanat et d’œuvres originales.</p>
                <?php $struc = get_field('structure', 'option'); ?>
                <div class="adress">
                    <p><?php echo $struc['adresse']; ?></p>
                    <p><?php echo $struc['code_postal']; ?> <?php echo $struc['commune']; ?></p>
                    <p>Ouvert du Lundi au Samedi de 10h à 19h</p>
                </div>
                <?php if ($bouton) : ?>
                    <a class="button reverse" href="/contact" aria-label="Contact" alt="Contact">Contactez nous</a>
                <?php endif; ?>
            </div>
        </div>
    </section>