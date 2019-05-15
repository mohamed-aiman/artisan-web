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
				  src: '/pics/4.jpg'
				},
				{
				  src: '/pics/6.jpg'
				},
				{
				  src: '/pics/1.jpg'
				},
				{
				  src: '/pics/5.jpg'
				}
			]
		}
	}
}

</script>