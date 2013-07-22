var SignUpForm = {
	eForm: null,
	eEmailInput: null,
	ePasswordInput: null,
	signUpURL: null,
	email: null,
	password: null,

	handleFormSubmit: function(e) {
		e.preventDefault();

		this.email = this.eEmailInput.val();
		this.password = this.ePasswordInput.val();

		$.ajax({
			type: "POST",
			url: this.signUpURL,
			data: {
				email: this.email,
				password: this.password
			}
		}).done(function(response){
			console.log('response');
			console.log(response);
			if (response == 'username exists') {
				SignUpForm.userNameTaken();
			} else if (response == 'true') {
				SignUpForm.userNameCreated();
			}
		});
	},

	userNameTaken: function() {
		console.log('user name taken');
	},

	userNameCreated: function() {
		console.log('username created');
		window.location = '/index.php/user-create-profile';
	},

	init: function(eForm, eEmailInput, ePasswordInput) {
		this.eForm = eForm;
		this.eEmailInput = eEmailInput;
		this.ePasswordInput = ePasswordInput;
		this.signUpURL = "/index.php/ajax/user-sign-up-via-email";

		this.eForm.submit($.proxy(this.handleFormSubmit, this));
	},
}


$(document).ready(function() {
	eForm = $('form[name="email-sign-up"]');	
	eEmailInput = eForm.find('input[name="email"]');
	ePasswordInput = eForm.find('input[name="password"]');
	SignUpForm.init(eForm, eEmailInput, ePasswordInput);
});