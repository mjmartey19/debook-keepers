<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Accounting, Bookkeeping, tax advisory">
    <meta name="description" content="Accountant in Ghana - Accounting, Bookkeeping and Tax Advisory Services">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lean-slider.css">
    <link rel="stylesheet" href="css/sample-styles.css">
	<script src="js/jquery.js"></script>
    <!-- External Font-awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/1.png">
	<script type="text/javascript" >
	   $(document).ready(function()
	   {
			$('#ContactForm').on('submit', function(e){
				e.preventDefault();
				$("#feedback").hide();
				$("#animation").show();
				var formData = new FormData($(this)[0]);
				$.ajax({
					url : $(this).attr('action') || window.location.pathname,
					type: 'POST',
					data: formData,
					success: function (data) {
						$("#animation").hide();
						var obj = $.parseJSON(data);
						var feedback = obj['feedback'];
						var response = obj['response'];
						if(feedback==1)
						{
							$("#feedback").show();
							$("#feedback").html("<div class='success'><p>"+response+"</p></div>");
						}else{
							if(response!=""){
								$("#feedback").show();
								$("#feedback").html("<div class='error'><p>"+response+"</p></div>");
							}
						}
					},
					cache: false,
					contentType: false,
					processData: false
				});
			});
	   });
	</script>
</head>