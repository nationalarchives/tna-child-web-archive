$(function() {
    $(".entry-content ul").not("#a-z-menu").after('<div class="pull-right" id="gotoTopString"><a href="#">Back to top</a></div>');
    $(".bookMarkLet").on('click', function(e){ e.preventDefault(); alert('Please drag the bookmarklet to your bookmark bar') })
});