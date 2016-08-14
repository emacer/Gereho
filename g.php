<?php
require_once 'phplot.php';

$data = array(
  array('Pos', $_GET['pos']), 
  array('Neg', $_GET['neg'])
);

$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

# Main plot title:
$plot->SetTitle('Falsos Negativos');

# Make a legend for the 3 data sets plotted:
$plot->SetLegend(array('FP', 'FN'));

# Turn off X tick labels and ticks because they don't apply here:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();
