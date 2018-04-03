$(document).ready(function() {
	var timer = 0;
	//$('#listing_invoices_container').html(loader);

	$('#invoice_search input').keyup(function(){
		delayReload();
	});
	$('#invoice_search select').change(function(){
		delayReload();
	});

	function delayReload() {
		$('#listing_invoices_container').html(loader);
		timer++;
		var boundary = timer;
		setTimeout(function() {
			reloadInvoice(boundary);
		}, 500);
	}
	
	function reloadInvoice(boundary) {
		if (boundary == timer) {
			var datas = $('#invoice_search').serialize();
			$.post($('#invoice_search').attr('action'), datas, function(callback) {
				$('#listing_invoices_container').html(callback);
			});
		}
	}

	//reloadInvoice(timer);
});