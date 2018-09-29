<?php
	require_once __DIR__ . '/vendor/autoload.php';

	use Mpdf\Mpdf;

	$mpdf = new Mpdf(['mode' => 'c']);

	$mpdf->showImageErrors = true;
	$mpdf->setBasePath('html');

	$html = file_get_contents('html/applicant.html');

	$mpdf->WriteHTML($html);

	$mpdf->Output();
?>
