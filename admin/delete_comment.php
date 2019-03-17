<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>


<?php 

if(empty($_GET['id']))   {
    redirect("comments.php");

} 

$user = User::find_by_id($_GET['id']);

if($user)  {
    $user->delete();
    redirect("comments.php");


} else {

    redirect("comments.php");


}





?>
        