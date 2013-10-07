$(function() {

/* Плавный переход к якорю */
$.localScroll({
    hash: false,
    duration: 1500,
	offset: -76});
/* Плавный переход к якорю */


/* Эффект отражения изображения и текста */
var reflectOptions = {
    el: ".reflect",
    height: 0.92,
    opacity: 0.3,
    distanceV: -6,
    addHeight: true,
    IEbackground: "white"
}
reflection(reflectOptions);
/* Reflect */

$("nav.navHeader li:last").css("background","none");

$("a.needAdvertising").css("display","block");
$("a.needAdvertising").click(function(event) {
    event.preventDefault();
});

$("section.wrapWin").hide();$("b.closeWin").css("display","block");
$("a.needAdvertising").click(function () {
    $("section.wrapWin").fadeIn(1000).css("display","block")
});
$("b.closeWin").click(function () {
    $("section.wrapWin").css("display","none")
});

/* begin projects carousel */
$(".sliderNext").click(function(){
	if($("ul.slider>li.visibleSlide:animated").length) return false;
	var p = $("ul.slider>li.visibleSlide:first").index();
	$("ul.slider>li.visibleSlide:last").next().removeClass("hiddenSlide").addClass("visibleSlide").css({opacity:0}).animate(
		{
			opacity:1
		},
		150,
		function(){
			$(this).removeClass("hiddenSlide").addClass("visibleSlide");
			$(this).css({opacity:""});
		}
	);
	$("ul.slider>li.visibleSlide:first").animate(
		{
			marginLeft:"-291px",
			opacity:0
		},
		150,
		function(){
			$(this).css({marginLeft:"",opacity:""});
			$(this).toggleClass("visibleSlide").addClass("hiddenSlide");
			if($(this).index()+3 >= $("ul.slider>li").length) {
				$("ul.slider>li").removeClass("visibleSlide").addClass("hiddenSlide");
				$("ul.slider>li:lt(3)").removeClass("hiddenSlide").addClass("visibleSlide");
			}
		}
	);
})
$(".sliderPrev").click(function(){
	if($("ul.slider>li.visibleSlide:animated").length) return false;
	if($("ul.slider>li.visibleSlide:first").index() <= 0) {
		$("ul.slider>li").removeClass("visibleSlide").addClass("hiddenSlide");
		$("ul.slider>li:gt("+($("ul.slider>li").length-4)+")").removeClass("hiddenSlide").addClass("visibleSlide");
	}
	var p = $("ul.slider>li.visibleSlide:last").index();
	$("ul.slider>li.visibleSlide:last").animate(
		{
			opacity:0
		},
		150,
		function(){
			$(this).css({opacity:""});
			$(this).toggleClass("visibleSlide").addClass("hiddenSlide");
		}
	);
	$("ul.slider>li.visibleSlide:first").prev().removeClass("hiddenSlide").addClass("visibleSlide").css({marginLeft:"-291px",opacity:0}).animate(
		{
			marginLeft:0,
			opacity:1
		},
		150,
		function(){
			$(this).removeClass("hiddenSlide").addClass("visibleSlide");
			$(this).css({opacity:"",marginLeft:""});
		}
	);
});
/* end projects carousel */

});