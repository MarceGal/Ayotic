var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
var isEnglish = (document.documentElement.lang.toLowerCase() === "en-us");

jQuery(document).ready(function() {

    jQuery("body.home .inicio .full-page-inner-wrap").append('<a class="arrow-down" href = "#about"></a>');
    jQuery("body.home .inicio .full-page-inner-wrap").append('<a class="ws-button" href="https://wa.me/59894940151"></a>');
    jQuery("body.home .contacto .full-page-inner-wrap").append('<a class="ws-button" href="https://wa.me/59894940151"></a>');
    jQuery("body.home .contacto .full-page-inner-wrap").append('<a class="arrow-up" href = "#inicio"> </a>');
    //jQuery(".srv-2 .menu-wrapper").children('.team-member').addClass('hover_triangle');
    jQuery(".srv-2 .menu-wrapper .team-member").each(function(index, value) {
        //console.log(`div${index}: ${this.id}`);
        var iii = index;
        //jQuery(value).data = iii;
        jQuery(value).attr('id', 'menu-item-' + iii).click(function(event) {

            setTimeout(function() {

                jQuery('.nectar_team_member_overlay .team_member_image').addClass('menu-item-' + iii);

                var tmp = '<a class="nectar-button large regular accent-color  regular-button" style="visibility: visible;" href="#contacto" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>';

                if (isEnglish) {
                    tmp += 'Request more information';
                } else {
                    tmp += 'Solicitar más información';
                }

                tmp += '</span></a>';

                if (isMobile) {
                    jQuery("body.home .nectar_team_member_overlay.open .bio-inner").append(tmp);
                } else {
                    jQuery("body.home .nectar_team_member_overlay.open .team_member_picture").append(tmp);
                }

            }, 10);

        });

    });



});