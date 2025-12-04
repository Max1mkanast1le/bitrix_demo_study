<?php

use Bitrix\Main\Web\Json;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["PHONE_REGISTRATION"])
{
	CJSCore::Init('phone_auth');
}
?>
<!-- CHANGEPASSWD FORM -->
<div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">
              <div class="pt-4 pb-2">
                <p class="small"><!--AUTH_RESULT--></p>
              </div>
              <form 
                class="row g-3 needs-validation" novalidate method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
      
      
                <div class="col-12">
                  <label class="form-label">Логин</label>
                  <div class="input-group has-validation">
                    <input class="form-control" required type="text" name="USER_LOGIN" maxlength="50" value="" />
                    <div class="invalid-feedback">Заполните логин</div>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label">Контрольная строка</label>
                  <div class="input-group has-validation">
                    <input class="form-control" required type="text" name="USER_CHECKWORD" maxlength="50" value="" />
                    <div class="invalid-feedback">Заполните контрольную строку</div>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label">Новый пароль</label>
                  <div class="input-group has-validation">
                    <input class="form-control" required type="password" name="USER_PASSWORD" maxlength="255" value="" />
                    <div class="invalid-feedback">Заполните новый пароль</div>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label">Подтверждение пароля</label>
                  <div class="input-group has-validation">
                    <input class="form-control" type="password" required name="USER_CONFIRM_PASSWORD" maxlength="255" value=""/>
                    <div class="invalid-feedback">Заполните подтверждение пароля</div>
                  </div>
                </div>

                <!-- IF USED CAPTCHA -->
                <div class="col-12">
                  <label class="form-label">Код на картинке
                  </label>
                  <div class="input-group has-validation">
                    <input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
                    <div class="invalid-feedback">Заполните код</div>
                  </div>
                </div>
                <div class="col-12">
                  <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" /> <!-- CAPTCHA_CODE -->
                  <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
                </div>
                <!-- END CAPTCHA -->
      
      
                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit" name="change_pwd" value="Изменить пароль">Изменить пароль</button>
                </div>
      
                <div class="col-12">
                  <p class="small"></p>  <!-- GROUP_POLICY / PASSWORD_REQUIREMENTS-->
                </div>

                <div class="field">
                  <p class="small"><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b>Авторизация</b></a></p>  <!-- AUTH_URL -->
                </div>
      
            </form>
      
              <script type="text/javascript">
                document.bform.USER_LOGIN.focus();
              </script>
      
            </div>
          </div>
      
        </div>
      </div>
      <!-- END CHANGEPASSWD FORM -->	


<div class="bx-auth">

<?
if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}
?>

<?if($arResult["SHOW_FORM"]):?>

<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
	<?if ($arResult["BACKURL"] <> ''): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">
	<table class="data-table bx-changepass-table">
		<thead>
			<tr>
				<td colspan="2"><b><?=GetMessage("AUTH_CHANGE_PASSWORD")?></b></td>
			</tr>
		</thead>
		<tbody>
<?if($arResult["PHONE_REGISTRATION"]):?>
			<tr>
				<td><?echo GetMessage("sys_auth_chpass_phone_number")?></td>
				<td>
					<input type="text" value="<?=htmlspecialcharsbx($arResult["USER_PHONE_NUMBER"])?>" class="bx-auth-input" disabled="disabled" />
					<input type="hidden" name="USER_PHONE_NUMBER" value="<?=htmlspecialcharsbx($arResult["USER_PHONE_NUMBER"])?>" />
				</td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?echo GetMessage("sys_auth_chpass_code")?></td>
				<td><input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" autocomplete="off" /></td>
			</tr>
<?else:?>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_LOGIN")?></td>
				<td><input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="bx-auth-input" /></td>
			</tr>
<?
	if($arResult["USE_PASSWORD"]):
?>
			<tr>
				<td><span class="starrequired">*</span><?echo GetMessage("sys_auth_changr_pass_current_pass")?></td>
				<td><input type="password" name="USER_CURRENT_PASSWORD" maxlength="255" value="<?=$arResult["USER_CURRENT_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></td>
			</tr>
<?
	else:
?>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_CHECKWORD")?></td>
				<td><input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" autocomplete="off" /></td>
			</tr>
<?
	endif
?>
<?endif?>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></td>
				<td><input type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" />
<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
<script>
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
<?endif?>
				</td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></td>
				<td><input type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></td>
			</tr>
		<?if($arResult["USE_CAPTCHA"]):?>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
				</td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?echo GetMessage("system_auth_captcha")?></td>
				<td><input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" /></td>
			</tr>
		<?endif?>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td><input type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>" /></td>
			</tr>
		</tfoot>
	</table>
</form>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>

<?if($arResult["PHONE_REGISTRATION"]):?>

<script>
new BX.PhoneAuth({
	containerId: 'bx_chpass_resend',
	errorContainerId: 'bx_chpass_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?= Json::encode([
			'signedData' => $arResult["SIGNED_DATA"]
		]) ?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_chpass_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_chpass_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_chpass_resend"></div>

<?endif?>

<?endif?>

<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>

</div>