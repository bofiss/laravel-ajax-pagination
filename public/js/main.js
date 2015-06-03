$(document).on('click', '.pagination a', function(e){
	e.preventDefault();

	var page = $(this).attr('href').split('page=')[1];
    getProducts(page);
});

function getProducts(page){
    $.ajax({
    	url: '?page='+ page,
    	dataType: 'json',
    }).done(function(data){
    	$('.content').html(data);
    }).fail(function () {
                alert('Posts could not be loaded.');
    });
}