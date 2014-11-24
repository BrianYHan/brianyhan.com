 (function($, window, document) { 
//	The $ is now locally scoped // Listen for the jQuery ready event on the document	
	$(function() { 
		// The DOM is ready!
		$.ajax({
            type: "GET",
            url: "js/nutrition.xml",
            cache: false,
            dataType: "xml",
            success: function(xml) {
            	count = 0;
              	$(xml).find('food').each(function(){
              		var tableRow = $('<tr>')
              					.attr('class', 'row-num-' + count);

	              	count = count + 1;

	                $(this).find("name").each(function(){
	                	// console.log(tableRow);
	                    var name = $(this).text();
	                    // $('<div>' + name + '</div>').appendTo($('table tbody'));
	                    appendToRow(name, tableRow);
	                });
	              	$(this).find("calories").each(function(){
	                    var calories = $(this).attr('total');
	                   	appendToRow(calories, tableRow);

	                });
	                $(this).find("sodium").each(function(){
	                    var sodium = $(this).text();
	                  	appendToRow(sodium, tableRow);
	                });
	                $(this).find("vitamins").each(function(){
	                    var vitamins = $(this).text();
	                	appendToRow(vitamins, tableRow);
	                });
	                // console.log(tableRow);
	               	tableRow.appendTo($('table tbody'));

              });
            }
        });
	}); 
	 function appendToRow(rowInfo, row){
		tableCell = $('<td>').text(rowInfo);
		tableCell.appendTo(row);
	}
	// The rest of the code goes here! 
 }(window.jQuery, window, document)); 
