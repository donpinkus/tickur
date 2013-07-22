<div id="signUpModal" class="modal hide fade" tabindex="-1" role="dialog">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3 id="myModalLabel">Sign Up</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<nav class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="/">Jobgram</a>
			<div class="pull-right">

<!-- Handle logged in state -->
<?php 
	if ($logged_in) {
?>
				<ul class="nav">
					<li>
						<a href="#">
							<i class="icon-home"></i>
							Home
						</a>
					</li>
					<li><a href="#"><i class="icon-envelope"></i> Messages</a>
		      <li class="dropdown">
		      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
		      		<?php echo $user_email ?><span class="caret"></span>
		      	</a>
		      	<ul class="dropdown-menu">
		      		<li>
		      			<a href="/index.php/user-create-profile">
		      				<i class="icon-pencil"></i>
		      				Edit Profile
		      			</a>
		      		</li>
		      		<li>
		      			<a href="#"><i class="icon-pencil"></i> Anonymize Profile</a>
		      		</li>
		      		<li class="divider"></li>
		      		<li><a href="/index.php/log-out">Log Out</a></li>
		      	</ul>
		     	</li>
		    </ul>
<?php
  } else {
?>
				<ul class="nav">
		      <li><a href="/index.php/users">Job-seekers</a></li>
		      <li><a href="#">Recruiters</a></li>
		      <li>
		      	<a href="#logInModal" role="button" data-toggle="modal">
		      		<i class="icon-user"></i>
		      		Log In
		      	</a>
		      </li>
		    </ul>
		    <!-- Modal -->
				<div id="logInModal" class="modal hide fade" tabindex="-1" role="dialog" 
					aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" 
				    	aria-hidden="true">
				    	×
				    </button>
				    <h3 id="myModalLabel">Log In</h3>
				  </div>
				  <form class="form-horizontal">
					  <div class="modal-body">
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">
						    	Email
						    </label>
						    <div class="controls">
						      <input type="text" id="inputEmail" name="email" 
						      	placeholder="Email">
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">
						    	Password
						    </label>
						    <div class="controls">
						      <input 
						      	type="password" id="inputPassword" name="password" 
						      		placeholder="Password">
						    </div>
						  </div>
					  </div>
					  <div class="modal-footer">
					    <button class="btn" data-dismiss="modal" aria-hidden="true">
					    	Close
					    </button>
					    <button type="submit" class="btn btn-primary">Log In</button>
					  </div>
					</form>
				</div>
<?php
	}
?>
			</div>
		</div>
	</div>
</nav>