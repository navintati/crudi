$(document).ready(function($) {

	// SignUp Form
	$("#signup_form").submit(function(e) {

		// var base_uri = "<?php echo base_url(); ?>";
		var fname = $("#fname").val();
		var lname = $("#lname").val();
		var age = $("#age").val();
		var gender = $('#gender:checked').val() ? true : false;
		var add = $("textarea").val();
		var image = $("#image").val();

		var hobbies = [];
	    $(':checkbox:checked').each(function(i){
	        hobbies[i] = $(this).val();
	    });

	    // console.log(base_uri);
	    // return false;

		if(fname == ''){
			$("#err_fname").html("Enter Your First Name");
			$("#err_fname").css('color','red');
			$("#fname").focus();
			return false;
		} else {
			$("#err_fname").hide();
		}

		if(lname == ''){
			$("#err_lname").html("Enter Your Last Name");
			$("#err_lname").css('color','red');
			$("#lname").focus();
			return false;
		} else {
			$("#err_lname").hide();
		}

		if(age == ''){
			$("#err_age").html("Enter your Age");
			$("#err_age").css('color','red');
			$("#age").focus();
			return false;
		} else {
			$("#err_age").hide();
		}

		if(gender == false ){
			$("#err_gender").html("Select Gender");
			$("#err_gender").css('color','red');
			$("#gender").focus();
			return false;
		} else {
			$("#err_gender").hide();
		}

		if(hobbies == ''){
			$("#err_hobbies").html("Select Your Hobbies");
			$("#err_hobbies").css('color','red');
			$("#hobbie").focus();
			return false;
		} else {
			$("#err_hobbies").hide();
		}

		if(add == ''){
			$("#err_address").html("Enter Your Address");
			$("#err_address").css('color','red');
			$("textarea").focus();
			return false;
		} else {
			$("#err_address").hide();
		}

		if(image == ''){
			$("#err_photo").html("Choose Picture JPG|PNG|GIF");
			$("#err_photo").css('color','red');
			$("#image").focus();
			return false;
		} else {
			$("#err_photo").hide();
		}

		return true;

	});

	// Another 
	
});
