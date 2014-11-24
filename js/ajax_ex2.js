 (function($, window, document) { 
//	The $ is now locally scoped // Listen for the jQuery ready event on the document	
	$(function() { 
		// The DOM is ready!

		 var clickAction = $('#submit-my-ass').click(function(){
                  $('#loading').show('slow');
			$(this).prop('disabled', true);
			ajaxCall = $.ajax({
                        cache: false,
                        url: '../sandbox.php',
                        dataType: 'html',
                        success: function(data, textStatus, jqXHR){
                              $('#box').append(data);
                        },
                        complete: function(jqXHR, textStatus) {
                        	$('#submit-my-ass').prop('disabled', false);
                              $('#loading').hide('slow');

                        },
                        error:  function(jqXHR, textStatus, errorThrown){

                        }
                  });
		});		
			
	}); 

	// The rest of the code goes here! 
 }(window.jQuery, window, document)); 
// A helper function to add CSS dynamically to the head of the page
function addCSS(cssFileUrl) {
    $("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
      rel:  "stylesheet",
      type: "text/css",
      href: cssFileUrl
    });
}