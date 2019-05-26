<h1>Sunset Theme Support</h1>
<?php settings_errors(); ?>

<form class="sunset-general-form" method="post" action="options.php">
    <?php settings_fields('sunset-theme-support'); ?>
    <?php do_settings_sections('sunset_theme_options');  ?>
    <?php submit_button(); ?>
</form>
