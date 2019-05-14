<template>
	<v-app id="inspire">
		<top-carousel></top-carousel>

		<v-parallax dark src="https://cdn.vuetifyjs.com/images/parallax/material.jpg" height="100%">
			<!-- <v-spacer></v-spacer> -->
			<large-circle-row></large-circle-row>
	    </v-parallax>


		<v-parallax dark src="https://cdn.vuetifyjs.com/images/parallax/material.jpg" height="100%">
			<rectangle-row></rectangle-row>
		</v-parallax>
	</v-app>
</template>


<script>
import TopCarousel from '@/js/components/core/TopCarousel';
import LargeCircleRow from '@/js/components/core/LargeCircleRow';
import RectangleRow from '@/js/components/core/RectangleRow';
export default {
	components: {
		TopCarousel,
		LargeCircleRow,
		RectangleRow,
	}
}
</script>
