function logout() {
	$.ajax({
		type: "POST",
		data: {cmd: 'logout'},
		url: "process.php",
		success: function(data){

			window.location.assign("index.php")

		}
	});
}


function reserv_close() {
	if(confirm("ยืนยัน ปิดระบบการจอง หรือไม่?")){
		$.ajax({
			type: "POST",
			data: {cmd: 'reverv' ,status : 'close' },
			url: "process.php",
			success: function(data){

               //window.location.assign("index.php")
               location.reload();

           }
       });
	}
}

function reserv_open() {
	if(confirm("ยืนยัน เปิดระบบการจอง หรือไม่?")){
		$.ajax({
			type: "POST",
			data: {cmd: 'reverv' ,status : 'open' },
			url: "process.php",
			success: function(data){

               //window.location.assign("index.php")
               location.reload();

           }
       });
	}
}