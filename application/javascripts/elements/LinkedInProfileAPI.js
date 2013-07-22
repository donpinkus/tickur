var LinkedInProfileAPI = {

	member: null,
	LinkedInFields: [
		'certifications',
		'educations',   // fix something in this list. you were adding last-name.
		'email-address', // x
		'first-name',  // x
		'formatted-name', // dont need
		'headline', 
		'id',
		'industry', // x
		'interests',
		'languages',
		'last-name', // x
		'location:(name)',
		'maiden-name',
		'patents',
		'positions', // x
		'publications',
		'skills', // x
		'specialties',
		'summary',
	],

	/**
	 * This is executed from the LinkedIn API call. Happens on load of
	 * every page. 
	 */
	onLinkedInLoad: function() {
		IN.Event.on(IN, "auth", LinkedInProfile.onLinkedInAuth);
	},

	onLinkedInAuth: function() {
	  IN.API.Profile("me")
	  	.fields(LinkedInProfile.LinkedInFields)
	  	.result(LinkedInProfile.fillCreateProfileForm);
	},

	setLinkedInProfile: function(profiles) {
		LinkedInProfileAPI.member = profiles.values[0];
	}

	fillCreateProfileForm: function(profiles) {
		LinkedInProfile.member = profiles.values[0];
		console.log(profiles.values[0]);
		
		// eForm.find('input[name="first-name"]').value()
		LinkedInProfile.inputToAPIField = {
			first_name: {
				value: LinkedInProfile.member.firstName,
				formFieldName: "first-name"
			},
			last_name: {
				value: LinkedInProfile.member.lastName,
				formFieldName: "last-name"
			},
			email: {
				value: LinkedInProfile.member.emailAddress,
				formFieldName: "email"
			},
			region: {
				value: LinkedInProfile.member.location.name,
				formFieldName: "region"
			},
			country: {
				value: null,
				formFieldName: "null"
			},
			// Education
			degree: {
				value: LinkedInProfile.member.educations.values[0].degree,
				formFieldName: "degree"
			},
			college_name: {
				value: LinkedInProfile.member.educations.values[0].schoolName,
				formFieldName: "school-name"
			},
			grad_year: {
				value: LinkedInProfile.member.educations.values[0].endDate.year,
				formFieldName: "grad-year"
			},
			major: {
				value: LinkedInProfile.member.educations.values[0].fieldOfStudy,
				formFieldName: "field-of-study"
			},
			// Experience
			company: {
				value: LinkedInProfile.member.positions.values[0].company.name,
				formFieldName: "company"
			},
			position: {
				value: LinkedInProfile.member.positions.values[0].title,
				formFieldName: "position"
			},
			industry: {
				value: LinkedInProfile.member.positions.values[0].company.industry,
				formFieldName: "industry"
			},
			start_date: {
				value: LinkedInProfile.member.positions.values[0].startDate.year,
				formFieldName: "start-date"
			},
			end_date: {
				value: null,
				formFieldName: "end-date"
			},
			// Marketing
			skills: {
				value: LinkedInProfile.getSkillsString(LinkedInProfile),
				formFieldName: "skills"
			}
		};
		LinkedInProfile.setFormValues();
	},

	getSkillsString: function(LinkedInProfile) {
		var skillString = [];
		console.log('skillstring');
		console.log(LinkedInProfile);
		for (var skill_index in LinkedInProfile.member.skills.values) {
			skillString.push(LinkedInProfile.member.skills.values[skill_index].skill.name);
		}
		return skillString.join(", ");
	},

	setFormValues: function() {
		var eForm = $('form[name="create-profile"]');

		for (var field in LinkedInProfile.inputToAPIField) {
			// TODO: handle nested objects like Educations.
			inputName = LinkedInProfile.inputToAPIField[field].formFieldName;
			inputValue = LinkedInProfile.inputToAPIField[field].value;
			eForm.find(
				'input[name="' + inputName + '"], textarea[name="' + inputName + '"]')
			  .val(inputValue);
		}
	}


}

