(function(){
	var app = angular.module('byhome', []);

	app.controller('StoreController',function(){
		this.product = gem;
	});

	var gem = {
		name: "Dodecahedron",
		price: 2.95,
		description: '. . .',
	}
})();