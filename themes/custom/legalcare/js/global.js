/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function(context, settings) {
      var position = $(window).scrollTop();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $('body').addClass("scrolled");
        }
        else {
          $('body').removeClass("scrolled");
        }
        var scroll = $(window).scrollTop();
        if (scroll > position) {
          $('body').addClass("scrolldown");
          $('body').removeClass("scrollup");
        } else {
          $('body').addClass("scrollup");
          $('body').removeClass("scrolldown");
        }
        position = scroll;
      });

      $('.tagslider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
      
      $(".flotante .flotante-accion").unbind('click').click(function(){
        console.log("click");
        $(".flotante-opciones").slideToggle("fast")
      });      

      $(".sidebar-box .categories li a").click(function(e){
        e.preventDefault();
        console.log($(this).text());
        if( $(this).text() == "Mostrar todos" ){
          $("#edit-field-categorias-target-id option:contains('- Cualquiera -')").prop("selected",true).change();
        }else{
          $("#edit-field-categorias-target-id option:contains("+ $(this).text() +")").prop("selected",true).change();
        }
        
      });

      
      


    }
  };

})(jQuery, Drupal);