jQuery(document).ready(function($)
{
	var current_page = 1;
	$('#load-more').click(function()
	{
		current_page ++;
		$.ajax({
			'url': '/' + $('#language-code').html() + '/tracks/load_more?q='+ $('#query').html() + '&type=' + $('#type').html() +'&page='+current_page,
			'success':
				function (data)
				{
					if(data.replace('NEXT_PAGE_NO_EXISTS', '') != data)
					{
						data = data.replace('NEXT_PAGE_NO_EXISTS', '');
						$('#load-more').hide();
					}
					$('#tracks-list-container').html($('#tracks-list-container').html() + data);
				}
			
		});
	});
});