	<section class="container">
		<div class="row">
			<div class="span12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#">1. Create Profile</a></li>
					<li><a href="/index.php/user-create-anon-profile">2. Anonymize Profile</a></li>
					<li><a href="#">3. Review and Publish</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="span12">
				<div class="alert alert-info">
					<h3>Create your full profile.</h3>
					<p>This will be the profile someone sees if you give them permission. 
						It will not be shown to anyone without your permission.</p>
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
				    <label>First Name</label>
				    <input type="text" name="first-name" placeholder="John">
				    <label>Last Name</label>
				    <input type="text" name="last-name" placeholder="Snow">
			    </fieldset>
			    <fieldset>
				    <legend>Location</legend>
				    <label>Country</label>
				    <input type="text" name="country" value="United States">
				    <label>Zip-Code</label>
				    <input type="text" name="region" placeholder="94109">
			    </fieldset>
			    <h3>Education</h3>
			    <fieldset>
				    <legend>College</legend>
				    <label>College Name</label>
				    <input type="text" name="school-name" placeholder="Yale">
				    <label>Graduation Year</label>
				    <input type="text" name="grad-year" placeholder="2010">
				    <label>Field of Study</label>
				    <input type="text" name="field-of-study" placeholder="Economics">
				    <label>Degree</label>
				    <input type="text" name="degree" placeholder="B.A.">
			    </fieldset>
			    <button type="button" name="add-college" class="btn">
			    	Add another college
			    </button>
			    <h3>Experience</h3>
			    <fieldset>
				    <legend>Most Recent Job</legend>
				    <label>Company</label>
				    <input type="text" name="company" placeholder="Facebook, Inc">
				    <label>Position</label>
				    <input type="text" name="position" placeholder="Engineer">
				    <label>Industry</label>
				    <input type="text" name="industry" placeholder="Internet">
				    <label>Start Date</label>
				    <input type="text" name="start-date" placeholder="2012-04-09">
				    <label>End Date</label>
				    <input type="text" name="end-date" placeholder="Currently working here.">
			    </fieldset>
			    <button type="button" name="add-college" class="btn">
			    	Add another position
			    </button>
			    <h3>Misc</h3>
			    <fieldset>
			    	<legend>Skills</legend>
			    	<label>List skills (seperated by commas)</label>
			    	<textarea name="skills" rows="5" class="span9" placeholder="Marketing"></textarea>
			    </fieldset>
			    <fieldset>
			    	<legend>Summary</legend>
			    	<label>Provide a summary about yourself.</label>
			    	<textarea name="summary" rows="5" class="span9" placeholder="I'm a detail oriented hard worker."></textarea>
			    </fieldset>
			    <fieldset>
			    	<legend></legend>
					  <button class="btn btn-success" type="submit">Create Profile</button>
					  <br/>
					  <br/>
					  <span class="help-block">This is your full-profile.</span>
					  <span class="help-block">It will not be shown to anyone without your permission.</span>
					 </fieldset>
				</form>
			</div>
		</div>
	</section>
</body>
</html>