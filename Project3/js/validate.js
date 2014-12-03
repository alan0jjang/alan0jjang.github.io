// function formvalidate()
// {
// 	var uname = document.contact.name;
// 	var uemail = document.contact.email-address;
// 	var uaddinfo = document.contact.additional-info;
// 	{
// 		if(allLetter(uname))
// 	{
// 		if (ValidateEmail(uemail))
// 	}
// 	}
// 	return false;
// }

// function allLetter(uname)
// {
// 	var letters = /^[A-Za-z]+$/;
// 	if(uname.value.match(letters))
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			alert('Username must have alphabet characters only');
// 			uname.focus();
// 			return false;
// 		}
// }

// function ValidateEmail(uemail)
// {
// 	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// 	if(uemail.value.match(mailformat))
// 	{
// 		return true;
// 	}
// 	else
// 	{
// 		alert("You have entered and invalid email address!");
// 		uemail.focus();
// 		return false;
// 	}
// }

function validate() {
	if ($("#name").val() === "") {
		alert("You must fill in your name.");
		return false;
	}
	if ($("#email_add").val() === "") {
		alert("You must fill in your email");
		return false;
	}
	else {
		return true;
	}
}

// $(document).ready(function(){
// $("button").on("click", function(){
//   var message = $("<span>You have successfully submitted a form</span>");
//   $(this).after(message);
//   $(this).remove();
// });
// });

$(document).ready(function() {
	// //$(".contact-success").hide();

	// $(".form").submit(function(e) {
	// 	var isValid = validate();
	// 	if (isValid) {
	// 		$(".contact-form").slideUp();
	// 		$(".contact-success").slideDown();
	// 		e.preventDefault();
	// 	}
	// 	return false;
	// });
});
