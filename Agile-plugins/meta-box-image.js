/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame;
 
    // Runs when the image button is clicked.
    $('.cliccando').click(function(e){
        e.preventDefault();
        var appo = this.id;
        var arr = appo.split('-');
        var fine = arr[1];
    
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: meta_image.title,
            button: { text:  meta_image.button },
            library: { type: 'image' }
        });
 
        // Runs when an image is selected.
        meta_image_frame.on('select', function(){
 
            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
        
            
            // Sends the attachment URL to our custom image input field.
             $('#' + fine).val(media_attachment.url);
        });
 
        // Opens the media library frame.
        meta_image_frame.open();
    });

});