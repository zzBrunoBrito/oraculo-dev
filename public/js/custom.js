// /**
//  * Created by lelukas on 30/09/2016.
//  */


$("ul.navbar-nav>li.dropdown").hover(function () {
    $(this).children().children().animate({
        opacity: 1,
    },"fast")
}, function () {
    $(this).children().children().animate({
        opacity: 0.3
    },"fast")
});