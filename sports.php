<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports - GEC Vaishali Sports Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold text-white mb-3">Our Sports</h1>
                    <p class="lead text-light">Discover the various sports disciplines we excel in</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sports Sections -->
    <section class="py-5">
        <div class="container">
            <!-- Cricket Section -->
            <div class="sport-section mb-5" id="cricket">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="sport-content">
                            <div class="sport-header">
                                <i class="fas fa-baseball-ball sport-icon-large text-primary"></i>
                                <h2 class="sport-title">Cricket</h2>
                            </div>
                            <p class="lead">
                                Our cricket team represents the spirit of determination and teamwork. Under the 
                                leadership of Saquib Pathan, we focus on developing both individual skills and 
                                team coordination.
                            </p>
                            <div class="sport-leader">
                                <h5><i class="fas fa-user-tie me-2"></i>Team Head</h5>
                                <p class="mb-0"><strong>Saquib Pathan</strong></p>
                                <p class="text-muted">Leading our cricket team with passion and expertise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sport-features">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Regular practice sessions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Inter-college tournaments</li>
                                <li><i class="fas fa-check text-success me-2"></i>Professional coaching</li>
                                <li><i class="fas fa-check text-success me-2"></i>Equipment provision</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Football Section -->
            <div class="sport-section mb-5" id="football">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="sport-content">
                            <div class="sport-header">
                                <i class="fas fa-futbol sport-icon-large text-success"></i>
                                <h2 class="sport-title">Football</h2>
                            </div>
                            <p class="lead">
                                Football at GEC Vaishali is more than just a game - it's a passion that brings 
                                students together. Tarang Kohli leads our football team with strategic thinking 
                                and motivational leadership.
                            </p>
                            <div class="sport-leader">
                                <h5><i class="fas fa-user-tie me-2"></i>Team Head</h5>
                                <p class="mb-0"><strong>Tarang Kohli</strong></p>
                                <p class="text-muted">Driving our football team towards excellence</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="sport-features">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Daily training sessions</li>
                                <li><i class="fas fa-check text-success me-2"></i>League competitions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Fitness programs</li>
                                <li><i class="fas fa-check text-success me-2"></i>Strategy development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Badminton Section -->
            <div class="sport-section mb-5" id="badminton">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="sport-content">
                            <div class="sport-header">
                                <i class="fas fa-table-tennis sport-icon-large text-warning"></i>
                                <h2 class="sport-title">Badminton</h2>
                            </div>
                            <p class="lead">
                                Badminton requires precision, agility, and mental focus. Our badminton team, 
                                under the guidance of Abhishek Sharma, emphasizes technique refinement and 
                                competitive spirit.
                            </p>
                            <div class="sport-leader">
                                <h5><i class="fas fa-user-tie me-2"></i>Team Head</h5>
                                <p class="mb-0"><strong>Abhishek Sharma</strong></p>
                                <p class="text-muted">Perfecting badminton skills with dedication</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sport-features">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Technique training</li>
                                <li><i class="fas fa-check text-success me-2"></i>Singles & doubles practice</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tournament participation</li>
                                <li><i class="fas fa-check text-success me-2"></i>Equipment maintenance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Volleyball Section -->
            <div class="sport-section mb-5" id="volleyball">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="sport-content">
                            <div class="sport-header">
                                <i class="fas fa-volleyball-ball sport-icon-large text-danger"></i>
                                <h2 class="sport-title">Volleyball</h2>
                            </div>
                            <p class="lead">
                                Volleyball is all about teamwork, communication, and quick reflexes. Anish Bumrah 
                                leads our volleyball team with a focus on building strong team dynamics and 
                                competitive skills.
                            </p>
                            <div class="sport-leader">
                                <h5><i class="fas fa-user-tie me-2"></i>Team Head</h5>
                                <p class="mb-0"><strong>Anish Bumrah</strong></p>
                                <p class="text-muted">Building strong volleyball teams and winning spirits</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="sport-features">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Team coordination drills</li>
                                <li><i class="fas fa-check text-success me-2"></i>Spike and serve training</li>
                                <li><i class="fas fa-check text-success me-2"></i>Inter-college matches</li>
                                <li><i class="fas fa-check text-success me-2"></i>Strength conditioning</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Join Our Sports Family?</h2>
            <p class="lead mb-4">Get in touch with us to learn more about joining our sports teams</p>
            <a href="contact.php" class="btn btn-light btn-lg">
                <i class="fas fa-envelope me-2"></i>Contact Us
            </a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
