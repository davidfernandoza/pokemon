<template>
	<div class="card col-4 my-2 py-3" v-for="(pokemon, index) in this.pokemons.results" :key="index">
		<a :href="`/view/pokemon/${getIdPokemon(pokemon.url)}`">
			<div class="card-body"> {{pokemon.name}} </div>
		</a>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				pokemons: []
			}
		},
		created() {
			this.getPokemons()
		},
		methods: {
			async getPokemons() {
				const { data } = await axios.get('https://pokeapi.co/api/v2/pokemon/')
				this.pokemons = data
			},
			getIdPokemon(url) {
				return url.slice(-2, -1)
			}
		}
	}
</script>
