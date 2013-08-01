<?php
require_once("1/dompdf_config.inc.php");

$html =
  '<html><body>'.
  '<p>Put your html here, or generate it with your favourite '.
  'templating system.</p>'. '<p>Put your html here, or generate it with your favourite '.
  'templating system.</p>
  <form action="">
	<input type="text" />
	</form></body></html>';
	
$html = file_get_contents("form.html");

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");

?>