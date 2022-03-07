<?php?>
<html>
<head>
    <title>Integral calculation</title>
    <style>
        body {
    font-family: "Source Code Pro", sans-serif;
    font-size: 16px;
}
.container {
    width:1080px;
    display: grid;
    margin:0 auto;
}
.row {
    margin:0;
    padding:0;
}
.col {
    margin:0;
    padding:0;
}
</style>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col">
<h1>Calculate Integrals by Newton-Leybnitz</h1>
        </div>
        </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
                set_time_limit(600);
                include("i.php");
                //new function_diagram(horizental dimention, vertical dimention, x start, x end,  background color_red_, background color_green_, 
                //						background color_blue_,  arc color_red_, arc color_green_, arc color_blue_, function, 
                //						calculation step, parameter to determine grid drawing);
                //---- a test, gets these parameters from index.html as a form . 
                $show=new integral_diagram($_POST["x"],$_POST["y"], $_POST["x_start"],$_POST["x_end"], $_POST["br"],$_POST["bg"],$_POST["bb"],$_POST["ar"],$_POST["ag"],$_POST["ab"],$_POST["eqx"],$_POST["step"],$_POST["hasgrid"]);
                //---- call draw mwthod of created object to get the diagram as a jbg file.
                $show->draw();	
            ?>
            </div>
        </div>
    </div>
    <body>
<?php?>