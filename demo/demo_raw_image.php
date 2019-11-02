<?php

include("../BarGraph.php");

$data = ["Ene" => 114.3, "Feb" => 55, "Mar" => 20, "Abr" => 100];
$graph = new BarGraph(300, 400);
$graph->setData($data);

$file_handler = fopen("bar_graph_image.png", "w");
$file_contents = $graph->generate();
fwrite($file_handler, $file_contents);
fclose($file_handler);
?>