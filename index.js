$('#btn1').click(function(){
	$.ajax({
		url: 'ajax.php',
		methodType: 'JSON',
		method: 'POST',
		data: {
			dane: 'string'
		},
		success: function(tekst) {
			//twoj tekst to po prostu zwykly tekst jaki wyprintowalo php w pliku ajax.php
			console.log(tekst);
			//wiec go sobie mozna po prostu wyalertowac
			alert (tekst)
		}
	});	
})
$('#btn2').click(function(){
	$.ajax({
		url: 'ajax.php',
		methodType: 'JSON',
		method: 'POST',
		data: {
			dane: 'array'
		},
		success: function(json) {
			console.log(json);
			//w tym przypadku dostales jsona. php przerobilo tablice na jsona w pliku ajax.php
			//zeby moc go przeloopowac to musisz przekonwertowac go na obiekt bo teraz to jest
			//po prostu uporzadkowanym tekstem. w konwencji jsona co prawda ale wciaz to tylko 
			//tekst. moglbys uzyc innych loopow typu for czy while. w tym przypadku jest each
			$.each(JSON.parse(json), function(k, v){
				alert('klucz = ' + k + ' wartosc = ' + v)
			});
		}
	});	
})
$('#btn3').click(function(){
	$.ajax({
		url: 'ajax.php',
		methodType: 'JSON',
		method: 'POST',
		data: {
			dane: 'mysql'
		},
		success: function(mysql) {
			//twoj mysql to znowu zwykly tekst pobrany z bazy przez php w pliku ajax.php
			console.log(mysql);
			//wiec go sobie mozna znowu wyalertowac
			alert (mysql)
		}
	});	
})