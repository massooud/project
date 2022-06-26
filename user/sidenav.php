<div class="sidenav">
  <a href="dashboard.php"> <i class="fa fa-home"></i> Home</a>
  <button class="dropdown-btn ">Buying <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container bg-light ml-sm-4">
      <a href="pay_mobile.php"> Eazy Pesa</a>
      <a href="pay_cash.php"> Cash</a>
      <a href="pay_bank.php"> Bank</a>
  </div>
  <a href="#contact">Sales</a>
</div>
    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }
    </script>
  </body>
</html>