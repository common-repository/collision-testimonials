<?php
	$siteurl = get_option('siteurl');
	$url = $siteurl . '/wp-content/plugins/' . "collision-testimonials" . '/i/css/admin.css';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>" />

<div class="wrap">
<h2>Collision Testimonial Tags</h2>
<h3 style="color:#f00;margin:10px 0 30px;">Collision Testimonials is now <a href="http://bestimonials.backendlabs.com/">Bestimonials</a>. Get it today!</h3>
<div id="codetags">
<p>1. <code>&lt;?php collision_testimonials(); ?&gt;</code> - This will display the number of testimonials you have selected on the <a href="admin.php?page=testimonial_settings">settings page</a>. To use this tag, all you need to do is insert this code into your theme where you want the testimonials to display (e.g. sidebar.php, footer.php, header.php, single.php, etc).<br />
<strong>NOTE: You can't insert this tag into the WordPress editor, it must be placed directly into your template file where you want your testimonials displayed.</strong></p><br /><hr /><br />

<p>2. <code>&lt;?php collision_testimonials($id="4"); ?&gt;</code> - You can target which testimonial to display on a certain page by specifying the ID. You can also do more advanced statements like so...</p>

	<blockquote><code>
		&lt;?php
			if(is_home()) {
				collision_testimonials($id="4");
			}
			
			else {
				collision_testimonials();
			}
		?&gt;
	</code></blockquote>

<p>You can also select multiple testimonials for a page, and have them displayed in the order you'd like.</p>

	<blockquote><code>
		&lt;?php
			if(is_home()) {
				collision_testimonials($id="5,4,6");
			}
			
			else {
				collision_testimonials();
			}
		?&gt;
	</code></blockquote>
	
<p>Keep in mind, even though you are targeting what testimonials are displayed, permissions still apply.  This method should be used by an experienced programmer, as it requires knowledge of PHP programming.  If you have questions, or need help, feel free to contact us for support.</p><br /><hr /><br />

<p>3. <code>&lt;!-- collision_testimonials_page --&gt;</code> - This tag allows you to create a testimonials page where all your testimonials are displayed. In order to use this tag, just edit the page or post where you want your testimonials displayed (use the WordPress Editor), then switch to HTML view, and paste the tag in where you'd like the testimonials to be displayed.</p><br /><hr /><br />

<p>4. <code>&lt;!-- collision_testimonials_form --&gt;</code> - This tag allows you to have a form where visitors can submit testimonials to your site. All submitted testimonials are marked as "Pending Approval", and aren't displayed until an administrator approved them. The admin email on file is notified when a new testimonial submission is entered into the database.  Make sure you keep that updated under the <a href="admin.php?page=testimonial_settings">settings page</a>. To use this tag, just edit the page or post where you want your testimonials displayed (use the WordPress Editor), then switch to HTML view, and paste the tag in where you'd like the testimonial submission form to be displayed.</p>

</div>
</div>