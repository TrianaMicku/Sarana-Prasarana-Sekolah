// event pada saat link di klik
$('.page-scroll').on('click', function(){

	//ambil isi href
	var	tujuan = $(this).attr('href');

	// tangkep elemen yang bersangkutan
	var elemenTujuan = $(tujuan);

	$('body').animate({
		scrollTop: elemenTujuan.offset().top -50
	},1250, 'swing');

	
});