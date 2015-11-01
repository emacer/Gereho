function pedirGaleria(url){
    $.ajax({                                      
        url: url,
        type: 'get',
        success: function(response) {
            $('#zoomwall').html(response);
            zoomwall.create(document.getElementById('zoomwall'), true);
        },      
        error: function() {
			alert("result is not OK");
		},
    });
}