$(document).ready(function(e){
	// $('input[name=upload]').click(function() {
	// 	console.log('test1');
	// });

	$("input[name=upload]").click(function(event){
		event.preventDefault();

		var data = new FormData();
        var ins = document.getElementById('myfile').files.length;
        for (var x = 0; x < ins; x++) {
            data.append("myfile[]", document.getElementById('myfile').files[x]);
        }

		$.ajax({
			url: "controller.php",
			dataType: 'TEXT',
			cache: false,
			contentType: false,
			processData: false,
			type: "post",
			data: data,
			success: function (response) {
                $('#message').html(response); 

            },
            error: function (response) {
                $('#message').html(response); 
            }
		});
	});
});