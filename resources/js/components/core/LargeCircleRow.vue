<template>
	<v-container
	fluid
	grid-list-md
	>
		<v-layout 
		row 
		wrap
		>
			<v-flex
			xs12 sm5 md3
			v-for="item,key in items"
			:key="item.key"
	        v-bind="{ [`xs${item.flex}`]: true }"
			style="text-align:center;"
			>
				<v-avatar
				:tile="true"
				:size="300"
				class="elevation-10 overflow-hidden"
				:style="{'background-image': 'url(' + item.src + ')'}"
				style="background-size:cover; background-position: center center;"
				>
					<circle-row></circle-row>
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
		      { id: 100, title: 'Favorite road trips', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Bodu Beru', src: 'https://i.pinimg.com/originals/15/10/53/151053351d395728168a8cf5a983034a.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: 'https://i.ytimg.com/vi/spfN2TwD75k/maxresdefault.jpg', flex: 3, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, path: '/about', 'color': 'grey' },
  		      { id: 100, title: 'Favorite road trips', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Bodu Beru', src: 'https://i.pinimg.com/originals/15/10/53/151053351d395728168a8cf5a983034a.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { id: 100, title: 'Best airlines', src: 'https://i.ytimg.com/vi/spfN2TwD75k/maxresdefault.jpg', flex: 3, path: '/about', 'color': 'black' },
		      { id: 100, title: 'Best airlines', src: 'https://i.ytimg.com/vi/spfN2TwD75k/maxresdefault.jpg', flex: 3, path: '/about', 'color': 'black' },
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