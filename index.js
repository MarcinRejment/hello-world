<script>
function relogin() {
	$.ajax({
		url: 'ajax.php',
		methodType: 'JSON',
		method: 'POST',
		data: {
			dane_1: "111",
			dane_1: "222",
		},
		success: function(json) {
			console.log(json);
		}
	});	
}
</script>