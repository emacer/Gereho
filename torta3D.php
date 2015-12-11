<?php

function graficarTorta(){
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
	// $graph->title->Set("Grafico Estadistico");

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
}

function graficarBarras(){
	require_once("jpgraph/src/jpgraph.php");
	require_once("jpgraph/src/jpgraph_bar.php");
	 
	$datos = array($_GET['pos'], $_GET['neg']);
	 
	//Instancia del objeto del tipo Graph en donde como parametro
	// se le pasan los valore de ancho y altura
	$grafica = new Graph(400,300);
	$grafica->SetScale("textlin");
	 
	$grafica->SetBox(false);
	//Nombre de las columnas
	$columnas = array($_GET['lab1'], $_GET['lab2']);
	$grafica->xaxis->SetTickLabels($columnas);
	 
	//Objeto del tipo BarPlot que se le enviara a la grafica y el cual
	//recibe como parametros los datos a graficar
	$barras = new BarPlot($datos);
	 
	$grafica->Add($barras);
	//Color de los bordes 
	 
	//Color de borde de las barras
	$barras->SetColor("white");
	//Color de relleno de las barras
	$barras->SetFillColor("#4B0082");
	//Ancho de las barras
	$barras->SetWidth(45);
	 
	// $grafica->title->Set("Gráfica de Barras");
	$grafica->title->SetFont(FF_TIMES,FS_ITALIC,18);
	$grafica->Stroke();
}


if ($_GET['grafico']){
	graficarTorta();
}else{
	graficarBarras();
}
?>