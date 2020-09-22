$(function()
{
	$('[data-js^=form-]').on('blur', function ()
	{
		validate($(this));
	});

	$('.form').on('submit', function ()
	{
		var form = $(this);
		var status = true;

		$('[data-js^=form-]').each(function (){
			if(!validate($(this))){
				status = false;
			}
		});

		return status;
	});
});

function validate(obj)
{
	var item = obj.parents('.form__item');
	item.removeClassWild('form__item-*');

	var correct_status = {
		'status': true
	};

	if(obj.attr('data-required') == 'Y'){
		correct_status = validateRequired(obj);
	}

	if(correct_status.status){
		switch (obj.attr('data-js')) {
			case 'form-phone':
				correct_status = validatePhone(obj.val());
				break;
			case 'form-email':
				correct_status = validateEmail(obj.val());
				break;
		}
	}
	var status_class = 'form__item-' + (correct_status.status ? 'done' : 'error');
	item.addClass(status_class);
	if(correct_status.error){
		item.attr('data-error', correct_status.error);
	}
	return correct_status.status;
}

function validatePhone(phone)
{
	validate = {};
	validate.status = (phone != '' && phone.match(/^\d[\d\(\)\ -]{4,14}\d$/gm)) ? true : false;
	if(!validate.status){
		validate.error = 'Укажите корректный телефон';
	}
	return validate;
}
function validateEmail(email)
{
	var validate = {};
	validate.status = (email != '' && email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) ? true : false;
	if(!validate.status){
		validate.error = 'Укажите корректный email';
	}
	return validate;
}
function validateRequired(item){
	var validate = {
		'status': true
	};
	var value = item.val();
	if(typeof value === "undefined" || value === null || value ===  ""){
		validate.status = false;
		validate.error = 'Это поле обязательно к заполнению';
	}
	return validate;
}