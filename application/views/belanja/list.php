<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<h1><?php echo $title ?></h1><hr>
				<div class="clearfix"></div>
				<br></br>
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">Gambar</th>
						<th class="column-2">Product</th>
						<th class="column-3">Harga</th>
						<th class="column-4 p-l-70">Jumlah</th>
						<th class="column-5">Sub total</th>
					</tr>

					<?php 
						// Looping keranjang belanja
						foreach($keranjang as $keranjang) { 
							// ambil data produk
							$id_produk	= $keranjang['id'];
							$produk 	= $this->produk_model->detail($id_produk);

					?>

					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $keranjang['name'] ?>">
							</div>
						</td>
						<td class="column-2"><?php echo $keranjang['name'] ?></td>
						<td class="column-3">Rp. <?php echo number_format($keranjang['price'],'0',',','.'); ?></td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="qty" value="<?php echo $keranjang['qty'] ?>">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5">Rp. 
						<?php  
						$sub_total = $keranjang['price'] * $keranjang['qty'];
						echo number_format($sub_total,'0',',','.') ;
						?>
						</td>
					</tr>

					<?php 
						// end looping
						}
					?>

					<tr class="table-row" style="font-weight: bold;">
						<td colspan="4" class="column-1">Total Belanja</td>
						<td class="column-2">Rp. <?php echo number_format($this->cart->total(),'0',',','.')?></td>
					</tr>

				</table>
			</div>
		</div>

		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="size10 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					Update Cart
				</button>
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					Checkout
				</button>
			</div>
		</div>
	</div>
</section>