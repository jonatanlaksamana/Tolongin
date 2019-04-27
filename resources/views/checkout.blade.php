@extends('layouts/app')

@section('content')
< <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-XRt4tcImqIkvp98P"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="hero-wrap hero-bread" style="background-image: url('images/checkout.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
	</div>
	
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
								</div>
								
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
                </div>
	            </div>
	          </form><!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>$20.60</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>$3.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>$17.60</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
									  
    <form id="payment-form" method="post" action="snapfinish">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
    
    <button id="pay-button">Pay!</button>
</div>
      </div>
	</section> <!-- .section -->

	<!-- Javascript for token generation -->
	<script type="text/javascript">
	$(function(){
		// Sandbox URL
		Veritrans.url = "https://api.sandbox.veritrans.co.id/v2/token";
		// TODO: Change with your client key.
		Veritrans.client_key = "SB-Mid-client-XRt4tcImqIkvp98P";
		//Veritrans.client_key = "VT-client-h7ubdjqpcsLAQnjY";
		
		//Veritrans.client_key = "d4b273bc-201c-42ae-8a35-c9bf48c1152b";
		var card = function(){
			return { 	'card_number'		: $(".card-number").val(),
						'card_exp_month'	: $(".card-expiry-month").val(),
						'card_exp_year'		: $(".card-expiry-year").val(),
						'card_cvv'			: $(".card-cvv").val(),
						'secure'			: false,
						'bank'				: 'bni',
						'gross_amount'		: 10000
						 }
		};

		function callback(response) {
			if (response.redirect_url) {
				// 3dsecure transaction, please open this popup
				openDialog(response.redirect_url);

			} else if (response.status_code == '200') {
				// success 3d secure or success normal
				closeDialog();
				// submit form
				$(".submit-button").attr("disabled", "disabled"); 
				$("#token_id").val(response.token_id);
				$("#payment-form").submit();
			} else {
				// failed request token
				console.log('Close Dialog - failed');
				//closeDialog();
				//$('#purchase').removeAttr('disabled');
				// $('#message').show(FADE_DELAY);
				// $('#message').text(response.status_message);
				//alert(response.status_message);
			}
		}

		function openDialog(url) {
			$.fancybox.open({
		        href: url,
		        type: 'iframe',
		        autoSize: false,
		        width: 700,
		        height: 500,
		        closeBtn: false,
		        modal: true
		    });
		}

		function closeDialog() {
			$.fancybox.close();
		}

		$('.submit-button').click(function(event){
			event.preventDefault();
			//$(this).attr("disabled", "disabled"); 
			Veritrans.token(card, callback);
			return false;
		});
	});

	</script>
	<script type="text/javascript">
  
	$('#pay-button').click(function (event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");
	
	$.ajax({
		
		url: './snaptoken',
		cache: false,

		success: function(data) {
			//location = data;

			console.log('token = '+data);
			
			var resultType = document.getElementById('result-type');
			var resultData = document.getElementById('result-data');

			function changeResult(type,data){
				$("#result-type").val(type);
				$("#result-data").val(JSON.stringify(data));
				//resultType.innerHTML = type;
				//resultData.innerHTML = JSON.stringify(data);
			}

			snap.pay(data, {
				
				onSuccess: function(result){
					changeResult('success', result);
					console.log(result.status_message);
					console.log(result);
					$("#payment-form").submit();
				},
				onPending: function(result){
					changeResult('pending', result);
					console.log(result.status_message);
					$("#payment-form").submit();
				},
				onError: function(result){
					changeResult('error', result);
					console.log(result.status_message);
					$("#payment-form").submit();
				}
			});
		}
	});
});

</script>

	@endsection