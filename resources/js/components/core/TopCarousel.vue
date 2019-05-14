<template>
	<v-carousel 
	hide-delimiters
    hide-controls
    dark
	>
		<v-carousel-item
		v-for="(item,i) in items"
		:key="i"
		:src="item.src"
		>
			<carousel-hero></carousel-hero>

		</v-carousel-item>
	</v-carousel>
</template>

<script>
import CarouselHero from '@/js/components/core/CarouselHero';
export default {
	components: {
	  	CarouselHero
	},
	data () {
	    return {
			items: [
				{
				  src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg'
				},
				{
				  src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg'
				},
				{
				  src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg'
				},
				{
				  src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg'
				}
			]
		}
	}
}

</script>