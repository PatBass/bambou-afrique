$(document).ready(function(){
    $('.datepicker_compta').fdatepicker({
        format: 'dd/mm/yyyy',
        weekStart: 1,
        language: 'fr-FR'
    });

    if ($('.datepicker_compta').size() > 0) {
        $('form').submit(function() {
            $('.datepicker_compta').each(function(){
                var val = $(this).val().split('/');
                $(this).val(val[2] + '-' + val[1] + '-' + val[0]);
            });

            return true;
        }); 
    }

    var totalCheck = 0;
    var totalBankwire = 0;
    var totalCash = 0;
    var lineChart = [];
    $('.line_total_encasement_chq').each(function() { totalCheck += Number($(this).attr('data-total')); });
    $('.line_total_encasement_vir').each(function() { totalBankwire += Number($(this).attr('data-total')); });
    $('.line_total_encasement_esp').each(function() { totalCash += Number($(this).attr('data-total')); });
    
    $('.encasement_title_container').each(function(){
        var object = {};
        object.y = $(this).attr('data-date');
        object.chq = $(this).children('.line_total_encasement_chq').attr('data-total');
        object.vir = $(this).children('.line_total_encasement_vir').attr('data-total');
        object.esp = $(this).children('.line_total_encasement_esp').attr('data-total');
        lineChart.push(object);
    });

    if ($('#line_encasement_chart').size() > 0) {
        Morris.Donut({
            element: 'donut_repartition_encasement',
            data: [
                {label: "Chèques (€)", value: totalCheck},
                {label: "Virements (€)", value: totalBankwire},
                {label: "Espèces (€)", value: totalCash}
            ]
        });

        Morris.Line({
            element: 'line_encasement_chart',
            data: lineChart,
            xkey: 'y',
            ykeys: ['chq', 'vir', 'esp'],
            labels: ['Chèques', 'Virements', 'Espèces']
        });
    }

    $('.encasement_title_container').click(function(){
        if ($(this).next('.encasement_line_container').css('display') == 'none') {
            $('.encasement_line_container').stop().slideUp(500);
            $('.encasement_title_container').children('h1').children('span').removeClass('fa-caret-down');
            $('.encasement_title_container').children('h1').children('span').addClass('fa-caret-right');
            $(this).next('.encasement_line_container').stop().slideDown(500);
            $(this).children('h1').children('span').removeClass('fa-caret-right');
            $(this).children('h1').children('span').addClass('fa-caret-down');
        } else {
            $('.encasement_title_container').children('h1').children('span').removeClass('fa-caret-down');
            $('.encasement_title_container').children('h1').children('span').addClass('fa-caret-right');
            $('.encasement_line_container').stop().slideUp(500);
        }
    });
    
});