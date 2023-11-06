(function($){
    $(function(){
        console.log(location)
    $(document).ready(function(){
        var modal = $('.modal__emergencias')
        var homeModal = $('#homeModal')
        modal.addClass('show-boton');
        homeModal.addClass('show');
    })
    // $(window).on("hashchange", function(){
    //     console.log('cambios')
    // })
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