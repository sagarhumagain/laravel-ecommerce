@include('components.header')
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Billing &amp; Shipping</h1>
				<span>Forms Widget</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Widgets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Billing &amp; Shipping Form</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="form-widget">

						<!-- <div class="form-result"></div> -->

						<form class="row" id="checkout-form" action="https://uat.esewa.com.np/epay/main" method="post" enctype="multipart/form-data">
							<div class="form-process"></div>
							<div class="col-lg-6">
								<div class="row checkout-form-billing">
									<div class="col-12">
										<h3>Billing Information</h3>
									</div>
									
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="checkout-form-billing-email" id="checkout-form-billing-email" class="form-control required" value="" placeholder="Email">
                                    </div>
                                    <div class="col-12 form-group">
										<label>Name:</label>
										<input type="text" name="checkout-form-billing-name" id="checkout-form-billing-name" class="form-control required" value="" placeholder="Full Name">
									</div>
									<div class="col-12 form-group">
										<label>Address:</label>
										<input type="text" name="checkout-form-billing-street" id="checkout-form-billing-street" class="form-control required" value="">
                                    </div>
                                    <div class="col-6 form-group">
										<label>City:</label>
										<input type="text" name="checkout-form-billing-street" id="checkout-form-billing-street" class="form-control required" value="">
									</div>
									<div class="col-6 form-group">
										<label>province:</label>
										<input type="text" name="checkout-form-billing-city" id="checkout-form-billing-city" class="form-control required" value="">
									</div>
									<div class="col-6 form-group">
										<label>Post Code:</label>
										<input type="text" name="checkout-form-billing-post-code" id="checkout-form-billing-post-code" class="form-control required" value="">
									</div>
									<div class="col-6 form-group">
										<label>Phone:</label><br>
										<input type="text" name="checkout-form-billing-phone" id="checkout-form-billing-phone" class="form-control required" value="" >
                                    </div>

                                    <div class="col-12 topmargin">
										<h3>Payment Information</h3>
									</div>
									
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="checkout-form-billing-email" id="checkout-form-billing-email" class="form-control required" value="" placeholder="user@company.com">
                                    </div>
                                    <div class="col-12 form-group">
										<label>Name:</label>
										<input type="text" name="checkout-form-billing-name" id="checkout-form-billing-name" class="form-control required" value="" placeholder="John Doe">
                                    </div>
                                </div>
                                <!-- checkout form -->
                                    <div class="hidden">
									<input type="text"  name="tAmt" value="{{Cart::total()}}" />
								    </div>
                                    <div class="hidden">
									<input type="text"  name="amt" value="{{Cart::subtotal()}}" />
								    </div>
                                    <div class="hidden">
									<input type="text"  name="txAmt" value="{{Cart::tax()}}" />
								    </div>
                                    <div class="hidden">
									<input name="psc" value="0" />
								    </div>
                                    <div class="hidden">
                                    <input value="3" name="pdc" />
								    </div>
                                    <div class="hidden">
                                    <input value="epay_payment" name="scd">
								    </div>
                                    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
                                    <input value="{{ route('esewa.success')}}" type="hidden" name="su">
                                    <input value="{{ route('checkout.index')}}" type="hidden" name="fu">
                                    <div class="form-group">
									<button type="submit" name="checkout-form-submit" class="btn  btn-secondary btn-success">Complete Order</button>
								    </div>
                             </div>
                             
                            
							<div class="col-lg-6 mt-5 mt-lg-0">
    
								<div class="row checkout-form-shipping">
									<div class="col-12">
                                        <h3>Your Order</h3>
                                        <table class="table cart">
                                            <thead>
                                                <tr>

                                                    <th class="cart-product-thumbnail">Image</th>
                                                    <th class="cart-product-name">Product</th>
                                                    <th class="cart-product-price">Unit Price</th>
                                                    <th class="cart-product-quantity">Quantity</th>
                                                    <th class="cart-product-subtotal">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- displaying content of store fucntion of card contorller -->
                                            @foreach ( Cart::content() as $item)
                                                <tr class="cart_item">
                                                    <td class="cart-product-thumbnail">
                                                        <a href=""><img width="64" height="64" src="{{asset('frontend/images/shop/thumbs/dress/3.jpg')}}" alt="Pink Printed Dress"></a>
                                                    </td>

                                                    <td class="cart-product-name">
                                                        <a href=''>{{ $item->name }}</a>
                                                    </td>

                                                    <td class="cart-product-price">
                                                        <span class="amount">{{ $item->price}}</span>
                                                    </td>
                                                    <td class="cart-product-price">
                                                        <span class="amount">{{ $item->qty}}</span>
                                                    </td>

                                                    <td class="cart-product-subtotal">
                                                        <span class="amount"> {{ $item->price * $item->qty }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>

                                        </table>
                                        <div class="row clearfix">
                                            <div class="col-lg-8 clearfix">
                                                <h4>Cart Totals</h4>

                                                <div class="table-responsive">
                                                    <table class="table cart">
                                                        <tbody>
                                                            <tr class="cart_item">
                                                                <td class="cart-product-name">
                                                                    <strong>Cart Subtotal</strong>
                                                                </td>

                                                                <td class="cart-product-name">
                                                                    <span class="amount">{{ Cart::subtotal() }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart_item">
                                                                <td class="cart-product-name">
                                                                    <strong>Tax</strong>
                                                                </td>

                                                                <td class="cart-product-name">
                                                                    <span class="amount">{{Cart::tax()}}</span>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart_item">
                                                                <td class="cart-product-name">
                                                                    <strong>Total</strong>
                                                                </td>

                                                                <td class="cart-product-name">
                                                                    <span class="amount color lead"><strong>{{Cart::total()}}</strong></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
									</div>
                                </div>
                                
							</div>
							
						</form>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
@include('components.footer')