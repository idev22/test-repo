

var a = $('.a');

var b = a.sort(function(a1, a2){
	return $(a1).attr('id') - $(a2).attr('id');
})

console.log(b);