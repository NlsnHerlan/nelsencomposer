<?php 
    require_once './../vendor/autoload.php';

    // $faker = Faker\Faktory::craete();
    $faker = Faker\Factory::create();
    use Dompdf\Dompdf;

    $html="
        <table border='2px'>
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
            </thead>
        
    ";

    for($i = 1; $i < 11; $i++) 
        {
        
            $html .="<tr>";    
            $html .="<td>" .$i. "</td>";
            $html .="<td>" .$faker->name()."</td>";
            $html .="<td style='color:blue;'>" .$faker->email()."</td>";
            $html .="</tr>";
        } 
    



    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    // $html = "This Is Document PDF <h1> This IS very Colll</h1>";
    // $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();


        

