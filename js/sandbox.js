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


var Quo = function(string){
	this.status = string;
}

Quo.prototype.get_status = function(){
	return this.status;
}

var fart = new Quo('tickles');

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
}












