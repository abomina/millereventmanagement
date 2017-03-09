<form method="post" style="padding-top: 50px;"  ng-controller="requestforquotes">
	<h3>Request for quotes</h3>
	<div class="row uniform">
		<div class="12u$">
			<input type="text" name="event" id="event" value="" ng-model="event" placeholder="Type of Event" />
		</div>
	</div>
	<div class="row uniform">
		<div class="4u 12u$(medium)">
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="name" id="name" value="" ng-model="name" placeholder="Name" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="address" id="address" value="" ng-model="address" placeholder="Address" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="city" id="city" value="" ng-model="city" placeholder="City" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="state" id="state" ng-model="state" value="" placeholder="State" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="zip" id="zip" ng-model="zip" value="" placeholder="Zip" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="guest" id="guest" ng-model="guest" value="" placeholder="Approx. Guest Count" />
				</div>
			</div>
		</div>
		<div class="4u 12u$(medium)">
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="guards" id="guards" ng-model="guards" value="" placeholder="Number of Guards requested" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="phone" id="phone" ng-model="phone" value="" placeholder="Contact Phone" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<div class='input-group date' id='datetimepicker6'>
						<input type="text" name="datef" id="datef" ng-model="datef" value="" placeholder="Date From" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<div class='input-group date' id='datetimepicker7'>
						<input type="text" name="datet" id="datet" ng-model="datet" value="" placeholder="Date to" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar">
						</span>
					</div>
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<div class='input-group date' id='datetimepicker3'>
						<input type="text" name="datef" id="datef" ng-model="datef" value="" placeholder="Event times From" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-time"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<div class='input-group date' id='datetimepicker4'>
						<input type="text" name="datet" id="datet" ng-model="datet" value="" placeholder="Event times To" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-time">
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="4u 12u$(medium)">
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="company" id="company" ng-model="company" value="" placeholder="Company" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<div ng-dropdown-multiselect="" options="example5data" selected-model="example5model" extra-settings="example5settings" translation-texts="example5customTexts" class="selectServices"></div>
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="conname" id="conname" ng-model="conname" value="" placeholder="Contact Name" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<input type="text" name="conemail" id="conemail" ng-model="conemail" value="" placeholder="Contact Email" />
				</div>
			</div>
			<div class="row uniform">
				<div class="12u$">
					<textarea name="notes" id="notes" ng-model="notes" placeholder="Notes" rows="3"></textarea>
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