<template>
	<v-container fluid grid-list-md>
		<v-layout row wrap align-center justify-center>
			<v-flex xs12 sm12 md7>
				<v-card>
					<v-layout row wrap>
						<v-flex xs12 sm12 md3 class="pa-3">
							<profile-picture></profile-picture>
						</v-flex>
						<v-flex xs12 sm12 md8 tag="div">
							<v-layout row wrap  align-center justify-space-between>
								<v-flex xs12 sm12 md12 >
									<v-layout row wrap align-space-between justify-center fill-height>
										<v-flex xs12 sm12 md12>
							  				<!-- <v-card fill-height> -->
								  				<!-- <v-card fill-height> -->
													<div class="title font-weight-light pa-3">
													Mohamed Aiman
												    <v-chip color="teal" text-color="white">
												      <v-avatar>
												        <v-icon>check_circle</v-icon>
												      </v-avatar>
												      Verified
												    </v-chip>
													</div>
													<div class="pl-3 pt-2 pb-2 font-weight-thin font-italic">Developer, specialized in web application development. Social person who worries a lot about others. Working to make the world a better place.</div>
												<!-- </v-card> -->
												<!-- <v-card fill-height> -->
													<v-layout row wrap align-center justify-space-around>
														<v-flex xs12 sm12 md6>
															<v-layout row wrap>
																<v-flex md4 tag="div" class="body-2 font-weight-regular pl-3 pt-2">Location1</v-flex>
																<v-flex md8 tag="div" class="font-weight-light font-italic pl-3 pt-2">Maldives1</v-flex>
															</v-layout>
														</v-flex>
														<v-flex xs12 sm12 md6>
															<v-layout row wrap>
																<v-flex md4 tag="div" class="body-2 font-weight-regular pl-3 pt-2">Location2</v-flex>
																<v-flex md8 tag="div" class="font-weight-light font-italic pl-3 pt-2">Maldives2</v-flex>
															</v-layout>
														</v-flex>
													</v-layout>
													<v-layout row wrap align-center justify-space-around>
														<v-flex xs12 sm12 md6>
															<v-layout row wrap>
																<v-flex md4 tag="div" class="body-2 font-weight-regular pl-3 pt-2">Location3</v-flex>
																<v-flex md8 tag="div" class="font-weight-light font-italic pl-3 pt-2">Maldives3</v-flex>
															</v-layout>
														</v-flex>
														<v-flex xs12 sm12 md6>
															<v-layout row wrap>
																<v-flex md4 tag="div" class="body-2 font-weight-regular pl-3 pt-2">Location4</v-flex>
																<v-flex md8 tag="div" class="font-weight-light font-italic pl-3 pt-2">Maldives4</v-flex>
															</v-layout>
														</v-flex>
													</v-layout>
												<!-- </v-card> -->
							    			<!-- </v-card> -->
							    		</v-flex>
					    			</v-layout>
					    		</v-flex>
				    		</v-layout>
						</v-flex>
						<v-flex md1 class="text-xs-center red lighten-2">
							<!-- <div > -->
							<v-layout row wrap  align-center justify-center>
									<v-flex xs1 sm1 md12 ma-1><v-icon medium red>face</v-icon></v-flex>
									<v-flex xs1 sm1 md12 ma-1><v-icon medium red>face</v-icon></v-flex>
									<v-flex xs1 sm1 md12 ma-1><v-icon medium red>face</v-icon></v-flex>
									<v-flex xs1 sm1 md12 ma-1><v-icon medium red>face</v-icon></v-flex>
							</v-layout>
							<!-- </div> -->
						</v-flex>
					</v-layout>
				</v-card>
			</v-flex>
		</v-layout>
	</v-container>
</template>


<script>
import ProfilePicture from '@/js/components/profile/ProfilePicture';
export default {
	components: {
		ProfilePicture
	}
}
</script>