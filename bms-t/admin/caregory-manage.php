<?php  
include('../config/config.php');
//add
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    $result =$conn->query("select * from role where id=".$_GET['id']);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}

?>

<h2>caregory Manage<h2>
<a href="caregory_manage.php">Add New Role</a>
<form method="Post" action="callback/category.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title" value="<?php echo $title; ?>" required>
<textarea name="description" ><?php echo $description; ?></textarea>
<input type="submit">
</form>