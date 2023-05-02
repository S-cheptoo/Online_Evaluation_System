<?php
session_start();

if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index.php");


?>
<?php include("conn.php"); ?>
<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!-- UI THEME -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
    <!-- sidebar -->
    <?php include("includes/sidebar.php"); ?>

    <a href=""></a>

    <!-- Condition If a page is clicked-->
    <?php
    @$page = $_GET['page'];


    if($page != '')
    {
        if($page == "exam")
        {
            include("pages/exam.php");
        }
        else if($page == "result")
        {
            include("pages/result.php");
        }
        else if($page == "myscores")
        {
            include("pages/myscores.php");
        }

    }
    // Else redirect to home page
    else
    {
        include("pages/home.php");
    }


    ?>


    <!--footer--!>
    <?php include("includes/footer.php"); ?>

    <?php include("includes/modals.php"); ?>


