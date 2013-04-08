<div class="navbar navbar-fixed-bottom">
  <div class="navbar-inner">
    
    <div class="container">

       <a class="brand" href="#">CodeGuilte</a>

    <ul class="nav">
  	
  		<li class="active">
    		<a href="index.php">Home</a>
  		</li>
  
  		<li>
  			<a href="works.php">i do ... </a>
  		</li>
  		
  		<li>
  			<a href="blog.php">Blog</a>
  		</li>
	</ul>
    

<ul class="nav">
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          Works and Trip
          <b class="caret"></b>
    </a>
    
    <ul class="dropdown-menu">
      	<li><a href="development.php" >development</a></li>
    	<li class="divider"></li>
        <li><a href="#">design</a></li>
    </ul>

  </li><!--end id= infra-->
    </ul>
  </li>	
</ul>

        <ul class="nav pull-right">
      <li>
        <a data-toggle="modal" href="#myModal" >Thanks to...</a>
     </ul>  

       <ul class="nav pull-right">
      <li class="divider-vertical"></li>
  </ul>

  <!--<form class="navbar-search pull-right">
        <input type="text" id='search' class="search-query" placeholder="Search">
  </form>-->
  
  <ul class="nav pull-right">
      <li class="divider-vertical"></li>
  </ul>
    </div><!--end container -->
  </div>
</div>


    <div class="modal hide" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Thank's To...</h3>
  </div>
  <div class="modal-body">
   <?php include('trank_to.php') ?>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>