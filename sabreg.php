<?php 
		  $a = array('General','Technology','Collapse time');
		  $info= array('Company engaged in the construction and industrial maintenance','FireWorks + CSS + HTML + Wordpress + Based on the modification of the template "some template"  + pinch of goole fonts + webkit + moz','1 Mes + some cups of coffe ') 		  
?>

<?php for ($i=0; $i < count($a) ; $i++) { ?>

<div class="accordion" id="accordion2" style='margin-top:10px;' >

<div class="accordion-group">

<div class="accordion-heading">

<h3>
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$i?>">
			<?=$a[$i]?></a>
</h3>

</div>

<div id="collapse<?=$i?>" class="accordion-body collapse" style="height: 0px; ">
	
	<div class="accordion-inner" id='post-container' >

		<p><?=$info[$i]?></p>
				
	</div>
	
		</div>

	</div>

</div>

<?php } ?>