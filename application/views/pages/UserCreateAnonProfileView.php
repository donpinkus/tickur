	<section class="container">
		<div class="row">
			<div class="span12">
				<ul class="nav nav-tabs">
					<li><a href="/index.php/user-create-profile">1. Create Profile</a></li>
					<li class="active"><a href="#">2. Anonymize Profile</a></li>
					<li><a href="#">3. Review and Publish</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					<h3>Create your anonymous profile.</h3>
					<p>This is your <strong>anonymous</strong> profile. It will be 
						publicly searchable.</p>
					<p>Recruiters will be able to view your anonymous profile, and request
						access to your full profile. They will <strong>not</strong> be able 
						to see your full profile until you give them access.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<ul class="nav nav-tabs nav-stacked">
					<li class="active"><a href="#">General</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Experience</a></li>
					<li><a href="#">Skills</a></li>
					<li><a href="#">Recommendations</a></li>
					<li><a href="#">Misc</a></li>
				</ul>
			</div>
			<div class="span9">
				<form name="create-profile" action="/index.php/ajax/user-create-full-profile" method="post">
					<h3>General</h3>
		 				<fieldset>
					    <legend>Name</legend>
					  	<label>First Name (Anonymous)</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="first-name" placeholder="John" disabled>
					    <label>Last Name (Anonymous)</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="last-name" placeholder="Snow" disabled>
			  		</fielset>
				    <fieldset>
					    <legend>Location</legend>
					    <label>Country</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="country" value="United States" disabled>
					    <label>Zip-Code</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="region" placeholder="94109" disabled>
				    </fieldset>
				    <h3>Education</h3>
				    <fieldset>
					    <legend>College</legend>
					    <label>College Name</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="school-name" placeholder="Yale">
					    <label>Graduation Year</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="grad-year" placeholder="2010">
					    <label>Field of Study</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="field-of-study" placeholder="Economics">
					    <label>Degree</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="degree" placeholder="B.A.">
				    </fieldset>
				    <button type="button" name="add-college" class="btn">
				    	Add another college
				    </button>
				    <h3>Experience</h3>
				    <fieldset>
					    <legend>Most Recent Job</legend>
					    <label>Company</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="company" placeholder="Facebook, Inc">
					    <label>Position</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="position" placeholder="Engineer">
					    <label>Industry</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="industry" placeholder="Internet">
					    <label>Start Date</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini">Hide</button>
							</div>
					    <input type="text" name="start-date" placeholder="2012-04-09">
					    <label>End Date</label>
					    <div class="btn-group">
							  <button class="btn btn-mini disabled">Show</button>
							  <button class="btn btn-mini ">Hide</button>
							</div>
					    <input type="text" name="end-date" placeholder="Currently working here.">
				    </fieldset>
				    <button type="button" name="add-college" class="btn">
				    	Add another position
				    </button>
				    <h3>Misc</h3>
				    <fieldset>
				    	<legend>Skills</legend>
				    	<div class="row">
				    		<div class="span4">
						    	<label>List skills (seperated by commas)</label>
						    	<textarea name="skills" rows="5" placeholder="Marketing" disabled></textarea>
						    </div>
						    <div class="span4">
						    	<label>List skills <strong>Anonymous</strong> (seperated by commas)</label>
						    	<textarea name="skills" rows="5" placeholder="Marketing"></textarea>
						    </div>
						  </div>
				    </fieldset>
				    <fieldset>
				    	<legend>Summary</legend>
				    	<div class="row">
				    		<div class="span4">
						    	<label>Provide a summary (Full Profile)</label>
						    	<textarea name="summary" rows="5" class="span4" placeholder="I'm a detail oriented hard worker." disabled></textarea>
						    </div>
						    <div class="span4">
						    	<label>Provide a summary (Anonymous)</label>
						    	<textarea name="summary" rows="5" class="span4" placeholder="I'm a detail oriented hard worker."></textarea>
						    </div>
						  </div>
				    </fieldset>
				    <fieldset>
				    	<legend></legend>
						  <button class="btn btn-success" type="submit">Create Anonymous Profile</button>
						  <br/>
						  <br/>
						  <span class="help-block">This is your anonymous profile.</span>
						  <span class="help-block">It will be publicly viewable and searchable.</span>
						 </fieldset>
					</form>
				</div>
			</div>
		</section>
	</body>
</html>