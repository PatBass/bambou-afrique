$(document).ready(function(){
	var timer = 0;

	$('.remove_invoice').click(function(){
		if (confirm('Supprimer la facture en projet ?')) {
			return true;
		}

		return false;
	});

	$('#sort_lines').sortable({ 
		handle: '.move',
		cancel: '',
		helper: 'clone',
		stop: function(event, ui) {
			var prepared = [];
			$('#sort_lines').children('tr').each(function(key, item) {
				prepared.push($(this).attr('data-ref'));
			});
			saveSort(prepared);
		}
	});

	$('#update_invoice_form input').keyup(function(){ preCalculTotal(); });
	$('#update_invoice_form select').change(function(){ preCalculTotal(); });

	$('.add_invoice_line').click(function(){
		var datas = $('#update_invoice_form').serialize();
		var href = $('.add_invoice_line').attr('href');
		$.post($('#update_invoice_form').attr('action'), datas, function(callback) {
			window.location = href;
		});

		return false;
	});

	$('#add_client').click(function() {
		addClient();
	});
	
	function addClient()
	{
		$('#add_client_panel').toggle();
		$('#add_client_panel').prev().toggle();
	}

	function saveSort(prepared) {
		var url = $('#sort_lines').attr('data-url');
		$.post(url, { reflines: prepared }, function(data){});
	}

	function preCalculTotal() {
		timer++;
		var boundary = timer;
		setTimeout(function() {
			calculTotaux(boundary);
		}, 500);
	}

	function calculTotaux(boundary) {
		if (boundary == timer) {
			var ttc = 0;
			var ht = 0;
			var tax = 0;
			$('.invoice_ln_amount').each(function(){
				var container = $(this).parent('tr');
				var lnttc = parseFloat($(this).children('input').val()).toFixed(2);
				var lntax = parseFloat(container.children('.invoice_ln_tax').children('select').val());
				var lnqt = parseInt(container.children('.invoice_ln_quantity').children('input').val());
				
				var lnttttc = lnttc * lnqt;
				var lnttht = (lnttttc / (1 + (lntax / 100)));
				var lntttax = lnttht * (lntax / 100);

				ttc += (Math.round(lnttttc * 100)) / 100;
				ht  += (Math.round(lnttht * 100)) / 100;
				tax += (Math.round(lntttax * 100)) / 100;

				container.children('.total_ln').html(lnttht.toFixed(2) + "€");
			});

			if ($('.invoice_ln_amount').size() == 0) {
				ttc = parseFloat($('#invoice_tt_ttc_out').attr('data-total-invoice'));
			} else {
				$('.invoice_tt_ht').html(ht.toFixed(2) + "€");
				$('.invoice_tt_tax').html(tax.toFixed(2) + "€");
				$('.invoice_tt_ttc').html(ttc.toFixed(2) + "€");
			}

			var diff = ttc.toFixed(2) - $('#invoice_tt_ttc_in').attr('data-total-payement');
			$('#invoice_tt_ttc_out').html(diff.toFixed(2) + "€");
		}
	}

	calculTotaux(timer);
});