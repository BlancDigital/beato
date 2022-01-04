jQuery(document).ready(function($) {

    // $(window).scroll(function () {
    //     var sticky = $('#formulario'),
    //         scroll = $(window).scrollTop();

    //     if (scroll >= 700) sticky.addClass('fixed');
    //     else sticky.removeClass('fixed');
    // });

    // FUNCAO PARA ATIVAR O STICKY EFFECT DO FORM
    // setTimeout(function(){ 

    //     var tela = window.innerWidth;

    //     if (tela >= 1280 && tela <= 1920) {

    //         $(".btn-cta").click(function() { 
    //             $('.section-25').addClass("full");
    //         });
        
    //         $(".btn-fechar").click(function() { 
    //             $('.section-25').removeClass("full");
    //         });

    //     }else if (tela >= 768 && tela <= 1024) {

    //         // RESETA O STICKY PARA O TABLET
    //         // $(".form").sticky({topSpacing:100});

    //     }else if (tela <= 767) {

    //         // RESETA O STICKY PARA O MOBILE
    //         // $(".form").sticky({topSpacing:100});

    //     }else{

            

    //     }

    // }, 1000);

    
    

});

lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'disableScrolling': true
});

( function() {

    var youtube = document.querySelectorAll( ".youtube" );
    
    for (var i = 0; i < youtube.length; i++) {
        
        //var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
        var source = "img/beato-video.jpg";
        
        var image = new Image();
                image.src = source;
                image.addEventListener( "load", function() {
                    youtube[ i ].appendChild( image );
                }( i ) );
        
                youtube[i].addEventListener( "click", function() {

                    var iframe = document.createElement( "iframe" );

                            iframe.setAttribute( "frameborder", "0" );
                            iframe.setAttribute( "allowfullscreen", "" );
                            iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

                            this.innerHTML = "";
                            this.appendChild( iframe );
                } );    
    };
    
} )();

( function() {

    var youtube = document.querySelectorAll( ".youtube-dep" );
    
    for (var i = 0; i < youtube.length; i++) {
        
        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
        //var source = "img/beato-video.jpg";
        
        var image = new Image();
                image.src = source;
                image.addEventListener( "load", function() {
                    youtube[ i ].appendChild( image );
                }( i ) );
        
                youtube[i].addEventListener( "click", function() {

                    var iframe = document.createElement( "iframe" );

                            iframe.setAttribute( "frameborder", "0" );
                            iframe.setAttribute( "allowfullscreen", "" );
                            iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

                            this.innerHTML = "";
                            this.appendChild( iframe );
                } );    
    };
    
} )();