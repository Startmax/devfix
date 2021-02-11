function popup_menu_script() {
?>
<script type="text/javascript">
	var el = null;
	jQuery(document).ready(function(){
		let element = document.querySelector( '.showpopup' );
		let popupposts = ['1368']; /* Popups IDs goes here */

		element.addEventListener( 'mouseenter', function(event){
			elementorProFrontend.modules.popup.showPopup( { id: popupposts[0] } );
			el = document.getElementById("elementor-popup-modal-1368");
			el.style.display = "block";
			
			let childEl = document.querySelector(".dialog-message");
			
			childEl.addEventListener( 'mousemove', function(event){
				el.style.display = "block";
			});
			
			el.addEventListener( 'mouseleave', function(event){
				el.style.display = "none";
			});
		});

		element.addEventListener( 'mouseleave', function(event){
			let leaveEl = el.getElementsByClassName("dialog-message")[0].getElementsByClassName("elementor-1368")[0].getElementsByClassName("elementor-section-wrap")[0].getElementsByClassName("elementor-section")[0].getElementsByClassName("elementor-container")[0].getElementsByClassName("elementor-row")[0].getElementsByClassName("elementor-element-43ebe56")[0].getElementsByClassName("elementor-widget-wrap")[0].getElementsByTagName("li")[0].getElementsByTagName("a")[0];
			
			let leaveOneEl = el.getElementsByClassName("dialog-message")[0].getElementsByClassName("elementor-1368")[0].getElementsByClassName("elementor-section-wrap")[0].getElementsByClassName("elementor-section")[0].getElementsByClassName("elementor-container")[0].getElementsByClassName("elementor-row")[0].getElementsByClassName("elementor-element-43ebe56")[0].getElementsByClassName("elementor-widget-wrap")[0].getElementsByTagName("li")[1];
			
			let leaveTwoEl = el.getElementsByClassName("dialog-message")[0].getElementsByClassName("elementor-1368")[0].getElementsByClassName("elementor-section-wrap")[0].getElementsByClassName("elementor-section")[0].getElementsByClassName("elementor-container")[0].getElementsByClassName("elementor-row")[0].getElementsByClassName("elementor-element-df88787")[0].getElementsByClassName("elementor-widget-wrap")[0];
			
			let leaveThreeEl = el.getElementsByClassName("dialog-message")[0].getElementsByClassName("elementor-1368")[0].getElementsByClassName("elementor-section-wrap")[0].getElementsByClassName("elementor-section")[0].getElementsByClassName("elementor-container")[0].getElementsByClassName("elementor-row")[0].getElementsByClassName("elementor-element-71a53cd")[0];
			
			
			let parentEl = document.getElementById("elementor-popup-modal-1368");
			
// 			leaveEl.addEventListener( 'mouseenter', function(event){
// 				parentEl.style.display = "block";
// 			});
			
// 			leaveEl.addEventListener( 'mouseleave', function(event){
// 				parentEl.style.display = "none";
// 			});
			
			leaveOneEl.addEventListener( 'mouseenter', function(event){
				parentEl.style.display = "none";
			});
			
			leaveTwoEl.addEventListener( 'mouseenter', function(event){
				parentEl.style.display = "none";
			});
			
			leaveThreeEl.addEventListener( 'mouseenter', function(event){
				parentEl.style.display = "none";
			});
		})
	})
	
</script>
<?php
}
add_action( 'wp_footer', 'popup_menu_script' );

function popup_menu_script_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_head' , 'popup_menu_script_jquery' );



