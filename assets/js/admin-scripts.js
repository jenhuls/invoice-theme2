jQuery(document).ready(function($){

	$( ".invoice_qty select" ).addClass( "invoice__qty" );
	$( ".invoice_hrs input[type=text]" ).addClass( "invoice__hrs" );
	$( ".line_total input[type=text]" ).addClass( "line__total" );
	$( ".invoice_total input[type=text]" ).addClass( "invoice__total" );

	$('.invoice_services tr').each(function () {
	    var $this = $(this),
	        sum = parseFloat($this.find('.invoice__hrs').val()) * parseFloat($this.find('.invoice__qty').val());
			
			$this.find('.line__total').val(sum);		
	});
	    
	    console.log($('.invoice__total').val());

	 	
});