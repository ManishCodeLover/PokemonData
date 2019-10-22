$(document).ready(function(){
	// const searchbar = document.querySelector('search-box');
	// $("#txt-search").addEventListener('keyup',function(e){
		$("#txt-search").keyup(function(e){

		var div=document.getElementById('allData');

		const term = e.target.value.toLowerCase();
		// const span = document.querySelector('#pokemon_data');
		const pokemon = div.getElementsByTagName('div');
		// console.log(pokemon);
		Array.from(pokemon).forEach(function(pokemon){
			const pokemonName=pokemon.getElementsByTagName('h4');
			const title = pokemon.innerText;
			// console.log(title);
			if(title.toLowerCase().indexOf(term) != -1){
				pokemon.style.display = 'block';
			}
			else{
				pokemon.style.display = 'none';
			}
		})

	});

	});