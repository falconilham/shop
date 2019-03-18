var tanggal = new Date().getFullYear();
var app = new Vue({
  el: '.tahun',
  data: {
    message: tanggal + " " +'Copyright MPGAMES by Ilham'
  }
})

$(document).ready(function(){
	$(".nav-item1").click(function(){
    	$(".nav-item2, .nav-item3").removeClass("nav-item-active");
    	$(".tab-content2, .tab-content3").removeClass("active");
    	$(".tab-content1").addClass("active");
    	$(".nav-item1").addClass("nav-item-active");
	});
	$(".nav-item2").click(function(){
		$(".nav-item1, .nav-item3").removeClass("nav-item-active");
		$(".tab-content1, .tab-content3").removeClass("active");
		$(".tab-content2").addClass("active");
		$(".nav-item2").addClass("nav-item-active");
	});
	$(".nav-item3").click(function(){
		$(".nav-item1, .nav-item2").removeClass("nav-item-active");
		$(".tab-content1, .tab-content2").removeClass("active");
		$(".tab-content3").addClass("active");
		$(".nav-item3").addClass("nav-item-active");
	});
});

$(document).ready(function(){
	$(".login").click(function(){
		$(".signup").removeClass("log-active");
		$("#login").removeClass("inactive");
		$(".login").addClass("log-active");
		$("#signup").addClass("inactive");
	});
	$(".signup").click(function(){
		$(".login").removeClass("log-active");
		$("#signup").removeClass("inactive");
		$(".signup").addClass("log-active");
		$("#login").addClass("inactive");
	});
});

$(document).ready(function(){
	$("#pop-login").click(function(){
		$(".popup").css("display", "block")
	});
	$(".popupclose").click(function(){
		$(".popup").css("display", "none")
	});
});

$(document).ready(function(){
	$("#btn1").click(function(){
		$(".slides").animate({
			left : '0px'
		});
		$("#btn1").addClass("btn-active")
		$("#btn2").removeClass("btn-active")	
	});
	$("#btn2").click(function(){
		$(".slides").animate({
			left : '-1530px'
		});
		$("#btn1").removeClass("btn-active")
		$("#btn2").addClass("btn-active")
	});
//	var currentSlide = 1;
//	var $slider = $(".screen-wallpaper");
//	var slides = $(".slides").css("left", "0px");
//	var slideCount = $slider.children().length;
//	var slidetime = 3000;
//	var animatetime = 2000;
	
//	setInterval(function(){
//		$(".slides").animate({
//			left: '-=1530px'
//		}, animatetime, function(){
//			currentSlide++;
//			if(currentSlide === slideCount){
//				currentSlide = 1;
//				$(".slides").css("left", "0px")
//			}
//		});
//	}, slidetime);
});
	