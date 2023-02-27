<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2023|| Designed By Mr. Amit Kumar|| <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>



<!--Start Student registration Modal-->



<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Studen's Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!--Form Code from Bootstrap-->

         

         <form>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div>
        
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
            <small class="form-text">We'll never share your email with amyone else.</small>
          </div>


          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuemail" class="pl-2 font-weight-bold">New Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
          </div>
          
        </form>
        <!--End Student Registration Form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Signup</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--End Student registration Modal-->


<!--Start Student Login Form-->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Studen's Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!--Form Code from Bootstrap-->

         <form id="stuLoginForm">
        
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
          </div>


          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
          
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>



<!--End Student Login form-->

<!--Start Admin Login Modal-->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin's Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!--Form Code from Bootstrap-->

         <form id="adminLoginForm">
        
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
          </div>


          <div class="form-group">
            <i class="fas fa-key"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
          
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>





 


    <!--Jquery and Bootstrap JavaScript-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!--Font Awasome JAvaScript-->
    <script src="js/all.min.js"></script>

  </body>
</html>
