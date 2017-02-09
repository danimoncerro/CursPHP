<?php 

$products = [

	'laptop' => [ 
		'ram' => '8GB',
		'hdd' => '2TB',
		'proc' => 'i5',
	 ],

	 'mobile' =>  [
	 	'os' => 'android',
	 	'display' => '5.5 inch',
	 	'ram' => '1GB',
	 ],

	 'tv' => [
	 	'display' => '42 inch',
	 	'brand' => 'Philips',
	 	'smart' => 'Yes',
	 ]

];


// Categorie / Info1 / Info2 / Info3 
// key / prima valoare + key / valoare #2 + key / valoare 3 + key 

?>

<table border=1 width=600>


<tr>
<th> Categorie </th>
<th> Info1 </th>
<th> Info2 </th>
<th> Info3 </th>
</tr>

<tr>
	<td> laptop </td>
	<td> ram:  <?php echo $products['laptop']['ram'] ?> </td>
	<td> hdd: <?php echo $products['laptop']['hdd'] ?> </td>
	<td> proc: <?php echo $products['laptop']['proc'] ?> </td>
</tr>

<tr>
	<td> TV </td>
	<td> display:  <?php echo $products['tv']['display'] ?> </td>
	<td> brand: <?php echo $products['tv']['brand'] ?> </td>
	<td> smart: <?php echo $products['tv']['smart'] ?> </td>
</tr>



</table> 