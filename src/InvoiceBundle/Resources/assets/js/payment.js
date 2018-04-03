$(document).ready(function(){
	$('.remove_payment').click(function(){
		if (confirm('Supprimer le paiement ?')) {
			return true;
		}

		return false;
	});
});