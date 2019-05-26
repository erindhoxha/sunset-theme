<h1>Sunset Sidebar Options</h1>
<?php
        $picture = esc_attr(get_option('profile_picture'));
        $firstName = esc_attr(get_option('first_name'));
        $lastName = esc_attr(get_option('last_name'));
        $fullName = $firstName . ' ' . $lastName;
        $descr = esc_attr(get_option('user_description'));
?>
<?php settings_errors(); ?>

<form class="sunset-general-form" method="post" action="options.php">
    <?php settings_fields('sunset-settings-group'); ?>
    <?php do_settings_sections('erind_sunset');  ?>
    <?php submit_button(); ?>
</form>
<div class="sunset-sidebar-preview">
    <div class="sunset-sidebar">
        <div class="image-container">
            <div class="profile-picture" style="background-image:url(<?php echo $picture ?>)">
            </div>
        </div>
        <h3 class="sunset-username">Welcome, <?php echo $fullName ?></h3>
        <h2 class="sunset-description"><?php print $descr ?></h2>
        <div class="icons-wrapper"></div>
    </div>
</div>