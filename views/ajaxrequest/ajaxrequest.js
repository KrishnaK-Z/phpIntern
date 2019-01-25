$(document).ready(function(){

	$('#subbtn').click(function(event){
		event.preventDefault();
			
		var data = new FormData($('#registerForm')[0]);

		$.ajax({

					//url: $(form).attr('action'),
					 url: "http://localhost:7000/register",
					 data: data,
					 contentType: "application/JSON",
					 // processData: false,
					 headers: { 'Access-Control-Allow-Origin': '*' },
					 type: 'POST',
					 crossDomain: true,
					 dataType: 'json',
										}) .done(function (json){
										 // console.log(json)
										 if(json==0){
											 alert("Success")
										 }
										 else{
											 alert("Error")
										 }

			 }).fail(function(xhr,status,errorThrow){
				 // console.log('error'+errorThrow)
			 });


	});




	$('#logbtn').click(function(event){
		event.preventDefault();
    var form = document.getElementById('loginform');
		var userEmail = form.userEmail.value;
    var password = form.password.value;

		$.ajax({

					 url: "http://localhost:7000/login",
					 data: JSON.stringify({'userEmail':userEmail,'password':password}),
					 contentType: "application/json",

					 headers: { 'Access-Control-Allow-Origin': '*' },
					 type: 'POST',
					 crossDomain: true,
					 dataType: 'json',
										}) .done(function (json){
										 if(json==0){
											 alert("Success")
										 }
										 else{
											 alert("Error")
										 }

			 }).fail(function(xhr,status,errorThrow){
				 // console.log('error'+errorThrow)
			 });


	});


	$('#addEventBtn').click(function(event){
		event.preventDefault();

		var form = document.getElementById('addEventForm');
		var eventName = form.eventName.value;
		var eventCategory = form.eventCategory.value;
		var eventDate = form.eventDate.value;
		var startTime = form.startTime.value;
		var endTime = form.endTime.value;
		var streetAddress = form.streetAddress.value;
		var area = form.area.value;
		var pincode = form.pincode.value;

		$.ajax({

					 url: "http://localhost:7000/events",
					 data: JSON.stringify({"eventName":eventName,"eventCategory":eventCategory,'eventDate':eventDate,
					 											'streetAddress':streetAddress,'area':area,'pincode':pincode,
																'startTime':startTime,'endTime':endTime}),
					 contentType: "application/json",

					 headers: { 'Access-Control-Allow-Origin': '*' },
					 type: 'POST',
					 crossDomain: true,
					 dataType: 'json',
										}) .done(function (json){
										 // console.log(json)
										 if(json==0){
											 alert("Success")
										 }
										 else{
											 alert("Error")
										 }

			 }).fail(function(xhr,status,errorThrow){
				 // console.log('error'+errorThrow)
			 });


	});


});
