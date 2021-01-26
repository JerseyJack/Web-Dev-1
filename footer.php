
<!-- Footer contains the back to top button, find out more link and a copyright watermark -->
<div class="container-fluid position-fixed fixed-bottom bg-dark" id="foot">
  <!-- Contain the find out more and copyright -->
  <div id="find-out">
    <!-- Find out more link acts in the same way as the about us link in the header -->
    <div class="nav-item" id="find-out-link">
      <a class="nav-link text-white" href="http://localhost/about-us/" >Find Out More About Us <span class="sr-only">(current)</span></a>
    </div>
    <!-- Simple paragraph to display the copyright -->
    <div>
      <p id="copyright">© The Empire News Company, All Rights Reserved</p>
    </div>
  </div>
  <!-- The back to top button -->
  <button class="btn btn-light rounded-pill" onclick="topFunction()" id="top-button" title="Return to top">Return to top</button>
</div>

<script>
//////////////// BACK TO TOP OF PAGE FUNCTIONS //////////////////////////
//Get the button element, inisialised for the below function
button = document.getElementById("top-button");

// Execute the scroll function that detects whether the user has scrolled low enough for button to be displayed
window.onscroll = function() {scrollFunction()};

//If the user scrolls down to around 20px, the back to top button will appear
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";//Appear
  } else {
    button.style.display = "none";//Disappear
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.documentElement.scrollTop = 0;
}
</script>



<!-- Optional JavaScript -->
<script src="http://127.0.0.1/wp-content/themes/assignmenttheme/script.js" type="text/javascript"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
