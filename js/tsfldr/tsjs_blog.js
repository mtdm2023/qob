(function($) {
	$(document).ready(function() {

		$._ClrBlogFltrs = function() {
			$('#tsmultipsts_filtertxt').text('');
			$('#tsmultipsts_filtercatid').val('');
			$('.tsblgfltr_item').each(function() {
				$(this).removeClass('selected');
			});
		};

		$('.tsblgfltr_item').click(function() {
			$(this).toggleClass('selected');
			// Collect all selected items' data-srchcatid values
			var selectedValues = $('.tsblgfltr_item.selected').map(function() {
				return $(this).find('span').data('catid');
			}).get().join(',');

			// Update the input value, set to blank if no items are selected
			$('#tsmultipsts_filtercatid').val(selectedValues || '');
		});

	});
})(jQuery);