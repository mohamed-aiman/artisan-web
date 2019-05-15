<template>
	<v-container
	fluid
	grid-list-md
	>
		<v-layout row wrap>
			<v-flex
			v-for="item,key in items"
			:key="item.key"
			>
				<v-avatar
	            @click="goToProfile(item)"
				:tile="false"
				color="grey lighten-4"
				class="elevation-10"
				d-inline
				>
					<img :src="item.src" alt="avatar">  
				</v-avatar>

			</v-flex>
		</v-layout>
	</v-container>
</template>

<script>
export default {
	  data () {
	    return {
			items: [
		      { id: 100, title: 'Favorite road trips', src: '/pics/1.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/3.jpg', flex: 1, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
  		      { id: 100, title: 'Favorite road trips', src: '/pics/1.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/3.jpg', flex: 1, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: '/pics/2.jpg', flex: 1, path: '/about', 'color': 'grey' },
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
