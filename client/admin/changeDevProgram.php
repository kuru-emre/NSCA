<?php
    $title = "Change Development Program";
    include_once "../includes/components/adminHeader.php";
    // Prevent Direct access and prevent non-admin's to access
    RestrictAdmin(CheckRole($_SESSION['User_ID']));
    defined('_DEFVAR') or exit(header('Location: ../index.php'));

    $conn = OpenCon();

    if(isset($_GET["programID"])){
        $pID = $_GET["programID"];
    }
    $row = getProgram($pID);
?>

<div class="row">
    <div class="col-7 offset-2">
        <div class="text-center">
            <h1 class="h1 mb-0 text-gray-800">Edit Development Programs</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-7 offset-2">


        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

        <!-- Name -->
                    <div class="form-group row">
                        <label for="programName" class="col-form-label">Program Name</label>
                        <input type="text"  name="programName" class="form-control mb-4" placeholder="Ex.Youth Summer Camp" value="<?php echo $row['Name']; ?>" required>
                    </div>

                    <!-- Duration -->
                    <div class="form-group row">
                        <label for="duration" class="col-form-label">Program Duration</label>
                        <input type="text"  name="duration" class="form-control mb-4" placeholder="Ex. 16 weeks" value="<?php echo $row['Duration']; ?>" required>
                    </div>

                    <!-- Discription -->
                    <div class="form-group row">
                        <label for="programDescription" class="col-form-label">Program Description</label>
                        <textarea name="programDescription"  placeholder="Ex. Fun summer camp aiming to teach cricket to youth" class="form-control mb-4" required><?php echo $row['Description']; ?></textarea>
                    </div>
                    <!-- Time -->
                    <div class="form-group row">
                        <label for="time" class="col-form-label">Program Timing</label>
                        <input type="text"  name="time" class="form-control mb-4" placeholder="Ex. 0915-1515" value="<?php echo $row['Time']; ?>" required>    
                    </div>
                    <!-- Charges -->
                    <div class="form-group row">
                        <label for="charge" class="col-form-label">Charge for the Program</label>
                        <input type="text"  name="charges" class="form-control mb-4" placeholder="Ex. $50 monthly" value="<?php echo $row['Charges']; ?>" required>
                    </div>

                    <!-- Type -->
                    <div class="form-group row">
                        <label for="type" class="col-form-label">Program Type</label>
                        <input type="text"  name="type" class="form-control mb-4" placeholder="Ex. youth" value="<?php echo $row['Type']; ?>" required>
                    </div>

                    <!-- Days run -->
                    <div class="form-group row">
                        <label for="days" class="col-form-label">Days of the week Program is run</label>
                        <input type="text"  name="days" class="form-control mb-4" placeholder="Ex. Saturdays and Sundays" value="<?php echo $row['DaysRun']; ?>" required>
                    </div>

                    <!-- Picture -->
                    <div class="form-row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="profilePictureAddon">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*"  id="file-upload" class="custom-file-input" name="profilePicture" aria-describedby="profilePictureAddon">
                                    <label class="custom-file-label" id="file-name" for="profilePicture">Profile Picture</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button class="btn light-blue text-white btn-block my-4" type="submit" name="changeProgram">Submit</button>
        </form>
        <?php

        if(isset($_POST["changeProgram"])){
            // Create User Image Directory
            $folderName = uniqid($registerFirstName . "_" . $registerLastName . "_");
            if (is_dir("img/userPictures/".$folderName) === false) {
                mkdir("img/userPictures/".$folderName, 0700, true);

                //error checking below. In the very small chance that the folder generated already exists, create another one
            } else {
                $folderName = uniqid($registerFirstName . "_" . $registerLastName . "_");
                if (is_dir("img/userPictures/".$folderName) === false) {
                    mkdir("img/userPictures/".$folderName, 0700, true);
                } else {
                    die(); //if they second folder generated exists too. Just give up and move on.
                }
            }

            // Check To See If File Is Actually Uploaded
            if (is_uploaded_file($_FILES["profilePicture"]["tmp_name"])) {
                // File Handling
                $target_dir = "img/userPictures/" . $folderName . "/";
                $target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $file_path = $target_dir;

                // If File Is Too Large Give Error and remove folder
                if ($_FILES['profilePicture']['size'] > 3145728) {
                    echo "<br><p class='text-danger'>File is too large, Please try again.</p>";
                    rmdir("img/userPictures/".$folderName);
                    die();
                }
                // If File Type is incorrect Give Error and remove folder
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "<br><p class='text-danger'>File type is incorrect, Please try again.</p>";
                    rmdir("img/userPictures/".$folderName);
                    die();
                }
            }

            if(setProrgam($pID , $_POST["programName"] , $_POST["duration"] , $_POST["programDescription"] , $_POST["time"] , $_POST["charges"] , $_POST["type"] , $_POST["days"], $file_path))
            {
                header("Location: editDevPrograms.php");
            }
        }
        ?>
    </div>
</div>

<?php
    include_once "../includes/components/footer.php";
?>