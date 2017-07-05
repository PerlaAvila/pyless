$(document).ready(function () {

	
//if ($("#step2").hasClass("active")){
//  $("#reservation-form").css("whiteback");
//};






    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        //$("#reservation-form").removeClass('linearback');
        //$("#reservation-form").css("background-color", "white");
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard-inner .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
