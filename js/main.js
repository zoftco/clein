/*
* Basic Count Down to Date and Time
* Author: @mrwigster / trulycode.com
*/
(function (e) {
	e.fn.countdown = function (t, n) {
		function i() {
			eventDate = Date.parse(r.date) / 1e3;
			currentDate = Math.floor(e.now() / 1e3);
			if (eventDate <= currentDate) {
				//n.call(this);
				//clearInterval(interval)
			}
			seconds = eventDate - currentDate;
			days = Math.floor(seconds / 86400);
			seconds -= days * 60 * 60 * 24;
			hours = Math.floor(seconds / 3600);
			seconds -= hours * 60 * 60;
			minutes = Math.floor(seconds / 60);
			seconds -= minutes * 60;
			days == 1 ? thisEl.find(".timeRefDays").text("dia") : thisEl.find(".timeRefDays").text("dias");
			hours == 1 ? thisEl.find(".timeRefHours").text("hora") : thisEl.find(".timeRefHours").text("horas");
			minutes == 1 ? thisEl.find(".timeRefMinutes").text("minuto") : thisEl.find(".timeRefMinutes").text("minutos");
			seconds == 1 ? thisEl.find(".timeRefSeconds").text("segundo") : thisEl.find(".timeRefSeconds").text("segundos");
			if (r["format"] == "on") {
				days = String(days).length >= 2 ? days : "0" + days;
				hours = String(hours).length >= 2 ? hours : "0" + hours;
				minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
				seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
			}
			if (!isNaN(eventDate)) {
				thisEl.find(".days").text(days);
				thisEl.find(".hours").text(hours);
				thisEl.find(".minutes").text(minutes);
				thisEl.find(".seconds").text(seconds)
			} else {
				alert("Invalid date. Example: 30 Tuesday 2013 15:50:00");
				clearInterval(interval)
			}
		}
		var thisEl = e(this);
		var r = {
			date: null,
			format: null
		};
		t && e.extend(r, t);
		i();
		interval = setInterval(i, 1e3)
	}
})(jQuery);

$(document).ready(function(){
	function e() {
		var e = new Date;
		e.setDate(e.getDate() + 60);
		dd = e.getDate();
		mm = e.getMonth() + 1;
		y = e.getFullYear();
		futureFormattedDate = mm + "/" + dd + "/" + y;
		return futureFormattedDate
	}
	$("#countdown").countdown({
		date: "30 October 2017 09:00:00", // Change this to your desired date to countdown to
		format: "on"
	});
});

$(document).ready(function(){
	$('.datos_expositor').click(function() {
		$('.info_expositor').slideUp();
		$(this).next('.info_expositor').stop().slideToggle();
	});
});

$(document).ready(function(){
	$(".westernUnion").hide();
	$(".pagoefectivo").hide();
	$(".pagoTarjeta").hide();
    $("#metodopago").change(function(){
         if ($(this).val() == "WU" ) {
             $(".westernUnion").slideDown();
         } else {
             $(".westernUnion").slideUp();
         }

         if ($(this).val() == "EF" ) {
             $(".pagoefectivo").slideDown();
         } else {
             $(".pagoefectivo").slideUp();
         }

         if ($(this).val() == "TC" ) {
             $(".pagoTarjeta").slideDown();
         } else {
             $(".pagoTarjeta").slideUp();
         }
    });
});
