<template>
	<div class="card col-8" v-if="load">
		<div class="card-header"> {{pokemon.name}} </div>
		<div class="card-body">
			<div class="d-flex justify-content-center">
				<img :src="pokemon.sprites.front_default" />
				<img :src="pokemon.sprites.back_default" />
			</div>
			<hr>
			<h2 class="h5">abilities</h2>
			<ul>

				<li v-for="(ability, index) in pokemon.abilities" :key="index">
					{{ability.ability.name}}
				</li>
			</ul>
		</div>

	</div>
</template>

<script>
	export default {
		props: ['pokemon_id'],
		data() {
			return {
				pokemon: {},
				load: false
			}
		},
		created() {
			this.getPokemon()
		},
		methods: {
			async getPokemon() {
				const { data } = await axios.get(`https://pokeapi.co/api/v2/pokemon/${this.pokemon_id}`)
				this.load = true
				this.pokemon = data
			}
		}
	}
</script>
