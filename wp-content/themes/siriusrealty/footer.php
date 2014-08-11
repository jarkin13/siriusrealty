<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package siriusrealty
 */

 $url = get_template_directory_uri(); ?>
	</div><!-- #content -->
	<section class="ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large">
				<p>At the present time, eminent breeders try by methodical selection, with a distinct object in view, to make a new strain or sub-breed, superior to anything of the kind in the country. But, for our purpose, a form of selection, which may be called unconscious, and which results from every one trying to possess and breed from the best individual animals, is more important. Thus, a man who intends keeping pointers naturally tries to get as good dogs as he can, and afterwards breeds from his own best dogs, but he has no wish or expectation of permanently altering the breed. Nevertheless we may infer that this process, continued during centuries, would improve and modify any breed, in the same way as Bakewell, Collins, etc., by this very same process, only carried on more methodically, did greatly modify, even during their lifetimes, the forms and qualities of their cattle. Slow and insensible changes of this kind could never be recognised unless actual measurements or careful drawings of the breeds in question have been made long ago, which may serve for comparison. In some cases, however, unchanged, or but little changed, individuals of the same breed exist in less civilised districts, where the breed has been less improved. There is reason to believe that King Charles' spaniel has been unconsciously modified to a large extent since the time of that monarch. Some highly competent authorities are convinced that the setter is directly derived from the spaniel, and has probably been slowly altered from it. It is known that the English pointer has been greatly changed within the last century, and in this case the change has, it is believed, been chiefly effected by crosses with the foxhound; but what concerns us is, that the change has been effected unconsciously and gradually, and yet so effectually that, though the old Spanish pointer certainly came from Spain, Mr. Borrow has not seen, as I am informed by him, any native dog in Spain like our pointer.</p>
				<p>By a similar process of selection, and by careful training, English race-horses have come to surpass in fleetness and size the parent Arabs, so that the latter, by the regulations for the Goodwood Races, are favoured in the weights which they carry. Lord Spencer and others have shown how the cattle of England have increased in weight and in early maturity, compared with the stock formerly kept in this country. By comparing the accounts given in various old treatises of the former and present state of carrier and tumbler pigeons in Britain, India, and Persia, we can trace the stages through which they have insensibly passed, and come to differ so greatly from the rock-pigeon.</p>
				<p>Youatt gives an excellent illustration of the effects of a course of selection which may be considered as unconscious, in so far that the breeders could never have expected, or even wished, to produce the result which ensued—namely, the production of the distinct strains. The two flocks of Leicester sheep kept by Mr. Buckley and Mr. Burgess, as Mr. Youatt remarks, "Have been purely bred from the original stock of Mr. Bakewell for upwards of fifty years. There is not a suspicion existing in the mind of any one at all acquainted with the subject that the owner of either of them has deviated in any one instance from the pure blood of Mr. Bakewell's flock, and yet the difference between the sheep possessed by these two gentlemen is so great that they have the appearance of being quite different varieties."</p>
				<p>If there exist savages so barbarous as never to think of the inherited character of the offspring of their domestic animals, yet any one animal particularly useful to them, for any special purpose, would be carefully preserved during famines and other accidents, to which savages are so liable, and such choice animals would thus generally leave more offspring than the inferior ones; so that in this case there would be a kind of unconscious selection going on. We see the value set on animals even by the barbarians of Tierra del Fuego, by their killing and devouring their old women, in times of dearth, as of less value than their dogs.</p>
			</section>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $url; ?>/inc/header-effects/js/waypoints.min.js"></script>
<script>
	var $head = $( '#masthead' );

	$( '.ha-waypoint' ).each( function(i) {
		var $el = $( this ),
			animClassDown = $el.data( 'animateDown' ),
			animClassUp = $el.data( 'animateUp' );

		$el.waypoint( function( direction ) {
			if( direction === 'down' && animClassDown ) {
				$head.attr('class', 'ha-header ' + animClassDown);

			}
			else if( direction === 'up' && animClassUp ){
				$head.attr('class', 'ha-header ' + animClassUp);

			}
		}, { offset: '100%' } );
	} );
</script>
</body>
</html>
