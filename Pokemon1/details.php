<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>PokeApi</title>
	<style type="text/css">
		body{
        background-color: black;
        color: white;
        font-family: serif;
        }
.heading{
    font-family: cursive;
    font-size: 35px;
    margin-left: 36%;
    background-color : initial;
    margin-bottom: 20px;
    margin-top: 16px;

    }
.data{
     display: grid;
      grid-template-columns: repeat(5,1fr);
      scroll-behavior: none;
      }
.pokmon-data img{
    vertical-align: middle;
    border-style: none;
    width: 194px;
    background-color: black;
    border: 3px solid white;
    cursor: pointer;
    box-shadow: 10px 7px 14px #d0c8c8;
      }
.details{
	margin-left:;
}
.details img{
    background-color: white;
    border-style: none;
    height: 150px;
    width: 220px;
    border-radius: 100%;
    /*margin-left: -560px;*/
}
.details h4{
	/*margin-left: -560px;*/
	border-bottom: 1px solid white;
}
.pokemon-name{
 /*margin-left: -290 !important;*/
 margin-top:15px;
 padding:10px;
}
.home-page{
  margin-top:30px;
}
.home-page a{
  color:white;
  font-size: 30px;
}
	</style>	
</head>
<body>
<?php
  $base = "http://pokeapi.co/api/v2/pokemon/";
?>
<div class="container">
  <div class="row">
    <div class="home-page"><h4><a href="http://localhost/Pokemon1/">Home</a></h4></div>
  	<div class="heading">PokeMon Data</div>
  	<div class="col-md-6">
 <?php
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$end = array_slice(explode('/', rtrim($actual_link, '/')), -1)[0];
$data = file_get_contents($base.$end.'/');
$pokemon = json_decode($data); 
?>
<h1 class="pokemon-name"><?php echo ucfirst($pokemon->name); ?> Details</h1>
<div class="details">
    <?php echo "<img src=".$pokemon->sprites->front_default .">"; ?>
    <h4>Id : <?php echo ($pokemon->id); ?></h4>
    <h4>Name : <?php echo ucfirst($pokemon->name); ?></h4>
    <h4>Height : <?php echo ($pokemon->height); ?></h4>
    <h4>Weight : <?php echo ($pokemon->weight); ?></h4>
</div>
    
<?php include 'include/footer.php';?>
