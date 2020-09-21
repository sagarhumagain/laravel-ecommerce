
@include('components.header')
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Cart</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Shop</a></li>
					<li class="breadcrumb-item active" aria-current="page">Cart</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<!-- cart item list -->
					<div class="table-responsive">
					<!-- success/fail message for cart -->
						@if(session()->has('success_message'))
						<div class="btn btn-success">
						{{ session()->get('success_message')}}
						</div>
						@endif
						@if(count($errors)> 0)
						<div class="btn btn-danger">
							<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
							</ul>
						</div>
						@endif
						<!-- success/fail message for cart end-->

						<!-- counting cart items -->
						@if (Cart::count() > 0)


						<h2> {{ Cart::count() }} items in shopping cart</h2>
						<table class="table cart">
							<thead>
								<tr>
								<th class="cart-product-name">Action</th>

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
									<td class="cart-product-remove">
										<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i>  Remove</a><br>  <a href="#" class="" title="Save for Later"><i class="icon-shopping-cart"></i> Save for Later</a>

									</td>

									<td class="cart-product-thumbnail">
										<a href=""><img width="64" height="64" src="{{asset('frontend/images/shop/thumbs/dress/3.jpg')}}" alt="Pink Printed Dress"></a>
									</td>

									<td class="cart-product-name">
										<a href=''>{{ $item->name }}</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">{{ $item->price}}</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="1" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">{{ $item->price }}</span>
									</td>
								</tr>
							@endforeach
								
								<tr class="cart_item">
									<td colspan="6">
										<div class="row clearfix">
											<div class="col-lg-4 col-4 nopadding">
												<div class="row">
													<div class="col-lg-8 col-7">
														<input type="text" value="" class="sm-form-control" placeholder="Enter Coupon Code.." />
													</div>
													<div class="col-lg-4 col-5">
														<a href="#" class="button button-3d button-black nomargin">Apply Coupon</a>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-8 nopadding">
												<a href="shop.html" class="button button-3d notopmargin fright" >Proceed to Checkout</a>

											</div>
										</div>
									</td>
								</tr>
							</tbody>

						</table>
					</div>
					
					<div class="row clearfix">

						<div class="col-lg-6 clearfix">
							<h4>Cart Totals</h4>

							<div class="table-responsive">
								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">$106.94</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Shipping</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Free Delivery</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong>$106.94</strong></span>
											</td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>
					@else
					 <h2>No items in cart</h2>
					 <a href="#" class="button button-3d nomargin" style="margin-right:40px !important">Continue Shopping</a>

					@endif


					<div class="table-responsive topmargin">
						<h2>2 items saved for later</h2>
						<table class="table cart">
							<thead>
								<tr>
								<th class="cart-product-name">Action</th>

									<th class="cart-product-thumbnail">Image</th>
									<th class="cart-product-name">Product</th>
									<th class="cart-product-price">Unit Price</th>
									<th class="cart-product-quantity">Quantity</th>
									<th class="cart-product-subtotal">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="cart_item">
									<td class="cart-product-remove">
									<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i>  Remove</a><br>  <a href="#" class="" title="Save for Later"><i class="icon-shopping-cart"></i>Add to cart</a>

									</td>

									<td class="cart-product-thumbnail">
										<a href="#"><img width="64" height="64" src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress"></a>
									</td>

									<td class="cart-product-name">
										<a href="#">Pink Printed Dress</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">$19.99</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="2" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">$39.98</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td class="cart-product-remove">
										<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
									</td>

									<td class="cart-product-thumbnail">
										<a href="#"><img width="64" height="64" src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes"></a>
									</td>

									<td class="cart-product-name">
										<a href="#">Checked Canvas Shoes</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">$24.99</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="1" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">$24.99</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td class="cart-product-remove">
										<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
									</td>

									<td class="cart-product-thumbnail">
										<a href="#"><img width="64" height="64" src="images/shop/thumbs/small/tshirt-2.jpg" alt="Pink Printed Dress"></a>
									</td>

									<td class="cart-product-name">
										<a href="#">Blue Men Tshirt</a>
									</td>

									<td class="cart-product-price">
										<span class="amount">$13.99</span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="text" name="quantity" value="3" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">$41.97</span>
									</td>
								</tr>
							</tbody>

						</table>
					</div>
					@include('partials.might-like')

				</div>

			</div>

		</section><!-- #content end -->
@include('components.footer')