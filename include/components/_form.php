<?\Main\IncludeElements::addStyle('form');?>
<?\Main\IncludeElements::addScript('form');?>

<form action="" class="form" autocomplete="off">
	<div class="form__row">
		<div class="form__item">
			<input type="text" name="email" class="form__text form__text-white" placeholder="Электронная почта" data-js="form-email"/>
		</div>
	</div>
	<div class="form__row">
		<div class="form__item form__errtext"></div>
	</div>
	<div class="form__row">
		<div class="form__item form__submit">
			<input type="submit" class="button button__gold" value="Зарегистрироваться"  data-js="form-submit"/>
		</div>
	</div>
	<div class="form__row">
		<label class="form__item d-md-flex align-items-center">
		    <span class="form__labeltext form__checkbox-white">
                <span class="form__labeltext-inner">Отправляя заявку, я согласен на обработку моих персональных данных в соответствии с <a href="https://www.aunite.com/docs/privacy_policy_auto-club.biz.pdf" target="_blank" class="text-white">условиями</a></span>
            </span>
		</label>
	</div>
</form>