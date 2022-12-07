<?php
    $title = "Team";
    include_once 'includes/components/newheader.php';
    include_once 'includes/functions/security.php';
?>
    <div class="container mt-5 pt-5">


        <!--Section: Content-->
        <section class="team-section text-center dark-grey-text">

            <!-- Section heading -->
            <h3 class="font-weight-bold mb-4 pb-2">Our Amazing Teams</h3>
            <hr class="w-25 my-5">
            <br><br>
            <?php
                displayTeams();
            ?>

        </section>
        <!--Section: Content-->


    </div>

<?php include_once 'includes/components/footer.php'?>