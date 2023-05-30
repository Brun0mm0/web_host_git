(function($){
    $(function(){
    $(window).on("load", function(){
        var modal = $('.modal__emergencias')
        var homeModal = $('#homeModal')
        modal.addClass('show-boton');
        homeModal.addClass('show');
    })
        $('.modal__emergencias').click(function (e) { 
            e.preventDefault();
            var modal = $('#emergencias');
            modal.addClass('show')
            console.log(modal)
        });
        $('.modal__button').click(function(e){
            var modal = $('.modal');
            modal.removeClass('show');
        })
        // $('html').click(function() {
        //     $('.modal').removeClass('show');;
        // });
    })
})(jQuery)