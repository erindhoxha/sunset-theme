jQuery(document).ready(function($) {
   var mediaUploader;
   $('#upload-button').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frame = wp.media({
            title: 'Upload Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            console.log(attachment);
            $('#profile-picture').val(attachment.url);
            $('.profile-picture').css("background-image", "url(" + attachment.url + ")");
        });
        mediaUploader.open();
   });
});
