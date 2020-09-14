$(function()
{
	$('[data-js^=form-]').on('blur', function ()
	{
		validate($(this));
	});

	$('.form').on('submit', function ()
	{
		var status = true;

		$('[data-js^=form-]').each(function (){
			if(!validate($(this))){
				status = false;
				return false;
			}
		});

		return status;
	});
});

function validate(obj)
{
	var item = obj.parents('.form__item');
	item.removeClassWild('form__item-*');

	var correct_status = true;
	switch (obj.attr('data-js')) {
		case 'form-phone':
			correct_status = validatePhone(obj.val());
			break;
		case 'form-email':
			correct_status = validateEmail(obj.val());
			break;
	}
	var status_class = 'form__item-' + (correct_status ? 'done' : 'error');
	item.addClass(status_class);
    return correct_status;
}

function validatePhone(phone)
{
	return (phone != '' && phone.match(/^\d[\d\(\)\ -]{4,14}\d$/gm))?true:false;
}
function validateEmail(email)
{
    return (email != '' && email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))?true:false;
}