var tanggal = new Date().getFullYear();
var app = new Vue({
  el: '.tahun',
  data: {
    message: tanggal + " " +'Copyright MPGAMES by Ilham'
  }
})

$(document).ready(function(){
	$(".nav-item1").click(function(){
    	$(".nav-item2, .nav-item3, .nav-item4 ").removeClass("nav-item-active");
    	$(".tab-content2, .tab-content3, .tab-content4 ").removeClass("active");
    	$(".tab-content1").addClass("active");
    	$(".nav-item1").addClass("nav-item-active");
	});
	$(".nav-item2").click(function(){
		$(".nav-item1, .nav-item3, .nav-item4 ").removeClass("nav-item-active");
		$(".tab-content1, .tab-content3, .tab-content4 ").removeClass("active");
		$(".tab-content2").addClass("active");
		$(".nav-item2").addClass("nav-item-active");
	});
	$(".nav-item3").click(function(){
		$(".nav-item1, .nav-item2, .nav-item4 ").removeClass("nav-item-active");
		$(".tab-content1, .tab-content2, .tab-content4 ").removeClass("active");
		$(".tab-content3").addClass("active");
		$(".nav-item3").addClass("nav-item-active");
	});
	$(".nav-item4").click(function(){
		$(".nav-item1, .nav-item2, .nav-item3 ").removeClass("nav-item-active");
		$(".tab-content1, .tab-content2, .tab-content3 ").removeClass("active");
		$(".tab-content4").addClass("active");
		$(".nav-item4").addClass("nav-item-active");
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
function password(){
	var pass = $("#password").val();
	var repass = $("#re-password").val();
	if (repass != pass ){
		alert("password Tidak Sama")
	}
}
});
