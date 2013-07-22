/**
 * Initializes the Log In modal window
 */

var LogInModal = {

 init: function(eForm, eEmailInput, ePasswordInput) {
		this.eForm = eForm;
		this.eEmailInput = eEmailInput;
		this.ePasswordInput = ePasswordInput;
		this.signInURL = "/index.php/ajax/user-log-in-via-email";

		this.eForm.submit($.proxy(this.handleFormSubmit, this));
	},

	handleFormSubmit: function(e) {
		e.preventDefault();

		this.email = this.eEmailInput.val();
		this.password = this.ePasswordInput.val();

		$.ajax({
			type: "POST",
			url: this.signInURL,
			data: {
				email: this.email,
				password: this.password
			}
		}).done(function(response){
			console.log('response');
			console.log(response);
			if (response == 'false') {
				LogInModal.userNameNotExist();
			} else if (response == 'true') {
				LogInModal.logInUser();
			}
		});
	},

	userNameNotExist: function() {
		console.log('invalid login');
	},

	logInUser: function() {
		console.log('logging in');
		window.location = '/index.php/user-create-profile';
	}
}

$(document).ready(function(){
	var eLogInForm = $('#logInModal form');
	var eEmailInput = eLogInForm.find('input[name="email"]');
	var ePasswordInput = eLogInForm.find('input[name="password"]');

	LogInModal.init(eLogInForm, eEmailInput, ePasswordInput);
});







