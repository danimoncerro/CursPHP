<?php 


require_once 'header.php'; 

?>

<!-- Mesaj pentru alert -->
<?php if (isset($_SESSION['message'])): ?>

<div class="alert alert-warning">
	<?php echo $_SESSION['message']; ?>
</div>

<?php unset($_SESSION['message']); ?>
<?php endif; ?>


<body>

<div class="jumbotron text-center">
  <h1>FERMA JEBEREAN</h1> 
  <p>Specialistii in cultivarea ZMEUREI</p> 
</div>

<!-- Container (About Section) -->
<div id="despre" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Despre noi</h2><br>
      <h4>Un demers pentru cei care iubesc aroma zmeurei, cea mai apreciata dintre fructele de padure !</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<!-- Container (Portfoliu Section) -->
<div id="portofoliu" class="container-fluid text-center bg-grey">
  <h2>Portofoliu</h2><br>
  <h4>Ceea ce noi am realizat</h4>
  <div class="row text-center"> 
    <div class="col-sm-4">
      <div class="thumbnail">
      	<img src="poze/poza1.jpg" width="400" height="300">
        <p><strong>Toamna</strong></p>
        <p>Sfarsit de toamna in plantatie</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza2.jpg" width="400" height="300">
        <p><strong>Apus</strong></p>
        <p>Apus de soare la zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza3.jpg" width="400" height="300">
        <p><strong>Toamna</strong></p>
        <p>Zmeura de toamna</p>
      </div>
    </div>
    <br>
    <div class="col-sm-4">
      <div class="thumbnail">
      	<img src="poze/poza4.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza5.jpg" alt="New York" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza6.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
     
     <br>

     <div class="col-sm-4">
      <div class="thumbnail">
      	<img src="poze/poza7.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza8.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza9.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>

     <br>

     <div class="col-sm-4">
      <div class="thumbnail">
      	<img src="poze/poza10.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza11.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza12.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>


     <br>

     <div class="col-sm-4">
      <div class="thumbnail">
      	<img src="poze/poza13.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza14.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="poze/poza15.jpg" width="400" height="300">
        <p><strong>imagine</strong></p>
        <p>zmeura</p>
      </div>
    </div>

    </div>
  </div><br>
  
  <h2>Ce spun clientii nostri</h2>
  <div id="testimoniale" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Foarte buna zmeura. Gust si aroma adevarata. Recomand cu drag."<br><span style="font-style:normal;">Paula Brandusan</span></h4>
      </div>
      <div class="item">
        <h4>"Un singur cuvant... WOW!!"<br><span style="font-style:normal;">Loredana</span></h4>
      </div>
      <div class="item">
        <h4>"Foarte intretinuta ferma si la cum arata fructele cred ca sunt si foarte gustoase...felicitari fermierilor ...recomand aceste produse, de la acesti fermieri romani."<br><span style="font-style:normal;">Marian Bogorodea</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Magazin) -->

<div id="magazin" class="container-fluid text-center bg-grey">
  <h2>Magazin</h2><br>

		  Produse disponibile

		  <p>Trebuie sa te loghezi sa poti vedea produsele disponibile!</p>
		  
		 </div>
		<div class="col-md-3">
		</div>

	</div>
</div>

<!-- Container (Contact) -->

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactati-ne si va vom raspunde in maxim 24 de ore.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Danestii Chioarului</p>
      <p><span class="glyphicon glyphicon-phone"></span> 0740-942.017</p>
      <p><span class="glyphicon glyphicon-envelope"></span> zmeura@zmeurisul.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>




<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>



<?php require_once 'footer.php'; ?>