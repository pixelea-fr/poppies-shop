(function ($) {

    $('document').ready(function () {
        // Burger nav
        $('.menu-toggle').on('click', function () {
            $('header').toggleClass('header--menu-is-open');
        });

        // Sélectionnez tous les éléments .sew
        const $sewElements = $('.sew');

        $sewElements.each(function () {
            // Pour chaque élément .sew, obtenez sa valeur de border-radius à partir de l'attribut data-border-radius
            const borderRadius = $(this).data('border-radius');
            const borderMin = borderRadius - 20;

            // Mettez à jour l'URL de l'image SVG avec la valeur de border-radius
            const svgImage = `data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='${borderRadius}' ry='${borderRadius}' stroke='red' stroke-width='4' stroke-dasharray='10%2c 20' stroke-dashoffset='26' stroke-linecap='square'/%3e%3c/svg%3e`;

            // Créez une nouvelle feuille de style pour le pseudo-élément :before de cet élément .sew
            const styleSheet = document.styleSheets[0]; // Assurez-vous que cela pointe vers la feuille de style appropriée

            // Définissez la nouvelle règle pour le pseudo-élément :before
            styleSheet.insertRule(`.sew[data-border-radius='${borderRadius}']::before {
                 background-image: url("${svgImage}"); 
                 border-radius:${borderRadius}px }`, 0);
        });

    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 1 * $(window).height()) {
            $(".back-top").css("bottom", "5%");
        }
        else {
            $(".back-top").css("bottom", "-10%");
        }
    });

}(jQuery));