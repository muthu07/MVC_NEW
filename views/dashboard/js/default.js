$(function() {
	
	$.get('dashboard/xhrGetListings', function(o) {
	
		for (var i = 0; i < o.length; i++)
		{
			$('#listInserts').append('<p>' + o[i].product_name + '<a class="del" rel="'+o[i].id+'" href="#">X</a></p>');
		}
		$(document).on("click", ".del", function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			$.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
				delItem.parent().remove();
			}, 'json');
		});
	}, 'json');
		
	$('#randomInsert').submit(function() {
			var url = $(this).attr('action');
			var data = $(this).serialize();
			$.post(url, data, function(o) {
				$('#listInserts').append('<p>' + o.product_name + '<a class="del" rel="'+ o.id +'" href="#">X</a></p>');
			}, 'json');
			return false;
	});
		
		
});