<?php
require ('jpgraph/src/jpgraph.php');
require ('jpgraph/src/jpgraph_pie.php');
require ('jpgraph/src/jpgraph_pie3d.php');

// Some data
$data = array($_GET['pos'], $_GET['neg']);

// Create the Pie Graph. 
$graph = new PieGraph(350,300);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
$graph->title->Set("Grafico Estadistico");

// Create
$p1 = new PiePlot3D($data);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
$p1->SetLegends(array($_GET['lab1'], $_GET['lab2']));
$p1->SetCenter(0.5,0.4);
$p1->SetAngle(40);

$graph->Add($p1);
$graph->Stroke();
?>