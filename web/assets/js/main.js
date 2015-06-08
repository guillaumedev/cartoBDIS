$(document).ready(function() {

    $('.menu-mobile').click(function(){

        $('#aside').toggleClass('open');
        $('.menu-mobile').toggleClass('open');

    });

    $("#new-fiche li").click(function(){

        $("#new-fiche li").removeClass('on');
        $(this).addClass('on');
        if($(this).hasClass('part1')){

            $('#part1').removeClass('hidden');
            $('#part2').addClass('hidden');
            $('#part3').addClass('hidden');


        } else if($(this).hasClass('part2')) {

            $('#part1').addClass('hidden');
            $('#part2').removeClass('hidden');
            $('#part3').addClass('hidden');

        } else if($(this).hasClass('part3')) {

            $('#part1').addClass('hidden');
            $('#part2').addClass('hidden');
            $('#part3').removeClass('hidden');

        }
    });

});