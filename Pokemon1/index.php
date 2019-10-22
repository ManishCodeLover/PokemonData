<?php include 'include/header.php';?>
</div>
    <div class="col-sm data" id="allData">
       <?php
        for($id = 1; $id < 30; $id++){
        $data = file_get_contents($base.$id.'/');
        $pokemon = json_decode($data); ?>
    <div class="pokmon-data" id="pokemon_data"><a href="details.php\<?php echo"$id"; ?>"><?php echo "<img src=".$pokemon->sprites->front_default .">"; ?></a>
      	 <h4><?php echo ucfirst($pokemon->name); ?><h4>
    </div>
     <?php }
         ?>
    </div> 

<?php include 'include/footer.php';?>