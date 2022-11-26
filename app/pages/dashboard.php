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

    // Moving the csv file in "uploads" folder
    if ($_FILES['csv']['error'] == UPLOAD_ERR_OK)
    {
        $tmp_name = $_FILES['csv']['tmp_name'];
        $name = basename($_FILES['csv']['name']);
        $csvfile = $upload_dir.DIRECTORY_SEPARATOR.$name;
        move_uploaded_file($tmp_name, $csvfile);
        echo 'uploaded';
        $display_table = get_html($csvfile);
    }
}
?>

<div>
    <?php 
    if (strlen($display_table > 0))
    {
        echo $display_table; 
    }
    ?>
</div>

<?php include ROOT_PATH."/assets/html/footer.php" ?>