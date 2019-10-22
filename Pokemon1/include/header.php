<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>PokeApi</title>
	<link rel="stylesheet" type="text/css" href="template\style.css">
	<script type="text/javascript" src="template\script.js"></script>
	
</head>
<body>
<?php
  $base = "http://pokeapi.co/api/v2/pokemon/";
?>
<div class="container">
  <div class="row">
  	<div class="heading">PokeMon Data</div>
  	<div>
  		<div class="">
      <input type="input" id="txt-search" class="search-box" placeholder="Search PokMon ...">
  		</div>