$(function(){
	$.fn.removeClassWild = function(mask) {
		return this.removeClass(function(index, cls) {
			var re = mask.replace(/\*/g, '\\S+');
			return (cls.match(new RegExp('\\b' + re + '', 'g')) || []).join(' ');
		});
	};
});

function declension(number, variants) {
	var cases = [2, 0, 1, 1, 1, 2];
	return number + ' ' + variants[(number%100>4 && number%100<20)? 2: cases[Math.min(number%10, 5)]];
}

function number_format( number, decimals, dec_point, thousands_sep ) {

	var i, j, kw, kd, km;

	if( isNaN(decimals = Math.abs(decimals)) ){
		decimals = 2;
	}
	if( dec_point == undefined ){
		dec_point = ",";
	}
	if( thousands_sep == undefined ){
		thousands_sep = ".";
	}

	i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

	if( (j = i.length) > 3 ){
		j = j % 3;
	} else{
		j = 0;
	}

	km = (j ? i.substr(0, j) + thousands_sep : "");
	kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
	kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");

	return km + kw + kd;
}

function deepEqualObjects(a, b) {
	if (a === b) {
		return true;
	}

	if (a == null || typeof(a) != "object" ||
		b == null || typeof(b) != "object")
	{
		return false;
	}

	var propertiesInA = 0, propertiesInB = 0;
	for (var property in a) {
		propertiesInA += 1;
	}
	for (var property in b) {
		propertiesInB += 1;
		if (!(property in a) || !deepEqual(a[property], b[property])) {
			return false;
		}
	}
	return propertiesInA == propertiesInB;
}