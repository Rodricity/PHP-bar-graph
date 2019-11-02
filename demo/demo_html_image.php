<?php
include("../BarGraph.php");

$data = ["Ene"=> 114.3, "Feb" => 55, "Mar" => 20, "Abr" => 100];
$graph = new BarGraph(300,400);
$graph->setData($data);

echo $graph->generate(true);

?>