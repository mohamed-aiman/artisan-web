<template>
	<v-container fluid grid-list-md>
		<v-layout row wrap>
			<v-flex xs12 sm5 md3 v-for="item,key in items" :key="item.key" v-bind="{ [`xs${item.flex}`]: true }" style="text-align:center;">
				<v-avatar :tile="true" :size="300" class="elevation-10 overflow-hidden mt-5" color="red lighten-2">
					<v-layout row wrap>
						<v-flex md12>
							<!-- <v-btn outline block class="primary">BUTTON</v-btn> -->
			                <v-card color="green lighten-2" dark :to="item.path">
			                  <v-card-text>{{ item.title }}</v-card-text>
			                </v-card>
						</v-flex>
						<v-flex md12>
							<circle-row></circle-row>
						</v-flex>
					</v-layout>
				</v-avatar>
			</v-flex>
		</v-layout>
	</v-container>
</template>

<script>
import CircleRow from '@/js/components/core/CircleRow';
export default {
		components: {
			CircleRow
		},
	  data () {
	    return {
			items: [
		      { id: 100, title: 'Favorite road trips', src: '/pics/1.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Bodu Beru', src: '/pics/2.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/3.jpg', flex: 3, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: '/pics/1.jpg', flex: 3, path: '/about', 'color': 'grey' },
  		      { id: 100, title: 'Favorite road trips', src: '/pics/1.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Bodu Beru', src: '/pics/2.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/3.jpg', flex: 3, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: '/pics/3.jpg', flex: 3, path: '/about', 'color': 'black' },
		    ]
	    }
	  },
	  methods: {
	  	goToProfile(item) {
	  		this.$router.push({ name: 'profile', params: { id: item.id } });
	  	}
	  }
}
</script>