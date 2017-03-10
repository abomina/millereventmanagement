<div class="row" style="padding-top: 50px;">
	<div class="6u 12u$(small)">
		<h2 id="content">Refer a Friend</h2>
		<p>Fill in your name and e-mail(so your friends know it's from you, not spam) Add the e-mail address of the person(s) you wish to tell about Click the send button</p>
	</div>
	<div class="6u 12u$(small)" ng-controller="contactCompany">
		<form method="post" action="#">
			<div class="row uniform">
				<div class="6u 12u$(xsmall)">
					<input type="text" name="demo-name" id="demo-name" ng-model="name" value="" placeholder="Name" required/>
				</div>
				<div class="6u$ 12u$(xsmall)">
					<input type="email" name="demo-email" id="demo-email" ng-model="email" value="" placeholder="Email" required/>
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="name-friend" id="name-friend" ng-model="name" value="" placeholder="Name Friend" required/>
				</div>
				<div class="6u$ 12u$(xsmall)">
					<input type="email" name="email-friend" id="email-friend" ng-model="email" value="" placeholder="Email Friend" required/>
				</div>
				<!-- Break -->
				<div class="12u$">
					<textarea name="demo-message" id="demo-message" ng-model="message" placeholder="Enter your message Optional" rows="6"></textarea>
				</div>
				<!-- Break -->
				<div class="12u$">
					<ul class="actions">
						<li><input type="button" value="Send" class="special" ng-click="validate()"/></li>
						<li><input type="reset" value="Reset" /></li>
					</ul>
				</div>
			</div>
		</form>
	</div>
</div>