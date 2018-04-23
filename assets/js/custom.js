(function($) {

	$('#tag-description').closest('.form-field').remove();
	$('#description').closest('.form-field').remove();
	
	$('.resource-contain .links:nth-child(even)').addClass('even');
	$('.resource-contain .links:nth-child(odd)').addClass('odd');
	
	//jQuery Math test
	
	$('data-key="field_5877e4eae14eb select').live('change', function() {
	
		var row = $(this).data('id');
	
		calculate_totals(this, row);
	
	});
	
	$('.invoice_qty').live('change', function() {
	
		var row = $(this).data('id');
	
		var element = $('#acf-field_587a4f235bb1e-' + row + '-field_5877e4eae14eb');
	
		calculate_totals(element, row);
	
	});
	

})(jQuery);
