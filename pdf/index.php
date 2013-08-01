<?php

require("hpdf/html2fpdf.php"); 
 
			$htmlFile = "http://www.google.mu/search?hl=en&q=php+pdf+&aq=f&aqi=&aql=&oq=&gs_rfai="; 
			$buffer = file_get_contents($htmlFile); 
 
			$pdf = new HTML2FPDF('P', 'mm', 'Letter'); 
			$pdf->AddPage(); 
			$pdf->WriteHTML($buffer); 
			$pdf->Output('tsest.pdf', 'F'); 							
	
	?>