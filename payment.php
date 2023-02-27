!--Start Navigation Bar> 
<?php
include('./header.php');
?>
    <!--End of Navigation Bar-->







    <div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/coursebanner.jpg" alt="courses" style= "width:100%; object-fit:cover;"   >
</div>
</div>



<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">

            </div>
            <div>
                <input type="Submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>

    </form>
</div>





<!--Start Contact Us-->
<?php
include('./contact.php')
?>







    
<!--Start Footer Section-->
<?php
include('./footer.php');
?>
<!--End Footer Section-->   