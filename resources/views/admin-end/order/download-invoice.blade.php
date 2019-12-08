<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table border="1" width="100%">
			<tr>
				<th><img src=""/></th>
				<td><strong>OxyRed  Technologies  LLC.</strong>
              <br />
                  <i>Address :</i> 245/908 , New York Lane,
              <br />
                  Forth Street , Deumark,
              <br />
                  United States. </td>
			</tr>
		</table>            
</div>
<br>
<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table border="1" width="100%">
			<tr>
				<th>
					<h4>  <strong>Client Information</strong></h4>
       				<strong> {{ $customer->first_name.' '.$customer->last_name}} </strong>
         			<br />
              		<b>Address : {{ $customer->mailing_address }}</b>
         			<br />
         			<b>Call : {{ $customer->mobile_number }}</b>
          			<br />
         			<b>E-mail : {{ $customer->email_address }}</b>
     			</th>
				<td>
					<h4>  <strong>Shipping Details </strong></h4>
				    <b> {{ $shipping->full_name}}</b>
				    <br />
				    <b>Address : {{ $shipping->shipping_address}}</b>
				    <br />
				    <b>Call : {{ $shipping->mobile_number}}</b>
				    <br />
				    <b>E-mail : {{ $shipping->email_address}}</b>
              </td>
			</tr>
		</table>            
</div>
<br>
<div style="margin-left: 447px;">
		<table border="1">
			<tr>
				<th><span>Invoice # </span></th>
				<td><span>0000000{{ $order->id }}</span></td>
			</tr>
			<tr>
				<th><span>Date : </span></th>
				<td><span>{{ $order->created_at }}</span></td>	
			</tr>
			<tr>
				<th><span>Amount Due : </span></th>
				<td><span> Tk.{{ $order->total_order }}</span></td>
			</tr>
		</table>            
</div>
<br>
<div class="row" style="width: 100%">
    <div style="width: 100%">
        <div style="width: 100%">
            <table border="1" style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 20%; text-align: center;">Item</th>
                        <th style="width: 40%; text-align: center;">Description</th>
                        <th style="width: 12%; text-align: center;">Rates(<span>Tk.</span>)</th>
                        <th style="width: 8%; text-align: center;">Qty.</th>
                        <th style="width: 18%; text-align: center;">Total Price(<span>Tk.</span>)</th>
                    </tr>
                </thead>
                <tbody>
                	@php($sum=0)
                	@foreach($orderDetails as $orderDetail)
                    <tr>
                        <td style="width: 20%; text-align: left;">{{ $orderDetail->product_name}}</td>
                        <td style="width: 40%; text-align: left;">Website Design</td>
                        <td style="width: 12%; text-align: center;">{{ $orderDetail->product_price}}</td>
                        <td style="width: 8%; text-align: center;">{{ $orderDetail->product_quantity}}</td>
                        <td style="width: 18%; text-align: center;">{{ $total = $orderDetail->product_price*$orderDetail->product_quantity}}</td>
                    </tr>
                    @php($totalsum =$sum + $total)
                    @endforeach     
                </tbody>
            </table>
		</div>
	</div>
</div>
<hr />
<div style="margin-left: 440px;">
	<table border="1">
		<tr>
			<th><span>Total Amount : </span></th>
			<td><span> Tk. </span><span>{{ $totalsum }}</span></td>
		</tr>
		<tr>
			<th><span>Tax : </span></th>
			<td><span>{{ $order->created_at }}</span></td>	
		</tr>
		<tr>
			<th><span>Bill Amount : </span></th>
			<td><span> Tk.{{ $order->total_order }}</span></td>
		</tr>
	</table>            
</div>
<br><br><br><br>
 <div>
         <div>
            <strong> Important: </strong>
             <ol>
                  <li>
                    This is an electronic generated invoice so doesn't require any signature.

                 </li>
                 <li>
                     Please read all terms and polices on  www.yourdomaon.com for returns, replacement and other issues.

                 </li>
             </ol>
             </div>
</body>
</html>