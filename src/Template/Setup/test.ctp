<div class="be-left-sidebar">
	<div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
	  <div class="left-sidebar-spacer">
		<div class="left-sidebar-scroll">
		  <div class="left-sidebar-content">
			<ul class="sidebar-elements">
			 <li class="divider">Setup Menu</li>
			 <li  class="active"><a href="setup/settings"><i class="icon mdi mdi-accounts-outline"></i><span>Settings</span></a></li>
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
                <div class="widget widget-fullwidth be-loading">
                    <div class="widget-head">
                        <div class="tools">
                            <span data-modal="md-scale" class="icon mdi mdi-plus-circle md-trigger"></span>
							<span class="icon toggle-loading mdi mdi-refresh-sync"></span>
							<span class="icon mdi mdi-close"></span>
                        </div>
                        <span class="title">Users management</span>
                    </div>
                      <div class="panel panel-default panel-table">
						
						<div class="panel-body">
						  <table id="table1" class="table table-striped table-hover table-fw-widget">
							<thead>
							  <tr>
								<th>Registration Date</th>
								<th>Name</th>
								<th>Email</th>
								<th>User Group</th>
								<th>Status</th>
							  </tr>
							</thead>
							<tbody>
							  <tr class="odd gradeX">
								<td>Trident</td>
								<td>
								  Internet
								  Explorer 4.0
								</td>
								<td>Win 95+</td>
								<td class="center"> 4</td>
								<td class="center"></td>
							  </tr>
							  
							</tbody>
						  </table>
						</div>
					  </div>
					
                    <div class="be-spinner">
                        <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Modal-->
<div id="md-scale" class="modal-container modal-effect-1">
<div class="modal-content">
  <div class="modal-header">
	<button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
  </div>
  <div class="modal-body">
   	  <form action="#" data-parsley-validate="" novalidate="">
		<div class="form-group">
		  <label>Name</label>
		  <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
		</div>
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
		  <label>User Group</label>
		  	<select class="select2">
			  <optgroup label="Alaskan/Hawaiian Time Zone">
				<option value="AK">Alaska</option>
				<option value="HI">Hawaii</option>
			  </optgroup>
			  <optgroup label="Pacific Time Zone">
				<option value="CA">California</option>
				<option value="NV">Nevada</option>
				<option value="OR">Oregon</option>
				<option value="WA">Washington</option>
			  </optgroup>
			  <optgroup label="Mountain Time Zone">
				<option value="AZ">Arizona</option>
				<option value="CO">Colorado</option>
				<option value="ID">Idaho</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NM">New Mexico</option>
				<option value="ND">North Dakota</option>
				<option value="UT">Utah</option>
				<option value="WY">Wyoming</option>
			  </optgroup>
			  <optgroup label="Central Time Zone">
				<option value="AL">Alabama</option>
				<option value="AR">Arkansas</option>
				<option value="IL">Illinois</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="OK">Oklahoma</option>
				<option value="SD">South Dakota</option>
				<option value="TX">Texas</option>
				<option value="TN">Tennessee</option>
				<option value="WI">Wisconsin</option>
			  </optgroup>
			  <optgroup label="Eastern Time Zone">
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="IN">Indiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="OH">Ohio</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WV">West Virginia</option>
			  </optgroup>
			</select>
		 
		</div>
		<div class="be-checkbox">
		  <input id="check1" type="checkbox" class="icheck">
		  <label for="check1">Remember me</label>
		</div>
		<p class="text-right">
		  <button type="submit" class="btn btn-space btn-primary">Submit</button>
		  <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
		</p>
	  </form>
		
  </div>
  <div class="modal-footer"></div>
</div>
</div>
<!-- End User Modal-->