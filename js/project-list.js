function sticky_relocate() {
    var window_top = $(window).scrollTop();
    if (window_top > 475) {
        $('#sticky').addClass('fix-projects');
        $('.article--body').addClass('col-md-offset-3');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('fix-projects');
        $('.article--body').removeClass('col-md-offset-3');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});