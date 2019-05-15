<template>
	<v-app id="inspire">
		<top-carousel></top-carousel>

		<v-layout row wrap>
			<v-flex>
				<!-- <v-parallax dark  -->
				 <!-- height="100%"> -->
				<!-- src="/pics/material-1.jpg" -->
					<!-- <v-spacer></v-spacer> -->
					<large-circle-row></large-circle-row>
			    <!-- </v-parallax> -->
	    	</v-flex>
		</v-layout>

<!-- 		<v-parallax dark src="https://cdn.vuetifyjs.com/images/parallax/material.jpg" height="100%">
			<rectangle-row></rectangle-row>
		</v-parallax> -->

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
