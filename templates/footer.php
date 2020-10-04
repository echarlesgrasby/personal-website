<!--/* footer.php */-->

<div class="include"> <!-- footer div -->
	<span>&ndash; ERIC GRASBY, MSIQ &ndash; </span> <span><?php echo date('l \t\h\e jS'); ?> &ndash; </span> <span id="contact">&#x2709;:</span> &ndash; 
	<img src="../assets/gif/kenshin-kata.gif" alt="Kenshin Himura Kata" title="Kenshin Himura Kata" />
</div>

<script async> <!-- My (likely unsuccessful) attempt at preventing email harvesting... -->
	let a=[];
	 a.push("ec");
   a.push("gra");
   a.push("sby");
   a.push("@ualr");
   a.push(".ed");
	 a.push("u");
	function buildAddr(arr){var op=arr.join(""); return op;}
	var op = buildAddr(a);
        function prior(){ return document.getElementById("contact").innerHTML;};
	function display(op){document.getElementById("contact").innerHTML = prior() + " " + op;}
  display(op);
</script>