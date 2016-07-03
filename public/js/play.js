jQuery(document).ready(function($)
{
	$('#next-track').click(function()
	{
		$.ajax(
		{
			'url': '/' +$('#languauge').html() + '/tracks/next/'+$('#mix-id').html()+'?token='+$('#token').html(),
			'success':
			function(data)
			{
				data = JSON.parse(data);
				if(!data.is_skip)
				{
					$('#next-track').prop('disabled', 'disabled');
				}
				else
					$('#next-track').removeAttr('disabled');
				
				$('#song-name').html(data.name);
				
				$('#audio').prop('src', data.stream);
				$('#audio').trigger('play');
			}
		});
	});
	
	
	$('#audio').on('ended', function() {
		$('#next-track').click().blur;
	});
	
	$('#add-to-bookmarks').click(function()
	{
		$.ajax(
		{
			'url': '/' +$('#language').html() + '/tracks/add_to_bookmarks/'+$('#mix-id').html(),
			'success':
			function(data)
			{
				//нужно было реализовать отдельный запрос на ленг пакеты
				$('#add-to-bookmarks').html($('#add-to-bookmarks-message-ok').html());
				$('#add-to-bookmarks').prop('disabled', 'disabled');
			}
		});
	});
});