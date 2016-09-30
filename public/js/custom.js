// /**
//  * Created by lelukas on 30/09/2016.
//  */


$("ul>li.dropdown").hover(function () {
    $(this).children().children("span").animate({
        opacity: 1,
    },"fast")
}, function () {
    $(this).children().children("span").animate({
        opacity: 0.3
    },"fast")
});