$(document).ready(function() {
	$('body').prepend('<div class="header" id="myHeader"><h2>Script Tag is working</h2></div>');
	$('head').prepend('<style>.header { padding: 10px 16px; background: #555; color: #f1f1f1; } .content { padding: 16px; } .sticky { position: fixed; top: 0; width: 100%} .sticky + .content { padding-top: 102px; }</style>');

	

});