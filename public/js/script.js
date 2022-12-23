$('#poli').on('change', function(){
	console.log('Change List Ajax');
	//const id = $(this).data('#select idpoli');
	var id = $("#poli option:selected").attr("ids");
//	var id = $(this).children("option:selected").attr("idpoli");

$.ajax({
    url : 'daftarPolipasien',
    data : {id : id },
    method : 'GET',
    dataType : 'json',

    success: function(d){
        var text = "";
        var i;
        if (d.length == 0) {
            result = "<option>Data tidak ditemukan</option>"
            //d.innerHTML += result
              $('#dokter').html(result);
          
        } else {
        for (i = 0; i < d.length; i++) {
          //text += d[i]['name'] + "</option><br>";
        //console.log(d[i]['name'])
          
          text += "<option  value="+d[i]['id']+">"+d[i]['name']+"</option>";
            //d.innerHTML += result
              $('#dokter').html(text);
        
        }}
    
    //	const array = [d]
    // console.log(array);
    //		$('#dokter').html(array);
            //$('.dokter').html(d);
        
        }
    });


});