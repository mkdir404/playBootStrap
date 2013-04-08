

	<div id='tuto' class='offset1'>Tutoriales</div>
		<ul id='menu1' class='offset1' style='display:none; position:absolute; top:22px;'>
			<li>PHP</li>
			<li>CSS</li>
			<li>General</li>
		</ul>


	<div id='artic'>Articulos</div>
		<ul id='menu1' class='offset1' style='display:none; position:absolute;'><li>PHP</li>
			<li>CSS</li>
			<li>General</li>
		</ul>


		<?php for ($i=0; $i < 3 ; $i++) { ?>		

		<div id='post' class='span10 offset1' style='margin-top:10px;'>

			<div id='title-post'><h1> Best of Tuts+ in June 2012 </h1></div>

			<div id='date' class='span2' style='margin-top:10px;'>
				<h1 id='day'>14</h1>
				<div id='date-group' class='offset1'>
				<h3 id='mon'>Jul</h3>
				<h4 id='year'>2012</h4>
				</div>

		<div id='autor'>
		<div id='autor-pic'><img src="pic.png"></div>
		<i class='icon-pencil'></i>	 Oscar Gutiérrez <br>
 		<i class='icon-comment'></i> 0 Comentarios 
		</div>

		<button id='readmore' class='btn btn-inverse' 
					data-content="And here's some amazing content. It's very engaging. right?" 
					data-original-title="A Title" >Seguir Leyendo 
					<i class='icon-circle-arrow-right icon-white'></i>
		</button>

		<div id='socialnetwork'><img src="img/socialnetwork.png" alt=""></div>

			</div> <!--end general info post-->
		
			<div id='img-post' class='span7 pull-right'><img src="img/megabox.png"></div>
			<div id='post-container' class='span7 pull-right'>
				El próximo gran proyecto de Kim Dotcom, fundador del extinto Megaupload, se llama MegaBox, y según él mismo dice se planea lanzar pronto una vez que se resuelvan sus problemas con la ley.
				Además de esto, Dotcom asegura que ya hay una gran variedad de grandes artistas que se han sumado al proyecto para hacer un lanzamiento a gran escala. Recordemos que en el pasado artistas como P Diddy, Will.I.am, Alicia Keys, Snoop Dogg y Kanye West hicieron un video para ayudar a MegaUpload, de modo que no suena tan descabellado pensar en una posible colaboración de los más importantes en el medio.
			</div>
			
		</div><!--end post-->

		<?php } ?>