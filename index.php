<?php
include 'home_partials/header.php';
?>

<?php
include 'home_partials/menu.php';
?>
    <main>
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Welcome to BDTutors</h2>
            <p class="col-12 text-center">This Web Application is an online tutor/student finding System.Here Prospective tutors and student can create accounts where they can login regularly to look for tutor/students.</p>
        </header>

        <!-- Gallery -->
        <div class="row tm-gallery">
            <!-- gallery page 1 -->
            <div id="tm-gallery-page-pizza" class="tm-gallery-page">
                <?php 
                 for($i= 1; $i<=8; $i++){
                     ?>
                    <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="dist/img/admin.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Teacher: Arifur Rahman Ovi</h4>
                            <h5 class="tm-gallery-title">Class : Ten</h5>
                            <p class="tm-gallery-description">Location: Uttara</p>
                            <p class="tm-gallery-description">Day: 4/week</p>
                            <p class="tm-gallery-price">Salary: 5000tk/month</p>
                        </figcaption>
                    </figure>
                </article>
                 <?php
                 }
                ?>
                
            </div> <!-- gallery page 1 -->
        </div>
        
    </main>
    <?php
    include 'home_partials/footer.php';
    ?>