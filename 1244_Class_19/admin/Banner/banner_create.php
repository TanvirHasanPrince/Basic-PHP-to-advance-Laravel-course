<!DOCTYPE html>
<html lang="en">

<?php
// die($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
if (basename(__DIR__) != 'admin') {
 $baseUrl = '../';
 $isInternal = true;
} else {
 $baseUrl = '';
 $isInternal = false;
}

?>

<?php include '../includes/head.php'; ?>

<body>

 <?php include '../includes/mainNav.php'; ?>


 <!-- Page container -->
 <div class="page-container">

  <!-- Page content -->
  <div class="page-content">

   <!-- Main sidebar -->
   <div class="sidebar sidebar-main">
    <div class="sidebar-content">

     <!-- User menu -->
     <div class="sidebar-user">
      <div class="category-content">
       <div class="media">
        <a href="#" class="media-left"><img src="../assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
        <div class="media-body">
         <span class="media-heading text-semibold">Victoria Baker</span>
         <div class="text-size-mini text-muted">
          <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
         </div>
        </div>

        <div class="media-right media-middle">
         <ul class="icons-list">
          <li>
           <a href="#"><i class="icon-cog3"></i></a>
          </li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <!-- /user menu -->


     <?php include '../includes/navigation.php'; ?>

    </div>
   </div>
   <!-- /main sidebar -->


   <!-- Main content -->
   <div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">


     <div class="breadcrumb-line">
      <ul class="breadcrumb">

       <li>
        <icon= href="#"> <i class="icon-image-compare position-left"></i>Banner</a>
       </li>
       <li class="active">Create</li>
      </ul>

      <ul class="breadcrumb-elements">
       <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <i class="icon-gear position-left"></i>
         Settings
         <span class="caret"></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
         <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
         <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
         <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
         <li class="divider"></li>
         <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
        </ul>
       </li>
      </ul>
     </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

     <!-- Basic datatable -->
     <div class="panel panel-flat">
      <div class="panel-heading">
       <h5 class="panel-title">Banner Create

       </h5>
       <div class="heading-elements">
        <ul class="icons-list">


         <!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
        </ul>
       </div>
      </div>

      <div class="panel-body">
       <!-- Basic examples -->
       <form class="form-horizontal mt-10" action="../controller/BannerController.php" method="post">
        <fieldset class="content-group mt-10">

         <?php

         if (isset($_GET['msg'])) { ?>

          <div class="alert alert-success no-border">
           <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
           <span class="text-semibold"> <?php echo $_GET['msg']; ?></span>
          </div>

         <?php
         } ?>


         <div class="form-group">
          <label class="control-label col-lg-2" for="title">Title</label>
          <div class="col-lg-10">
           <input type="text" class="form-control" id="title" name="title" required>
          </div>
         </div>

         <div class="form-group">
          <label class="control-label col-lg-2" for="sub_title">Subtitle</label>
          <div class="col-lg-10">
           <input type="text" class="form-control" id="sub_title" name="sub_title" required>
          </div>
         </div>


         <div class="form-group">
          <label class="control-label col-lg-2 " for="details">Details</label>
          <div class="col-lg-10">
           <textarea rows="5" cols="5" class="form-control" placeholder="Details" id="details" name="details" required></textarea>
          </div>
         </div>

         <div class="form-group">
          <label class="control-label col-lg-2 " for="image">Image</label>
          <div class="col-lg-10">
           <input type="file" class="form-control" id="image" name="image">
          </div>
         </div>

         <div class="text-right">
          <button type="submit" class="btn btn-primary" name="saveBanner">Submit </button>
          <a href="banner_List.php" class="btn btn-default">Back To List </a>

         </div>
        </fieldset>


       </form>


      </div>
      <!-- /basic examples -->

     </div>


    </div>
    <!-- /basic datatable -->







    <!-- Footer -->
    <div class="footer text-muted">
     &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
    </div>
    <!-- /footer -->

   </div>
   <!-- /content area -->

  </div>
  <!-- /main content -->

 </div>
 <!-- /page content -->

 </div>
 <!-- /page container -->

 <?php include '../includes/script.php'; ?>
</body>

</html>