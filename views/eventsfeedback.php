<form method="post" style="padding-top: 50px;"  ng-controller="requestforquotes">
	<h3>Event Feedback</h3>
	<hr class="major">
	<div class="row uniform">
		<div class="6u 12u$(medium)">
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="name" id="name" value="" ng-model="name" placeholder="Name" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="email" name="email" id="email" value="" ng-model="email" placeholder="Email" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="phone" id="phone" value="" ng-model="phone" placeholder="Phone" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="event" id="event" ng-model="event" value="" placeholder="Event Name" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<textarea name="feedback" id="feedback" ng-model="feedback" placeholder="Feedback" rows="3"></textarea>
				</div>
			</div>
		</div>
		<div class="6u 12u$(medium)">
			<h4>Event Location</h4>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="nameE" id="nameE" ng-model="nameE" value="" placeholder="Name event" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="address" id="address" ng-model="address" value="" placeholder="Address event" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="city" id="city" ng-model="city" value="" placeholder="City event" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="state" id="state" ng-model="state" value="" placeholder="State event" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="zip" id="zip" ng-model="zip" value="" placeholder="Zip" />
				</div>
			</div>
		</div>
	</div>
	<div class="row uniform">
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="Send Feedback" class="special" /></li>
				<li><input type="reset" value="Reset" /></li>
			</ul>
		</div>
	</div>
</form>