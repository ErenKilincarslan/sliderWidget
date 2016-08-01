    /**
     * Created by eka on 26.07.2016.
     */


    $(function() {
        var slideTime = 2000;
        var delayTime=500;
        var sumLi = $(".slider ul li").length;
        var currentLi = 0;
        var sumWidth = widthLi * sumLi;
        
        $(".slider ul").css("width", sumWidth);

        $("a.next").click(function () {
            if (currentLi < sumLi - 1) {
                currentLi++;
                newWidth = widthLi * currentLi;
                $(".slider ul").animate({marginLeft: "-" + newWidth + "px"}, delayTime);
            } else {
                currentLi = 0;
                $(".slider ul").animate({marginLeft: "0"}, delayTime);
            }
            return false;
        })
        $("a.previous").click(function () {
            if (currentLi > 0) {
                currentLi--;
                newWidth = widthLi * currentLi;
                $(".slider ul").animate({marginLeft: "-" + newWidth + "px"}, delayTime);
            } else {
                currentLi = sumLi-1;
                newWidth = widthLİ * currentLi
                $(".slider ul").animate({marginLeft: "-" + newWidth+ "px" }, delayTime);
            }
            return false;
        })

        $.slideTime = function () {
            if (currentLi < sumLi - 1) {
                currentLi++;
                newWidth = widthLi * currentLi;
                $(".slider ul").animate({marginLeft: "-" + newWidth + "px"}, delayTime);
            } else {
                currentLi = 0;
                $(".slider ul").animate({marginLeft: "0"}, delayTime);
            }
        }

        var slide = setInterval($.slideTime , slideTime);
        $(".slider ul").hover(function () {
            clearInterval(slide);
        }, function () {
            slide = setInterval($.slideTime,slideTime);
        });
    });
