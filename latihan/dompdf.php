<?php 
    require_once './../vendor/autoload.php';

    $faker = Faker\Faktory::craete();
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $html = "This Is Document PDF <h1> This IS very Colll</h1>";
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();

    ?>
