var add = function(a,b){
	if(a && b){
		return a+b;	
	}else{
		return 'sorry need two nums';
	}
};

var newObject = {
	value: 0,
	increment: function(inc){
		this.value += typeof inc === 'number' ? inc+1 : 1;
		return this.value;
	}
}
// newObject.increment(39);

newObject.double = function(){
	var that = this;
	var helper = function(){
		that.value = add(that.value,that.value);
	};
	helper();
};
// newObject.double();
// console.log(newObject.value);


var quo = function(status){
	// 
	return {
		get_status: function(){
			return status;			
		}
	}
}

// Quo.prototype.get_status = function(){
// 	return this.status;
// }

var fart = quo('tickles');
// console.log(fart.get_status());
// console.log(fart.get_status(x));

var hanoi = function hanoi(disc, source, aux, end){
	if(disc > 0){
		hanoi(disc - 1, source, end, aux);
		console.log('Move Disc ' + disc + ' from ' + source + ' to ' + end);
		hanoi(disc -1, aux, source, end);
	}
};

// hanoi(3, 'Source', 'Aux', 'Destination');

// Walk the DOM function
var walk_the_DOM = function walk(node, func){
	func(node);
	node = node.firstChild;
	while(node){
		walk(node, func);
		node = node.nextSibling;
	}
};


// getElementsByAttribute function
var getElementsByAttribute = function(att, value){
	var results = [];

	walk_the_DOM(document.body, function(node){
		var actual = node.getAttribute(att);
		if(typeof actual === 'string' &&
			(actual === value || typeof value !== 'string')){
				results.push(node);
			}
	});
	console.log(results);
	return results;
};

var myObjectFunc = function myObjectFunc(value){
	while(value > 0){
		console.log(value);


		
		return {
			decrement: function(inc){
				value -= typeof inc === 'number' ? inc: 1;
				console.log(value);
				return value;
				// myObjectFunc(value);
			},
			getValue: function(value){
					console.log(value);
				return value;
			}
		}
	}

};

// Fades a dom's node color
var fade = function(node){
	var level = 1;
	var step = function(){
		var hex = level.toString(16);
		node.style.backgroundColor = '#FFFF' + hex + hex;
		if(level < 15){
			level += 1;
			console.log(hex);
			setTimeout(step, 100);
		}
	};
	setTimeout(step, 100);
}



// document.addEventListener('DOMContentLoaded', function(){
// 	fade(document.body);
// });



// var testPattern = function () {
// 	//private shorthand references to YUI utilities:
// 	// var yue = testPattern.util.Event,
// 	var	yud = jQuery(document);
// 		// console.log(yue);
// 		// console.log(yud);
// 	//private method:
// 	var getListItems = function () {

// 		var aListItems = $(".draggable");
// 		 //get only items with css class "draggable"
// 		console.log(aListItems);
// 		return aListItems;
// 	};
	
// 	//the returned object here will become testPattern.myProject.myModule:
// 	return  {

// 		aDragObjects: [], //a publicly accessible place to store our DD objects
		
// 		init: function () {
// 			console.log(this);
// 			//we'll defer making list items draggable until the DOM is fully loaded:
// 			window.onload(this.makeLIsDraggable);
// 		},
		
// 		// makeLIsDraggable: function () {
// 		// 	var aListItems = getListItems(); //these are the elements we'll make draggable
// 		// 	console.log(aListItems);
// 		// 	for (var i=0, j=aListItems.length; i<j; i++) {
// 		// 		this.aDragObjects.push(aListItems[i]);
// 		// 	}
// 		// }

// 	};
// }(); // the parens here cause the anonymous function to execute and return
