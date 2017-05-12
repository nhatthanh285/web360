
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="{!! route('phoneValidate') !!}" method="post">
			<input type='hidden' name="_token" value="{{ csrf_token() }}"/>
			<h2 class="dangky">Xác nhận</h2>
			<hr class="colorgraph">

				<div class="form-group" style="margin-top: 10px; ">
					<input type="text" name="otp" id="otp" class="form-control input-lg" placeholder="Mã xác nhận" pattern="[0-9]*" inputmode="numeric" tabindex="1"  required>
				</div>

			<div class="row" style="margin-top: 10px;  ">
				<div class="col-xs-12 col-md-12"><input type="submit" value="Xác nhận miễn phí" class="btn btn-primary btn-block btn-lg " tabindex="2"></div>
			</div>
		</form>
	</div>
</div>