
$(document).ready(function()
{
    $("sidebar").mCustomScrollbar({
        theme: "minimal"
    });

});

$('#sidebarCollapse').on('click', function () 
{
        $('#sidebar').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

$("#create").click(function()
	{
		var Time = $("#Time").val();
		var date = $("#date").val();
		var Location = $("#Location").val();

		if (Time == '' || date == '' || Location == '')
		{
			swal({
				title: "Incomplete Form!",
				text: "Please ensure all fields have been entered.",
				icon: "warning",
				button: "OK",
			});
		}

		else
		{
			swal({
				title: "Successful!",
				text: "Your appointment has been booked.",
				icon: "success",
				button: "OK",
			});
		}
	}); 

	$("#submit").click(function()
	{
		var First_Name = $("#First_Name").val();
		var Last_Name = $("#Last_Name").val();
		var Email = $("#Email").val();
		var Address = $("#Address").val();
		var City = $("#City").val();
		var PostCode = $("#PostCode").val();
		var Contact = $("#Contact").val();
		var Username = $("#Username").val();
		var Password = $("#Password").val();
		var Gender = $("#Gender").val();
		var Height = $("#Height").val();
		var Weight = $("#Weight").val();
		var About = $("#About").val();
		var Goals = $("#Goals").val();

		if (First_Name == '' || Last_Name == '' || Email == '' ||
			Address == '' || City == '' || PostCode == '' ||
			Contact == '' || Username == '' || Password == '' ||
			Gender == '' || Height == '' || Weight == '' ||
			About == '' || Goals == '')
		{
			swal({
				title: "Incomplete Form!",
				text: "Please ensure all fields have been entered.",
				icon: "warning",
				button: "OK",
			});
		}

		else
		{
			swal({
				title: "Signup Successful!",
				text: "Your profile has been created.",
				icon: "success",
				button: "OK",
			});
		}
	}); 
