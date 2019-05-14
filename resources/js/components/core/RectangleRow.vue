<template>
	<v-container
  fluid
  grid-list-md
  >
    <v-layout row wrap>
      <v-flex
      xs12 sm5 md3
      v-for="card,key in cards"
      :key="key"
      v-bind="{ [`xs${card.flex}`]: true }"
      >
        <v-card :to="card.path"
        >
          <!-- <v-parallax -->
          <v-img
          class="elevation-10"
          :src="card.src"
          height="200px"
          >
            <v-container
            fill-height
            fluid
            pa-2
            >
              <v-layout
				      align-center
				      column
				      justify-center
				      fill-height
              >
                <v-flex xs12 align-center flexbox>
                  <span 
                  	class="headline" 
                  	v-bind:class="`${card.color}--text`"
                  	v-text="card.title"
                  	></span>
                </v-flex>
              </v-layout>
            </v-container>
          </v-img>
          <!-- </v-parallax> -->

<!--                   <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn icon>
              <v-icon>favorite</v-icon>
            </v-btn>
            <v-btn icon>
              <v-icon>bookmark</v-icon>
            </v-btn>
            <v-btn icon>
              <v-icon>share</v-icon>
            </v-btn>
          </v-card-actions> -->
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>

export default {
	data () {
	    return {
			cards: [
		      { title: 'Favorite road trips', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, path: '/about', 'color': 'grey' },
		      { title: 'Best airlines', src: 'https://i.ytimg.com/vi/spfN2TwD75k/maxresdefault.jpg', flex: 3, path: '/about', 'color': 'black' },
		      { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, path: '/about', 'color': 'grey' }
		    ]
	    }
	}
}
</script>
