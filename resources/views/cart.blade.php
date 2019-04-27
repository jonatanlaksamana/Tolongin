
  @extends('layouts/app')

  @section('content')
	<div class="nabrak2"></div>
  <div class="hero-wrap hero-bread" style="background-image: url('images/cart.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div> 
  
  
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">

						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>

						      </tr>
						    </thead>
						    <tbody>
                           @foreach($cart as $car)
						      <tr class="text-center">

						        
						        <td class="product-name">
						        	<h3>{{$car->name}}</h3>

						        </td>
						        
						        <td class="price">Rp {{$car->price}}</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        

						      </tr><!-- END TR-->
                              @endforeach


						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Tax</span>
    						<span>Rp 10.000</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{$total  + 10000 }}</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="{{ route('checkout') }}"class="buttoncheckout">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
      @endsection
