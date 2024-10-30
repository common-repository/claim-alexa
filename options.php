<div class="wrap">
<h2>Claim Alexa</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('alexa_verification'); ?>

<p>Insert your Alexa verification meta-tag below:</p>

<textarea name="alexa_code" id="alexa_code" rows="3"  cols="65" >
<?php echo get_option('alexa_code'); ?> </textarea>


<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
Have a question? Drop us a question at <a href="http://onlineads.lt/?utm_source=WordPress&utm_medium=Claim+Alexa+-+Options+page&utm_campaign=WordPress+plugins" title="Claim Alexa">OnlineAds.lt</a>
</div>
