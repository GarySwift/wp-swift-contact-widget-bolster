<?php 
$widget_id = "widget_" . $args["widget_id"];
if ( get_field('address', 'option') ) :
	$address = get_field('address', 'option');
	// $address = str_replace('<br />', ', ', $address);
endif;
if ( function_exists('get_phone') )  {
    $office_readable = get_phone('office_phone');
    $office = get_phone('office_phone', true);
	$value = '<span class="key-value phone"><span class="key">Tel: </span><span class="value"><a href="tel:'.$office.'">'.$office_readable.'</a></span></span>';
}
if( get_field('email', 'option') ) {
    $email = get_field('email', 'option');
}
?>
<article class="column column-block widget widget_nav_menu <?php echo $widget_id; ?>">
<div id="footer-contact-widget">

<h6>Contact Details</h6>

	<?php if (isset($office)): ?>
		<div class="contact-method phone">
			<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span><!-- 
			 --><span class="key phone">Telephone</span><!-- 
			 --><span class="value phone"><a href="tel:><?php echo $office; ?>"><?php echo $office_readable; ?></a></span>
		</div>		
	<?php endif ?>

	<?php if (isset($email)): ?>
		<div class="contact-method email">
			<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><!-- 
			 --><span class="key email">Email</span><!-- 
			 --><span class="value email"><a href="mailto:><?php echo $email; ?>"><?php echo $email; ?></a></span>
		</div>	
	<?php endif ?>

	<?php if (isset($address)): ?>
		<div class="contact-method address">
			<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><!-- 
			 --><span class="key address">Address</span><!-- 
			 --><span class="value address"> <?php echo $address; ?></span>
		</div>
	<?php endif ?>
<!-- <h6>Social Media</h6> -->
	<?php if (function_exists('show_social_media')) {
		// show_social_media();
	} ?>

</div>
</article>