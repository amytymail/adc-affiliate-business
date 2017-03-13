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
                    <li><a href="#customApperance" data-toggle="tab">Custom Apperance</a></li>
                </ul>
                  <div class="tab-content">
                    <div id="globalSettings" class="tab-pane active cont">
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
								<strong>System Settings</strong>
							</div>
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
							<div class="form-group">
								<strong>Affiliate Signup</strong>
							</div>
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
							<div class="form-group">
								<strong>Naming ID Conventions</strong>
							</div>
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
							<div class="form-group">
								<strong>Advertiser Credit</strong>
							</div>
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
							<div class="form-group">
								<strong>All Portals Security Settings</strong>
							</div>
							<div class="form-group">
							  <label>Max Failed Login Attempts:</label>
							  <input type="text" name="login_attempts"  placeholder="3" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<strong>Security Settings</strong>
							</div>
							<div class="form-group">
							  <label>Admin Portal Session Timeout (in minutes):</label>
							  <input type="text" name="session_timeout"  placeholder="30" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password Strength:</label>
							  <input type="text" name="password_strength"  placeholder="week or strong" autocomplete="off" class="form-control">
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
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
								<strong>Tracking Settings</strong>
							</div>
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
								  <input id="dont_pay_for_cpc:" type="checkbox" name="dont_pay_for_cpc" class="icheck">
								  <label for="dont_pay_for_cpc">Don't pay for Bot Traffic on CPC:</label>
								</div>
								<div class="be-checkbox">
								  <input id="dont_pay_for_cpm:" type="checkbox" name="dont_pay_for_cpm" class="icheck">
								  <label for="dont_pay_for_cpm">Don't pay for Bot Traffic on CPM:</label>
								</div>
								<div class="be-checkbox">
								  <input id="campaign_override:" type="checkbox" name="campaign_override" class="icheck">
								  <label for="campaign_override">Campaign Level Override on Blocked IP/Bot Traffic:</label>
								</div>
								<div class="be-checkbox">
								  <input id="enable_event:" type="checkbox" name="enable_event" class="icheck">
								  <label for="enable_event">Enable Events:</label>
								</div>
								<div class="be-checkbox">
								  <input id="grouped_offer:" type="checkbox" name="grouped_offer" class="icheck">
								  <label for="grouped_offer">Grouped Offers:</label>
								</div>
								<div class="be-checkbox">
								  <input id="childclick_inherit:" type="checkbox" name="childclick_inherit" class="icheck">
								  <label for="childclick_inherit">Child Click Inherits Parent SubIDs:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Cap Percentage Threshold:</label>
							  <input type="text" name="cap_threshold" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Session Timeout Seconds:</label>
							  <input type="text" name="session_timeout_second" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<strong>Global Pixels & Postbacks</strong>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="global_pixel:" type="checkbox" name="global_pixel" class="icheck">
								  <label for="global_pixels">Global Pixels:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Global Pixel:</label>
								<textarea name="global_pixel" class="form-control"></textarea>
							</div>
							<div class="form-group">
							  <label>Postback URL:</label>
							  <input parsley-type="url" type="url" name="postback_url" parsley-trigger="change" required="" placeholder="http://" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Postback Delay (ms):</label>
							  <input type="text" name="postback_dealy" parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="global_pixel_default:" type="checkbox" name="global_pixel_default" class="icheck">
								  <label for="global_pixel_default">Fire Global System Pixel By Default:</label>
								</div>
								<div class="be-checkbox">
								  <input id="fire_pixel_nonpaid_conversions:" type="checkbox" name="fire_pixel_nonpaid_conversions" class="icheck">
								  <label for="fire_pixel_nonpaid_conversions">Fire Pixel On Non Paid Conversions:</label>
								</div>
							</div>
							<div class="form-group">
								<strong>Global Pixels & Postbacks</strong>
							</div>
							<div class="form-group">
								<label>Conversion Cap Behavior:</label>
							  	<select name ="conversion_cap_behavior" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="1">Advertiser Payment, No Affiliate Payment</option>
									<option value="2">Ignore Conversion</option>
									<option value="3">No Advertiser Payment, Affiliate Payment</option>
									<option value="4">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="form-group">
								<label>Conversion Behavior On Redirect:</label>
							  	<select name ="conversion_redirect" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="0">Advertiser Payment, No Affiliate Payment</option>
									<option value="30">Ignore Conversion</option>
									<option value="60">No Advertiser Payment, Affiliate Payment</option>
									<option value="90">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="form-group">
								<label>Event Cap Behavior:</label>
							  	<select name ="event_cap_behavior" class="select2">
								  	<option value="0">Advertiser Payment, Affiliate Payment</option>
								  	<option value="0">Advertiser Payment, No Affiliate Payment</option>
									<option value="30">Ignore Conversion</option>
									<option value="60">No Advertiser Payment, Affiliate Payment</option>
									<option value="90">No Advertiser Payment, No Affiliate Payment</option>
								</select>
							</div>
							<div class="form-group">
								<strong>Original Campaign Settings</strong>
							</div>
							<div class="form-group">
							<div class="be-checkbox">
							  <input id="ocboc:" type="checkbox" name="ocboc" class="icheck">
							  <label for="ocboc">Original Campaign by Offer Contract:</label>
							</div>
							<div class="be-checkbox">
							  <input id="ocbmt:" type="checkbox" name="ocbmt" class="icheck">
							  <label for="ocbmt">Original Campaign by Media Type:</label>
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
						
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
						    <div class="form-group">
								<strong>Email Settings</strong>
							</div>
							<div class="form-group">
							  <label>Mail Server Domain/IP Address *:</label>
							  <input type="text" name="mail_server" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Mail Server "From" Email Address *:</label>
							  <input type="text" name="from_email" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Mail Server "From" Name *:</label>
							  <input type="text" name="from_name" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Mail Server Username:</label>
							  <input type="text" name="mail_server_username" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Mail Server Password:</label>
							  <input type="text" name="mail_server_password" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Mail Server Port Number *:</label>
							  <input type="text" name="mail_server_port" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="check1" type="checkbox" name="mail_ssl" class="icheck">
							  <label for="check1">Mail Server Use SSL:</label>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="billingSettings" class="tab-pane">
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
								<strong>Billing Settings</strong>
							</div>
							<div class="form-group">
								<label>Weekly Billing Cycle Start Day *:</label>
							  	<select name ="billing_cycle" class="select2">
								  	<option value="1">Monday</option>
								  	<option value="2">Tusday</option>
									<option value="3">Wednesday</option>
									<option value="4">Thursday</option>
									<option value="5">Friday</option>
									<option value="6">Saterday</option>
									<option value="7">Sunday</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Affiliate Minimum Payment Threshold:</label>
							  <input type="text" name="affi_mini_threshold" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="be-checkbox">
							  <input id="donot_roll_negative_bills" type="checkbox" name="donot_roll_negative_bills" class="icheck">
							  <label for="donot_roll_negative_bills">Do Not Roll Over Negative Bills:</label>
							</div>
							<div class="form-group">
								<strong>Pending Conversions</strong>
							</div>
							<div class="be-checkbox">
							  <input id="pending_conversions" type="checkbox" name="pending_conversions" class="icheck">
							  <label for="pending_conversions">Pending Conversions:</label>
							</div>
							<div class="be-checkbox">
							  <input id="pending_event" type="checkbox" name="pending_event" class="icheck">
							  <label for="pending_event">Pending Events:</label>
							</div>
							<div class="be-checkbox">
							  <input id="donot_pending_bill" type="checkbox" name="donot_pending_bill" class="icheck">
							  <label for="donot_pending_bill">Do Not Bill On Pending:</label>
							</div>
							<div class="be-checkbox">
							  <input id="donot_reject_bill" type="checkbox" name="donot_reject_bill" class="icheck">
							  <label for="donot_reject_bill">Do Not Bill On Rejected:</label>
							</div>
							<div class="form-group">
								<label>Default Approved *</label>
							  	<select name ="affiliate_default_approve" class="select2">
								  	<option value="0">Approved</option>
								  	<option value="2">Generic Voicemail</option>
									<option value="3">Verified filled out from and qualifies for product</option>
									<option value="4">Voice mail matches name</option>
									<option value="5">Person live there but not avilable</option>
									<option value="6">User uninformed, but requests help</option>
									<option value="7">Intersted but can't talk right now</option>
									<option value="8">Verfied filled out the form</option>
									<option value="9">Voicemail matches gender</option>
									<option value="10">Other</option>
								</select>
							</div>
							<div class="form-group">
								<label>Default Pending *:</label>
							  	<select name ="affiliate_default_pending" class="select2">
								  	<option value="0">Pending</option>
								</select>
							</div>
							<div class="form-group">
								<label>Default Rejected *:</label>
							  	<select name ="affiliate_default_reject" class="select2">
								  	<option value="0">Rejected</option>
								  	<option value="1">Does Not Qualify</option>
									<option value="2">Generic Voicemail</option>
									<option value="3">Disconnected Number</option>
									<option value="4">Wrong Number</option>
									<option value="5">Never Applied</option>
									<option value="6">Continous Ring</option>
									<option value="7">Not Intersted In Product</option>
									<option value="8">Hung Up</option>
									<option value="9">Phone Busy</option>
									<option value="10">Fax Number</option>
									<option value="11">Improper Marketing Method</option>
									<option value="12">Multiple Call For Product</option>
									<option value="13">Bogus Data</option>
									<option value="14">Applied, Not Intersted</option>
									<option value="15">Duplicate Lead</option>
									<option value="16">Static, Dead Air</option>
									<option value="17">Unable To Undersand</option>
									<option value="18">Voicemail Problem</option>
									<option value="19">Wrong Language</option>
									<option value="20">Already Been Helped</option>
									<option value="21">Wrong Product</option>
									<option value="22">Other</option>
								</select>
							</div>
							<div class="form-group">
								<strong>Currency Settings</strong>
							</div>
							<div class="form-group">
								<label>System Default Currency:</label>
							  	<select name ="affiliate_default_currency" class="select2">
								  	<option value="INR">INR</option>
								  	<option value="USD">USD</option>
								</select>
							</div>
							<div class="form-group">
								<strong>Referral Settings</strong>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="referral" type="checkbox" name="referral" class="icheck">
								  <label for="referral">Referrals:</label>
								</div>
							</div>
							<div class="form-group">
								<label>Flat Fee / Percentage:</label>
							  	<select name="ref_flat" class="select2">
								  	<option value="flat">Flat Free</option>
								  	<option value="percentage">Percentage</option>
								</select>
							</div>
							<div class="form-group">
								<label>Commission Basis *:</label>
							  	<select name ="ref_commission" class="select2">
								  	<option value="revenue">Revenue</option>
								  	<option value="profit">Profit</option>
									<option value="cost">Cost</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Minimum Threshold:</label>
							  <input type="text" name="ref_mini_threshold" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>Amount / Percentage:</label>
							  <input type="text" name="ref_amount" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<label>Referral Duration:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="infinite">Infinite</option>
								  	<option value="day">Day(s)</option>
									<option value="week">Week(s)</option>
									<option value="month">Month(s)</option>
									<option value="year">Year(s)</option>
								</select>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="aruwv" type="checkbox" name="aruwv" class="icheck">
								  <label for="aruwv">Affiliate Referral URL Widget Visibility:</label>
								</div>
							</div>
							<div class="form-group">
								<strong>Affiliate Payments</strong>
							</div>
							<div class="form-group">
								<label>Request Payment *:</label>
							  	<select name ="affiliate_tier" class="select2">
								  	<option value="disabled">Disable</option>
								  	<option value="display">Always Display</option>
									<option value="weekly">Weekly</option>
									<option value="monthly">Monthly</option>
								</select>
							</div>
							<div class="form-group">
							  <label>From</label>
							  <input type="text" name="affi_pay_dispay_from" class="form-control">
							</div>
							<div class="form-group">
							  <label>To</label>
							  <input type="text" name="affi_pay_display_to" class="form-control">
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="advertiserSettings" class="tab-pane">
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
								<strong>Advertiser Portal Settings</strong>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="advertiser_impression" type="checkbox" name="advertiser_impression" class="icheck">
								  <label for="advertiser_impression">Show Impressions in Advertiser Portal:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="advertiser_contact" type="checkbox" name="advertiser_contact" class="icheck">
								  <label for="advertiser_contact">Contract Name Visibility:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="advertiser_sub_id" type="checkbox" name="advertiser_sub_id" class="icheck">
								  <label for="advertiser_sub_id">Sub IDs Visibility:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Advertiser Portal Terms & Conditions</label>
								<textarea name="advertiser_tnd" class="form-control"></textarea>
							</div>
							
							<div class="form-group">
							  <label>Module Title:</label>
							  <input type="text" name="advertiser_modal_title" class="form-control">
							</div>
							<div class="form-group">
							  <label>IFrame URL:</label>
							  <input name="advertiser_iframe" type="text" class="form-control">
							</div>
							<div class="form-group">
							  <label>Module Height *:</label>
							  <input id="advertiser_modal_height" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Column Location:</label>
							  	<select name ="advertiser_column" class="select2">
								  	<option value="disabled">Disable</option>
								  	<option value="display">Always Display</option>
									<option value="weekly">Weekly</option>
									<option value="monthly">Monthly</option>
								</select>
							</div>
							<div class="form-group">
								<label>IFrame Item Number:</label>
							  	<select name ="advertiser_iframe_item" class="select2">
								  	<option value="disabled">Disable</option>
								  	<option value="display">Always Display</option>
									<option value="weekly">Weekly</option>
									<option value="monthly">Monthly</option>
								</select>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="advertiser_hide_bill" type="checkbox" name="advertiser_hide_bill" class="icheck">
								  <label for="advertiser_hide_bill">Hide Bills:</label>
								</div>
							</div>
							<div class="form-group">
								<strong>Security Settings</strong>
							</div>
							<div class="form-group">
							  <label>Advertiser Portal Session Timeout (in minutes):</label>
							  <input name="advertiser_portal_sessionout" type="text" class="form-control">
							</div>
							
							<div class="form-group">
							  <label>Password Usage History Restriction:</label>
							  <input name="advertiser_pwd_restriction" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Password Strength:</label>
							  	<select name ="advertiser_pwd_strenth" class="select2">
								  	<option value="disabled">Disabled</option>
									<option value="week">Week</option>
									<option value="strong">Strong</option>
								</select>
							</div>
							<div class="form-group">
								<label>Password Expiration Policy *:</label>
							  	<select name ="advertiser_pwd_expire" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="affiliateSettings" class="tab-pane">
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
							<div class="form-group">
								<strong>Affiliate Permissions</strong>
							</div>
							<div class="panel-heading panel-heading-divider"></div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_postback" type="checkbox" name="affiliate_postback" class="icheck">
								  <label for="affiliate_postback">Only Allow Affiliate Postbacks:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_filter_traffic" type="checkbox" name="affiliate_filter_traffic" class="icheck">
								  <label for="affiliate_filter_traffic">Allow Affiliates to Filter Bot Traffic:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_auto_approve" type="checkbox" name="affiliate_auto_approve" class="icheck">
								  <label for="affiliate_auto_approve">Auto Approve Pixels:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_disable_pixel" type="checkbox" name="affiliate_disable_pixel" class="icheck">
								  <label for="affiliate_disable_pixel">Disable Affiliate Pixel Placement:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_alert_subscription" type="checkbox" name="affiliate_alert_subscription" class="icheck">
								  <label for="affiliate_alert_subscription">Affiliate Alert Subscription:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_allow_creative" type="checkbox" name="affiliate_allow_creative" class="icheck">
								  <label for="affiliate_allow_creative">Allow Affiliates To Create Creatives:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_pending_didposition" type="checkbox" name="affiliate_pending_didposition" class="icheck">
								  <label for="affiliate_pending_didposition">Show Pending Disposition:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_approve_disposition" type="checkbox" name="affiliate_approve_disposition" class="icheck">
								  <label for="affiliate_approve_disposition">Show Approved Disposition:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_rejected_disposition" type="checkbox" name="affiliate_rejected_disposition" class="icheck">
								  <label for="affiliate_rejected_disposition">Show Rejected Disposition:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_return_disposition" type="checkbox" name="affiliate_return_disposition" class="icheck">
								  <label for="affiliate_return_disposition">Show Return Disposition:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_negative_conversion" type="checkbox" name="affiliate_negative_conversion" class="icheck">
								  <label for="affiliate_negative_conversion">Show Negative Conversions:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_inactive_compagin" type="checkbox" name="affiliate_hide_inactive_compagin" class="icheck">
								  <label for="affiliate_hide_inactive_compagin">Hide Inactive Campaigns:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_deleted_compaign" type="checkbox" name="affiliate_hide_deleted_compaign" class="icheck">
								  <label for="affiliate_hide_deleted_compaign">Hide Deleted Campaigns:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_offer_grid" type="checkbox" name="affiliate_hide_offer_grid" class="icheck">
								  <label for="affiliate_hide_offer_grid">Hide Offers Grid:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_creative_grid" type="checkbox" name="affiliate_hide_creative_grid" class="icheck">
								  <label for="affiliate_hide_creative_grid">Hide Creatives Grid:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_custom_link" type="checkbox" name="affiliate_custom_link" class="icheck">
								  <label for="affiliate_custom_link">Include Custom Link in Creative Pack Workflows:</label>
								</div>
							</div>
							<div class="form-group">
								<strong>Affiliate Permissions</strong>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_top_offer" type="checkbox" name="affiliate_top_offer" class="icheck">
								  <label for="affiliate_top_offer">Display Top Offers:</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Top Offers Minimum EPC (Earnings Per Click) *:</label>
							  <input type="text" name="affiliate_mini_epc" class="form-control">
							</div>
							<div class="form-group">
								<label>Top Offer Tag:</label>
							  	<select name ="affiliate_offer_tag" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
								<label>Default Featured Offer:</label>
							  	<select name ="affiliate_featured_tag" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_allow_traffic" type="checkbox" name="affiliate_allow_traffic" class="icheck">
								  <label for="affiliate_allow_traffic">Allowed Traffic Types Filter:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_referal_report" type="checkbox" name="affiliate_referal_report" class="icheck">
								  <label for="affiliate_referal_report">Referral Report Visibility:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_duplicate_check" type="checkbox" name="affiliate_duplicate_check" class="icheck">
								  <label for="affiliate_duplicate_check">Duplicate Clicks Visibility:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_tnd" type="checkbox" name="affiliate_tnd" class="icheck">
								  <label for="affiliate_tnd">Terms & Conditions Acceptance :</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_email_acceptance" type="checkbox" name="affiliate_email_acceptance" class="icheck">
								  <label for="affiliate_email_acceptance">Confirmation Email Upon Acceptance:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_bill" type="checkbox" name="affiliate_hide_bill" class="icheck">
								  <label for="affiliate_hide_bill">Hide Bills:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_billdate" type="checkbox" name="affiliate_hide_billdate" class="icheck">
								  <label for="affiliate_hide_billdate">Hide Date Paid on Bills:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_generated" type="checkbox" name="affiliate_hide_generated" class="icheck">
								  <label for="affiliate_hide_generated">Hide Bills That Have Not Been Generated:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_itemized_bill" type="checkbox" name="affiliate_itemized_bill" class="icheck">
								  <label for="affiliate_itemized_bill">Itemized Bills :</label>
								</div>
							</div>
							<div class="form-group">
							  <label>Module Title:</label>
							  <input type="text" name="affiliate_modal_title" class="form-control">
							</div>
							<div class="form-group">
							  <label>Module Height *:</label>
							  <input type="text" name="affiliate_modal_height" required="" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
							  <label>IFrame URL:</label>
							  <input type="url" name="affiliate_iframe_url" class="form-control">
							</div>
							<div class="form-group">
								<label>Column Location:</label>
							  	<select name ="affiliate_modal_column" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
								<label>IFrame Item Number:</label>
							  	<select name ="affiliate_iframe_item_no" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
								<strong>Affiliate Reports Settings</strong>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_timezone" type="checkbox" name="affiliate_timezone" class="icheck">
								  <label for="affiliate_timezone">Timezone:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_revshare" type="checkbox" name="affiliate_revshare" class="icheck">
								  <label for="affiliate_revshare">Hide RevShare Pricing::</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_contract_visibility" type="checkbox" name="affiliate_contract_visibility" class="icheck">
								  <label for="affiliate_contract_visibility">Contract Name Visibility::</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_media_visibility" type="checkbox" name="affiliate_media_visibility" class="icheck">
								  <label for="affiliate_media_visibility">Media Type Visibility::</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_hide_marketplace_tab" type="checkbox" name="affiliate_hide_marketplace_tab" class="icheck">
								  <label for="affiliate_hide_marketplace_tab">Hide Marketplace Tab::</label>
								</div>
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="affiliate_campaign_summary" type="checkbox" name="affiliate_campaign_summary" class="icheck">
								  <label for="affiliate_campaign_summary">Include Events in Campaign Summary::</label>
								</div>
							</div>
							<div class="form-group">
								<strong>Affiliate Reports Settings</strong>
							</div>
							<div class="form-group">
							  <label>Affiliate Portal Session Timeout (in minutes):</label>
							  <input name="affiliate_session_timeout" type="text" class="form-control">
							</div>
							<div class="form-group">
							  <label>Password Usage History Restriction:</label>
							  <input type="test" name="affiliate_pwd_restriction" class="form-control">
							</div>
							<div class="form-group">
								<label>Password Strength:</label>
							  	<select name ="affiliate_pwd_strength" class="select2">
								  	<option value="disabled">Disabled</option>
									<option value="week">Week</option>
									<option value="strong">Strong</option>
								</select>
							</div>
							<div class="form-group">
								<label>Password Expiration Policy *:</label>
							  	<select name ="affiliate_pwd_expire" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<p class="text-right">
							  <button type="submit" class="btn btn-space btn-primary">Submit</button>
							  <button class="btn btn-space btn-default">Cancel</button>
							</p>
						  </form>
						</div>
                    </div>
					<div id="customApperance" class="tab-pane">
						<div class="panel-body">
						  <form action="#" data-parsley-validate="" novalidate="">
						  <div class="form-group">
								<strong>Custom Appearance</strong>
							</div>
							<div class="form-group">
							  <label>System Name *:</label>
							  <input type="text" name="system_name" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<div class="be-checkbox">
								  <input id="hide_system_name" type="checkbox" name="hide_system_name" class="icheck">
								  <label for="hide_system_name">Hide System Name:</label>
								</div>
							</div>
							<div class="form-group">
								<label>Logo Size:</label>
							  	<select name ="system_logo_size" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Logo</label>
							  <input type="file" name="system_logo" class="form-control">
							</div>
							<div class="form-group">
								<label>Color Themes (affects all portals) *:</label>
							  	<select name ="system_theme" class="select2">
								  	<option value="0">disabled</option>
									<option value="30">30</option>
									<option value="60">60</option>
									<option value="90">90</option>
									<option value="180">180</option>
								</select>
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