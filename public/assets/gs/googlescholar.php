<?php

header('Content-Type: application/json; charset=utf-8');

if(!isset($_GET["user"]))
	exit -1;

# create and load the HTML
include('simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file("http://scholar.google.se/citations?user=" . $_GET["user"]);

// print "{\n \"total_citations\": " . $html->find("#gsc_rsb_st td.gsc_rsb_std", 0)->plaintext . ",\n";

// $s = " \"Data Sitasi Dosen\" ";
$years = $html->find('.gsc_g_t');
$scores = $html->find('.gsc_g_al');
$kepala = '';
$kepala = " <table border='1'>
	<tr>
		<td>Tahun</td>
		
	
	
	";
	
	echo $kepala;
	foreach($scores as $key => $score) {
		$hai = '';
		$hai .= " 
		                     
			<td>".trim($years[$key]->plaintext). "</td>
			
			
		                
							 
						
		";
		
		echo $hai;
	
	
		// $s .= "\n  \"" . trim($years[$key]->plaintext) ."\": ". trim($score->plaintext) . ",";
	}
	$kepala2 = "
	
	</tr>
	<tr>
	<td>Sitasi</td>
	
	";
	echo $kepala2;
foreach($scores as $key => $score) {
	$hais = '';
	$hais .= " 
                       
		
		<td>".trim($score->plaintext)."</td>
                     
                         
                    
	";
	
	echo $hais;
	

	// $s .= "\n  \"" . trim($years[$key]->plaintext) ."\": ". trim($score->plaintext) . ",";
}echo "</tr>";
// print substr($s, 0, -1) . "\n },\n";


$str = " \"publications\": [";
$kepala3 = '';
$kepala3 = " <br> <table border='1'>
	<thead>
		<td>Judul</td>
		<td>Author</td>
		<td>Sitasi</td>
		<td>Tahun Terbit</td>
	</thead>";
	echo "Daftar Publikasi Dosen";
	echo $kepala3;
foreach($html->find("#gsc_a_t .gsc_a_tr") as $pub) {
	$hai2 = '';
	$hai2 .= 
	" <tr>
		<td>".trim($pub->find(".gsc_a_at", 0)->plaintext)."</td>
		<td>".trim($pub->find(".gs_gray", 0)->plaintext)."</td>
		<td>".$pub->find(".gsc_a_ac", 0)->plaintext."</td>
		<td>".$pub->find(".gsc_a_h", 0)->plaintext."</td>
	
	</tr> ";
	// $str .= "\n  {\n    \"title\": \"" . trim($pub->find(".gsc_a_at", 0)->plaintext);
	// $str .= "\",\n    \"authors\": \"" . trim($pub->find(".gs_gray", 0)->plaintext);
	// $str .= "\",\n    \"venue\": \"" .trim($pub->find(".gs_gray", 1)->plaintext);
	// if(!is_numeric($pub->find(".gsc_a_ac", 0)->plaintext))
	// 	$str .= "\",\n    \"citations\": 0";
	// else
	// 	$str .= "\",\n    \"citations\": " . $pub->find(".gsc_a_ac", 0)->plaintext;
	// if($pub->find(".gsc_a_h", 0)->plaintext == " ")
	// 	$str .= ",\n    \"year\": 0";
	// else
	// 	$str .= ",\n    \"year\": " . $pub->find(".gsc_a_h", 0)->plaintext;
	// $str .= "\n  },";
	echo $hai2;
}

// print substr($str, 0, -1) . "\n ]\n}";
?>
