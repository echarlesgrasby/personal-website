<div id="cta">
<span> Welcome to my humble site! You might know me as:
	<ul> <li> A `Good Ol' Boy` (insert irony) from the Great State of Arkansas </li>
	     <li> An MS graduate in Information Quality at the University of Arkansas at Little Rock </li>
	     <li> An aspiring kenshi in the Arkansas Kendo Club <span> &#65396;&#65432;&#65400; </span></li>
	     <li> A guy that desperately wants to make it back to Denmark someday...</li>
	</ul>

</span>
</div>

<article>
<div id="sundries">
<p>I recently successfully defended my MS project, "Improving The Quality Of Manufacturing Information Via The Implementation Of An Employee Knowledge Base." I'm now trying to figure out
   how to fill the void left by finishing graduate school. I will probably spend some time meticulously crafting this site in order to better learn CSS layouts and PHP. </p>
<p>I've also begun to spend time learning LaTeX, which is what my résumé is currenly written in</p>
<p>There's not really much else to say. Drop me a line if you have an interesting project you'd like to work on. I've got some experience in database development and shell scripting.</p>
<span id="contact">&#x2709;:</span>
</div>
<figure id="me">
 <img src="../assets/kopenhavn-espressor.jpg" alt="kopenhavn-espresso">
 <figcaption> <pre><small>In K&oslash;penhavn With The Best Cup of Coffee</small></pre></figcaption>
</figure>
</article>
<div class="clear"></div>

<script> <!-- My (likely unsuccessful) attempt at preventing email harvesting... -->
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
