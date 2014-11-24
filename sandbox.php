<?php
	require_once ('templates/header.php');
	echo '<body>';
	echo '<ul id="myList">';
	echo '<li class="draggable">Item one.</li>';
	echo '<li>Item two.</li>';
	echo '<li class="draggable">Item three.</li>';
	echo '</ul>';

	echo '<p>{{4 + 6}}';
	echo '</p>';

	echo '<div ng-controller="StoreController as store">';
	echo '<h1>{{store.product.name}}</h1>';
	echo '<h2>{{store.product.price}}</h2>';
	echo '<p>{{store.product.description}}</p>';
	require_once ('templates/footer.php');