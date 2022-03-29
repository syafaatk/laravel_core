!function(a){"use strict";a("#side-menu").metisMenu(),a(".vertical-menu-btn").on("click",function(t){t.preventDefault(),a("body").toggleClass("sidebar-enable"),992<=a(window).width()?a("body").toggleClass("vertical-collpsed"):a("body").removeClass("vertical-collpsed")}),a("#sidebar-menu a").each(function(){var t=window.location.href.split(/[?#]/)[0];this.href==t&&(a(this).addClass("active"),a(this).parent().addClass("mm-active"),a(this).parent().parent().addClass("mm-show"),a(this).parent().parent().prev().addClass("mm-active"),a(this).parent().parent().parent().addClass("mm-active"),a(this).parent().parent().parent().parent().addClass("mm-show"),a(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),a(".navbar-nav a").each(function(){var t=window.location.href.split(/[?#]/)[0];this.href==t&&(a(this).addClass("active"),a(this).parent().addClass("active"),a(this).parent().parent().addClass("active"),a(this).parent().parent().parent().parent().addClass("active"),a(this).parent().parent().parent().parent().parent().addClass("active"),a(this).parent().parent().parent().parent().parent().parent().addClass("active"),a(this).parent().parent().parent().parent().parent().parent().parent().addClass("active"))}),a(".right-bar-toggle").on("click",function(t){a("body").toggleClass("right-bar-enabled")}),a(document).on("click","body",function(t){0<a(t.target).closest(".right-bar-toggle, .right-bar").length||a("body").removeClass("right-bar-enabled")}),a(".dropdown-menu a.dropdown-toggle").on("click",function(t){return a(this).next().hasClass("show")||a(this).parents(".dropdown-menu").first().find(".show").removeClass("show"),a(this).next(".dropdown-menu").toggleClass("show"),!1}),a(function(){a('[data-toggle="tooltip"]').tooltip()}),a(function(){a('[data-toggle="popover"]').popover()}),Waves.init()}(jQuery);
// Add Some Function

var App = {
	date : (date, region = "id",  options = { weekday: "short", year: "numeric", month: "short", day: "numeric"}) => {
		if (date==null || date=="") {
			return "";
		} else {
			time = new Date(date).toLocaleTimeString(region, { hour: '2-digit', minute: '2-digit' });
			if (date.length > 10) {
				return new Date(date).toLocaleDateString(region, options) + " Pukul " + time;
			}
			return new Date(date).toLocaleDateString(region, options);
		}
	},
	justDate : (date, region = "id",  options = { weekday: "short", year: "numeric", month: "short", day: "numeric"}) => {
		if (date==null || date=="") {
			return "";
		} else {
			time = new Date(date).toLocaleTimeString(region, { hour: '2-digit', minute: '2-digit' });
			if (date.length > 10) {
				return new Date(date).toLocaleDateString(region, options);
			}
			return new Date(date).toLocaleDateString(region, options);
		}
	},
	dateNormal : (date) => { return date!=null ? date.split(' ')[0] : ""; },
	dateRange : (date1, date2) => {
		var date1 = new Date(date1); 
		var date2 = new Date(date2); 

		var inTimeDiff = date2.getTime() - date1.getTime(); 

		return inDaysDiff = (inTimeDiff / (1000 * 3600 * 24));
	},

	formatCurrency : function(n, blur) {
		nilai = Number(n.val().replace(/(?!-)[^0-9.]/g, ""));

		if (blur!=="blur") {
			nilai = (""+nilai).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		return n.val(nilai);
	},

	numToWord : (Nilai) => {
		var toStr   = Nilai.toString();
		var word    = "";
		var num     = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
		var units   = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
		var othersIntl = new Array('','Ribu','Juta','Milyar','Triliun');
		var srtLength = toStr.length;

		if(srtLength > 15){
			word = "Diluar Batas";
		}else{
			for(i = 1; i <= srtLength; i++) { num[i] = toStr.substr(-(i),1); }

				var i = 1;
			var j = 0;

			while(i <= srtLength){
				subWord = "";
				units1 = "";
				units2 = "";
				units3 = "";

				if(num[i+2] != "0"){ units1 = num[i+2] == "1" ? "Seratus" : units[num[i+2]] + " Ratus"; }

				if(num[i+1] != "0"){
					if(num[i+1] == "1"){
						if(num[i] == "0"){
							units2 = "Sepuluh";
						}else if(num[i] == "1"){
							units2 = "Sebelas";
						}else{
							units2 = units[num[i]] + " Belas";
						}
					}else{
						units2 = units[num[i+1]] + " Puluh";
					}
				}

				if (num[i] != "0" && num[i+1] != "1"){ units3 = units[num[i]]; } 

				if ((num[i] != "0") || (num[i+1] != "0") || (num[i+2] != "0")){ subWord = units1+" "+units2+" "+units3+" "+othersIntl[j]+" "; }

				word = subWord + word;
				i += 3;
				j++;
			}

			if ((num[5] == "0") && (num[6] == "0")){ word = word.replace("Satu Ribu","Seribu"); }
		}
		return word.replace(/  +/g, ' ').trim();
	},

	sort : (firstKey, secondKey) => {
		return (a, b) => {  
			if (a[firstKey] > b[firstKey]) {  
				return -1;  
			} else if (a[firstKey] < b[firstKey]) {  
				return 1;  
			} else {
				if (a[secondKey] > b[secondKey]) {  
					return 1;  
				} else if (a[secondKey] < b[secondKey]) {  
					return -1;  
				} else {
					return 0;
				}
			} 
		}  
	},
	timePicker : (date) => {
		new Picker(document.querySelector('.js-time-picker'), {
			// date: '{{ date('Y-m-d') . " " . ((int)date('h')+4) . ":00" }}',
			date: date,
			format: 'HH:mm',
			headers: true,
			controls: true,
			rows: 3,
			text: {
				title: 'Masukan Estimasi Jam Selesai Pekerjaan',
				cancel: 'Batal',
				confirm: 'Oke',
				hour: 'Jam',
				minute: 'Menit',
				second: 'Detik',
			},
		});
	}
}

Number.prototype.round = function(p) {
	p = p || 10;
	return parseFloat( this.toFixed(p) );
};

var IDR    = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });
var number = new Intl.NumberFormat('id-ID', { style: 'decimal', currency: 'IDR' });

$('.phone-mask').on('input', function (e) {
	// console.log("e.target.textLength", e.target.textLength);
	var x = e.target.value.replace(/\D/g, '').match(/(\d{0,4})(\d{0,4})(\d{0,5})/);
	e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
});

$('.select2').select2();

$.extend( true, $.fn.dataTable.defaults, {
	lengthMenu : [10, 25, 50, 100, 250, 500, 1000],
	"pageLength" : 25,
});

$(".modal-header").on("mousedown", function(mousedownEvt) {
	var $draggable = $(this);
	var x = mousedownEvt.pageX - $draggable.offset().left,
	y = mousedownEvt.pageY - $draggable.offset().top;
	$("body").on("mousemove.draggable", function(mousemoveEvt) {
		let left = mousemoveEvt.pageX - x;
		let top = mousemoveEvt.pageY - y;

		$draggable.closest(".modal-dialog").offset({
			"left": left,
			"top": top
		});
	});

	$("body").one("mouseup", () => {
		$("body").off("mousemove.draggable");
	});
	$draggable.closest(".modal").one("bs.modal.hide", () => {
		$("body").off("mousemove.draggable");

	});
});

function setCurrency(){
	$("input[data-type='currency']").each(function(){
		App.formatCurrency($(this), "keyup");
	});
}

function setUncurrency(){
	$("input[data-type='currency']").each(function(){
		App.formatCurrency($(this), "blur");
	});
}

function filterArray(array, filters) {
	const filterKeys = Object.keys(filters);
	return array.filter(item => {
		return filterKeys.every(key => {
			if (typeof filters[key] !== 'function') return true;
			return filters[key](item[key]);
		});
	});
}

setTimeout(function(){
	setCurrency();
},500)

$("input[data-type='currency']").on({
	keyup: function() {
		App.formatCurrency($(this), "keyup");
	},
	mouseup : function() {
		App.formatCurrency($(this), "keyup");
	},
	mouseover : function() {
		App.formatCurrency($(this), "keyup");
	},
	input : function() {
		App.formatCurrency($(this), "keyup");
	},
				// mouseout : function() {
				// 	App.formatCurrency($(this), "blur");
				// },
				// blur: function() { 
				// 	App.formatCurrency($(this), "blur");
				// }
			});

$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

var totalUnauthorized = 0;
$( document ).ajaxError(( event, jqxhr, settings, thrownError ) => {
	if (thrownError=="Unauthorized") {
		if (totalUnauthorized>5) {
			Swal.fire({
				title: 'Sesi Login Sudah Habis',
				html: "<br>Sistem Akan Melakukan Crosscheck Aktifitas Pengguna & Akan Meminta Login Ulang Jika Dibutuhkan!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Terima Kasih',
				cancelButtonText: 'Tutup'
			}).then((result) => {
				window.localStorage.clear();
				window.location="/login";
			});
		} else {
			totalUnauthorized = totalUnauthorized+1;
			Swal.fire({
				title: 'Sesi Login Habis',
				html: `<br>Sistem Sedang Melakukan Crosscheck Aktifitas Pengguna, Saat Ini Tercatat ${totalUnauthorized} Kali Sistem Menganggap User Habis Masa Aktif Login !`,
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Terima Kasih',
			});
		}
	} else {
	}
});

setInterval(keepTokenAlive, 1000 * 60 * 15);

function keepTokenAlive() {
	$.ajax({
		url: '/keep-token-alive',
		method: 'post',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	}).then(function (result) {
		// console.log(new Date() + ' ' + JSON.stringify(result) + ' ' + $('meta[name="csrf-token"]').attr('content'));
	});
}

$.ajaxSetup({headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}});

$(document).on('show.bs.modal', '.modal', function () {
	var zIndex = 1040 + (10 * $('.modal:visible').length);
	$(this).css('z-index', zIndex);
	setTimeout(function() {
		$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
	}, 0);
});

$(document).on('hidden.bs.modal', '.modal', function () {
	$('.modal:visible').length && $(document.body).addClass('modal-open');
});