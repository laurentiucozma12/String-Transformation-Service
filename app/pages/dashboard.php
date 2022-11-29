<?php 
include "../../app/config/config.php";
include ROOT_PATH."/app/config/connect.php";
include ROOT_PATH."/assets/html/head.php";
include_once (ROOT_PATH."/app/services/csv.php");
?>

<div class="container d-flex justify-content-center">
    <div class="wrap p-2 col-12">
        <div class="form-container p-2">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class=" d-flex justify-content-between">
                <label for="file-upload" class="custom-file-upload">
                    Upload file
                </label>
                <input type="file" id="file-upload" name="csv" />
                <label for="convert-file" class="custom-file-upload">
                    Convert file
                </label>
                <input type="submit" id="convert-file" name="upload" value="Upload CSV" />
            </form>
        </div>

        <div class="list-container d-flex justify-content-center m-4">
            <?php
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
                    
                    // Here comes the script which modifies the csv file
                    get_html($csvfile);
                }
            }
            ?>
        </div>        
    </div>
</div>

<?php include ROOT_PATH."/assets/html/footer.php" ?>