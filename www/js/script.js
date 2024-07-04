// script.js
$(document).ready(function() {
    $('.phone-link').click(function(e) {
        e.preventDefault(); // Zamezení výchozího chování kliknutí

        // Zobrazit skryté kontaktní informace pro telefon
        $('.contact-info').html('<br><center><p>Phone: (+420)735 946 357</p></center><br>').removeClass('hidden');
        // Skrýt ikonu telefonu
        $(this).parent('.icon').hide();
    });

    $('a[href^="mailto"]').click(function(e) {
        e.preventDefault(); // Zamezení výchozího chování kliknutí

        // Zobrazit skryté kontaktní informace pro email
        $('.contact-info').html('<br><center><p>Email: tomassamohyl31102000@seznam.cz</p></center><br>').removeClass('hidden');
        // Skrýt ikonu emailu
        $(this).parent('.icon').hide();
    });

    $('.contact-info').click(function() {
        // Po kliknutí na skryté kontaktní informace zobrazit zpět ikonu
        $('.icon').show();
        $('.contact-info').addClass('hidden');
    });
});