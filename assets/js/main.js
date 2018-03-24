$(function() {
	$("aside > section").addClass('post');
         $('[type="search"]').hide();
    $('#toggle-search').click(function(){
        $('[type="search"]').fadeToggle();
    });
    function scrolltop()
{
    var id_button = '#arrow-up';

    // Kéo xuống khoảng cách 220px thì xuất hiện button
    var offset = 220;

    // THời gian di trượt là 0.5 giây
    var duration = 700;

    // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
    // kiểm tra sự ẩn hiện của button
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(id_button).fadeIn(duration);
        } else {
            jQuery(id_button).fadeOut(duration);
        }
    });

    // Thêm sự kiện click vào button để khi click là trượt lên top
    jQuery(id_button).click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
}
scrolltop();
});
