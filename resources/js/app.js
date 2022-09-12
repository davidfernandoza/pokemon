import './bootstrap'
import { createApp } from 'vue'
import PokemonList from '@/components/PokemonList.vue'
import Pokemon from '@/components/Pokemon.vue'

const app = createApp({ components: { PokemonList, Pokemon } })
app.mount('#app')
