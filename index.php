function popup_menu_script() {
?>
<script type="text/javascript">
  if ( undefined !== window.jQuery ) {
    document.addEventListener('DOMContentLoaded', function() {
let elements = document.querySelectorAll( '.showpopup' );
let popupposts = [ '1368']; /* Popups IDs goes here */

elements.forEach(function(e,i){
e.addEventListener( 'mouseenter', function(){
elementorProFrontend.modules.popup.showPopup( { id: popupposts[i] } );
} );

/* Wrong selector or event, as it closes the popup when mouse leaves hover of the menu item with class of .showpopup*/
e.addEventListener( 'mouseleave', function(event){
jQuery('body').click();
});

});
});
  }
</script>
<?php
}
add_action( 'wp_footer', 'popup_menu_script' );


function popup_menu_script_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_head' , 'popup_menu_script_jquery' );
