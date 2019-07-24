<?php
    require_once("../private/initialize.php");

    $error = "";

    if(isPostRequest()){
        //set variables from form
        $firstName = isset($_POST['firstName'])??'';
        $lastName = isset($_POST['lastName'])??'';
        $birthDate = isset($_POST['birthdate'])??'';
        $deathDate = isset($_POST['deatdate'])??'';
        //validate incoming data

        //reload page and display errors if exist or

            //insert new grave
            //upload image
            //redirect if success


    }




    include("../Shared/header.php");
    ?>
    <div class="addAncestorTitle"></div>
    <div>
        <h2>Add Your Ancestor</h2>
        <form class="addAncestor" action="" method="post">
            <div class="w3-row">
                <div class="w3-half">
                    <label>First Name</label>
                    <input type="text" name="firstName">
                </div>
                <div class="w3-half">
                    <label>Last Name</label>
                    <input type="text" name="lastName">
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                <div class="w3-half">
                    <label>Birth Date</label>
                    <input type="date" name="birthdate" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
                <div class="w3-half">
                    <label>Date of Death</label>
                    <input type="date" name="birthdate" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
            </div><!--END ROW -->
            <div class="w3-row">
                <label>Select Image To Upload</label>
                <input type="file" name="photo">
            </div><!--END ROW -->

            <input class="addGrave" type="submit" name="submit" value="Save Record">

        </form>
    </div>

<?php
    include("../Shared/footer.php");
    ?>