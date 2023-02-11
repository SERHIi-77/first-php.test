<?php
require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/header.php');
?>

<!-- ---content--- -->
<?php
  require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/sidebar.php');
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <?php
            if(empty($_GET)) {
              require($_SERVER['DOCUMENT_ROOT'].'/admin/modules/users/all.php');
            } else {
              switch ($_GET['page']){
                case 'edit':
                  require($_SERVER['DOCUMENT_ROOT'].'/admin/modules/users/edit.php');
                  break;
                case 'delete':
                  require($_SERVER['DOCUMENT_ROOT'].'/admin/modules/users/delete.php');
                  break; 
                case 'add':
                  require($_SERVER['DOCUMENT_ROOT'].'/admin/modules/users/add.php');
                  break; 
              }
            }
         
          ?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/footer.php');
?>
  
