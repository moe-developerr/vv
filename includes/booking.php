<div class="booking">
	<div class="booking-close-wrapper">
		<button class="booking-close">
			<span class="line">
				<span class="rhombus-1"></span>
				<span class="rhombus-2"></span>
			</span>
			<span class="line"></span>
			<span class="line">
				<span class="rhombus-1"></span>
			</span>
		</button>
		<!--[if lt IE 9]>
			<span class="close-btn">x</span>
		<![endif]-->
	</div>

	<form>
		<ul class="booking__list">
			<li class="booking__item">
				<small class="booking__title">ARRIVAL</small>
				<input type="text" name="arrival" id="arrival" class="booking__input" required="required">
			</li>
			<li class="booking__item">
				<small class="booking__title">DEPARTURE</small>
				<input type="text" name="departure" id="departure" class="booking__input" required="required">
			</li>
			<li class="booking__item row">
				<div class="col-xs-12 col-sm-6">
					<small class="booking__title">ADULTS</small>
					<select name="adults" id="adults" class="booking__select" required="required">
						<option value="0" selected>0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
				<div class="col-xs-12 col-sm-6">
					<small class="booking__title">KIDS</small>
					<select name="kids" id="kids" class="booking__select" required="required">
						<option value="0" selected>0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
			</li>
			<li class="booking__item">
				<small class="booking__title">LOCATION</small>
				<select name="location" id="location" class="booking__select" required="required">
					<option value="al hada">AL HADA</option>
					<option value="al hada">AL HUDA</option>
					<option value="al hada">AL HIDA</option>
				</select>
			</li>
			<li class="booking__item">
				<div class="booking__check-wrapper">
					<button class="booking__check">
						<h6 class="booking__check-text">
							<span>CHECK AVAILABILITY</span>
							<span class="line">
								<span class="rhombus-1"></span>
								<span class="rhombus-2"></span>
							</span>
						</h6>
					</button>
				</div>
			</li>
		</ul>
	</form>
</div>