<?php 
include "../../app/config/config.php";
include ROOT_PATH."/app/config/connect.php";
include ROOT_PATH."/assets/html/head.php";
include_once (ROOT_PATH."/app/services/csv.php");
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="csv" />
    <input type="submit" name="upload" value="Upload CSV" />
</form>

<?php
$display_table = '';
if (isset($_POST['upload']) && $_POST['upload'] == 'Upload CSV')
{
    $upload_dir = ROOT_PATH."/assets/csv/uploads";

    if ($_FILES['csv']['error'] == UPLOAD_ERR_OK)
    {        
        $tmp_name = $_FILES['csv']['tmp_name'];

        // This is the chosen file
        $name = basename($_FILES['csv']['name']);

        // Moving csv file in "uploads" folder
        $csvfile = $upload_dir.DIRECTORY_SEPARATOR.$name;
        move_uploaded_file($tmp_name, $csvfile);
        echo 'uploaded<br>';
        
        // Here comes the script which modifies the csv file
        get_html($csvfile);
    }
}
?>

<?php include ROOT_PATH."/assets/html/footer.php" ?>