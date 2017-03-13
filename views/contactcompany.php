	<br>
	<header class="box">
			<h2><center>Contact Us</center></h2>
	</header>

<div class="row" style="padding-top: 50px;">
	<div class="6u 12u$(small)">
		<p align="justify">Miller Event Management continued success and growth offer continuous jobs throughout the year. We take great pride in what we do, and constantly strive for excellence. MEM has earned an excellent reputation for our expertise and top-quality services all over California, as well as other parts of the US. This is reflected through our diverse and extensive client base.
		We invite you to join a team of hard working and dedicated professionals. Our HR Department is currently accepting applications. Also, please contact us for any Quotes, Questions or Comments.</p>
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
				<div class="12u$">
					<input type="text" name="demo-company" id="demo-company" ng-model="company" value="" placeholder="Company" required/>
				</div>
				<!-- Break -->
				<div class="12u$">
					<textarea name="demo-message" id="demo-message" ng-model="message" placeholder="Enter your message" rows="6"></textarea>
				</div>
				<!-- Break -->
				<div class="12u$">
					<ul class="actions">
						<li><input type="button" value="Send Message" class="special" ng-click="validate()"/></li>
						<li><input type="reset" value="Reset" /></li>
					</ul>
				</div>
			</div>
		</form>
	</div>
</div>