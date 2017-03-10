<div class="be-left-sidebar">
	<div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
	  <div class="left-sidebar-spacer">
		<div class="left-sidebar-scroll">
		  <div class="left-sidebar-content">
			<ul class="sidebar-elements">
			 <li class="divider">Setup Menu</li>
			 <li class="active"><a href="setup/settings"><i class="icon mdi mdi-accounts-outline"></i><span>Settings</span></a></li>
			 <li><a href="setup/users"><i class="icon mdi mdi-accounts-outline"></i><span>Users</span></a></li>
			 <li><a href="setup/emails"><i class="icon mdi mdi-accounts-outline"></i><span>Emails</span></a></li>
			 <li><a href="setup/verticals"><i class="icon mdi mdi-accounts-outline"></i><span>Verticals</span></a></li>
			 <li><a href="setup/alerts"><i class="icon mdi mdi-accounts-outline"></i><span>Alerts</span></a></li>
			 <li><a href="setup/token"><i class="icon mdi mdi-accounts-outline"></i><span>Tokens</span></a></li>
			 <li><a href="setup/tags"><i class="icon mdi mdi-accounts-outline"></i><span>Tags</span></a></li>
			 <li><a href="setup/permissions"><i class="icon mdi mdi-accounts-outline"></i><span>Permissions</span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	  <!--div class="progress-widget">
		<div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
		<div class="progress">
		  <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
		</div>
	  </div-->
	</div>
  </div>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-heading">Settings</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#globalSettings" data-toggle="tab">Global</a></li>
                    <li><a href="#trackingSettings" data-toggle="tab">Tracking</a></li>
                    <li><a href="#emailSettings" data-toggle="tab">Email</a></li>
                    <li><a href="#billingSettings" data-toggle="tab">Billing</a></li>
                    <li><a href="#advertiserSettings" data-toggle="tab">Advertiser Portal</a></li>
                    <li><a href="#affiliateSettings" data-toggle="tab">Affiliate Portal</a></li>
                    <li><a href="#3rdpartySettings" data-toggle="tab">Third Party Integration</a></li>
                    <li><a href="#customApperance" data-toggle="tab">Custom Apperance</a></li>
                    <li><a href="#defaultEntities" data-toggle="tab">Default Entities</a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="globalSettings" class="tab-pane active cont">
						<div class="panel-heading panel-heading-divider">System Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>Admin Domain URL *:</label>
							  <input parsley-type="url" type="url" name="domainurl" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="ssl" type="checkbox" name="ssl" class="icheck">
								  <label for="ssl">Force SSL (Secure Socket Layer):</label>
								</div>
								<div class="be-checkbox">
								  <input id="multiple_laguage" type="checkbox" name="multiple_laguage" class="icheck">
								  <label for="multiple_laguage">Multiple Languages:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Login URL Override:</label>
							  <input parsley-type="url" type="url" name="login_override_url" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							
							<div class="panel-heading panel-heading-divider">Affiliate Signup</div>
							
							<div class="form-group">
							  <label>Affiliate Signup URL:</label>
							  <input parsley-type="url" type="url" id="affiliate_login" name="affiliate_login" placeholder="http://" required="" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="default_tnd" type="checkbox" name="default_tnd" class="icheck">
								  <label for="default_tnd">Use CAKE's Default Terms & Conditions:</label>
								</div>
								<div class="be-checkbox">
								  <input id="affiliate_tnd" type="checkbox" name="affiliate_tnd" class="icheck">
								  <label for="affiliate_tnd">Send Affiliate Terms & Conditions at Signup:</label>
								</div>
								<div class="be-checkbox">
								  <input id="force_login" type="checkbox" name="force_login" class="icheck">
								  <label for="force_login">Force Login:</label>
								</div>
							</div>
							<div class="panel-heading panel-heading-divider">Naming ID Conventions</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="show_affiliate_id" type="checkbox" name="show_affiliate_id" class="icheck">
								  <label for="show_affiliate_id">Show Affiliate ID:</label>
								</div>
								<div class="be-checkbox">
								  <input id="show_offer_id" type="checkbox" name="show_affiliate_id" class="icheck">
								  <label for="show_affiliate_id">Show Offer ID:</label>
								</div>
								<div class="be-checkbox">
								  <input id="show_filter_by" type="checkbox" name="show_filter_by" class="icheck">
								  <label for="show_filter_by">View Thru Only Filter:</label>
								</div>
								<div class="be-checkbox">
								  <input id="payout_tier" type="checkbox" name="payout_tier" class="icheck">
								  <label for="payout_tier">Affiliate Payout Tiers:</label>
								</div>
							</div>
							<div class="form-group">
								<label>Default Affiliate Tier *:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="tier1">Tier 1</option>
									<option value="tier2">Tier 2</option>
									<option value="tier3">Tier 3</option>
								</select>
							  </div>
							</div>
							<div class="panel-heading panel-heading-divider">Advertiser Credit</div>
							<div class="form-group">						
								<div class="be-checkbox">
								  <input id="limit_advr_credit" type="checkbox" name="limit_advr_credit" class="icheck">
								  <label for="limit_advr_credit">Limit Advertiser Traffic by Credit:</label>
								</div>
								<div class="panel-heading panel-heading-divider">Filters</div>
														
								<div class="be-checkbox">
								  <input id="hide_expired_offer" type="checkbox" name="hide_expired_offer" class="icheck">
								  <label for="hide_expired_offer">Hide Expired Offers:</label>
								</div>						
								<div class="be-checkbox">
								  <input id="hide_inactive_offer" type="checkbox" name="hide_inactive_offer" class="icheck">
								  <label for="hide_inactive_offer">Hide Inactive Offers:</label>
								</div>
							</div>
							
							<div class="panel-heading panel-heading-divider">All Portals Security Settings</div>
							<div class="form-group">
							  <label>Max Failed Login Attempts:</label>
							  <input type="text" name="login_attempts" parsley-trigger="change" required="" placeholder="3" autocomplete="off" class="form-control">
							</div>
							<div class="panel-heading panel-heading-divider">Security Settings</div>
							<div class="form-group">
							  <label>Admin Portal Session Timeout (in minutes):</label>
							  <input type="text" name="session_timeout" parsley-trigger="change" required="" placeholder="30" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password Strength:</label>
							  <input type="text" name="password_strength" parsley-trigger="change" required="" placeholder="week or strong" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="password_history_restriction" type="checkbox" name="password_history_restriction" class="icheck">
								  <label for="password_history_restriction">Password Usage History Restriction:</label>
								</div>
							</div>
							
							<div class="form-group">
								<label>Password Expiration Policy *:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="password_reset" type="checkbox" name="password_reset" class="icheck">
								  <label for="password_reset">Force Password Reset:</label>
								</div>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    <div id="trackingSettings" class="tab-pane cont">
						<div class="panel-heading panel-heading-divider">Tracking Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>Cookie Domain *:</label>
							  <input parsley-type="url" type="url" name="cookie_domain_url" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Session Regeneration Minutes *:</label>
							  <input type="text" name="session_regeneration_minute" parsley-trigger="change" required="" placeholder="0" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="throttling" type="checkbox" name="throttling" class="icheck">
								  <label for="throttling">Throttling:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Global Redirect *:</label>
							  <input type="text" name="global_redirect" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Encrypt Links:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Base Tracking Domain Redirect:</label>
							  <input parsley-type="url" type="url" name="base_domain_redirect" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Don't pay for Bot Traffic on CPC:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Don't pay for Bot Traffic on CPM:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Campaign Level Override on Blocked IP/Bot Traffic:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Enable Events:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Grouped Offers:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Child Click Inherits Parent SubIDs:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Cap Percentage Threshold:</label>
							  <input type="text" name="global_redirect" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Session Timeout Seconds:</label>
							  <input type="text" name="global_redirect" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							<div class="panel-heading panel-heading-divider">Global Pixels & Postbacks</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Global Pixels:</label>
								</div>
							</div>
							<div class="form-group">
							  <label class="col-sm-3 control-label">Global Pixel:</label>
							  <div class="col-sm-6">
								<textarea class="form-control"></textarea>
							  </div>
							</div>
							<div class="form-group">
							  <label>Postback URL:</label>
							  <input parsley-type="url" type="url" name="cookie_domain_url" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Postback Delay (ms):</label>
							  <input type="text" name="global_redirect" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Fire Global System Pixel By Default:</label>
								</div>
								<div class="be-checkbox">
								  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
								  <label for="encrypt_links">Fire Pixel On Non Paid Conversions:</label>
								</div>
							</div>
							<div class="panel-heading panel-heading-divider">Global Pixels & Postbacks</div>
							<div class="form-group">
								<label>Conversion Cap Behavior:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="0">Advertiser Payment, No Affiliate Payment</option>
									<option value="30">Ignore Conversion</option>
									<option value="60">No Advertiser Payment, Affiliate Payment</option>
									<option value="90">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="form-group">
								<label>Conversion Behavior On Redirect:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="0">Advertiser Payment, No Affiliate Payment</option>
									<option value="30">Ignore Conversion</option>
									<option value="60">No Advertiser Payment, Affiliate Payment</option>
									<option value="90">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="form-group">
								<label>Event Cap Behavior:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="0">Advertiser Payment, No Affiliate Payment</option>
									<option value="30">Ignore Conversion</option>
									<option value="60">No Advertiser Payment, Affiliate Payment</option>
									<option value="90">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="panel-heading panel-heading-divider">Original Campaign Settings</div>
							<div class="form-group">
							<div class="be-checkbox">
							  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
							  <label for="encrypt_links">Original Campaign by Offer Contract:</label>
							</div>
							<div class="be-checkbox">
							  <input id="encrypt_links:" type="checkbox" name="encrypt_links" class="icheck">
							  <label for="encrypt_links">Original Campaign by Media Type:</label>
							</div>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
                    <div id="emailSettings" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="billingSettings" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="advertiserSettings" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="affiliateSettings" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="3rdpartySettings" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="customApperance" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="defaultEntities" class="tab-pane">
						<div class="panel-heading panel-heading-divider">Global Settings</div>
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
							  <label>User Name</label>
							  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Email address</label>
							  <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password</label>
							  <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
							  <label>Repeat Password</label>
							  <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" class="icheck">
							  <label for="check1">Remember me</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					
                  </div>
                </div>
              </div>
            </div>
            
        </div>
    </div>
</div>