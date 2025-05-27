<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEC Vaishali Sports Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Welcome to <span class="text-primary">GEC Vaishali</span> Sports Club
                    </h1>
                    <p class="lead text-light mb-4">
                        Excellence in Sports, Excellence in Life. Join us in our journey to promote fitness, 
                        teamwork, and sportsmanship among the students of Government Engineering College, Vaishali.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="sports.php" class="btn btn-primary btn-lg">
                            <i class="fas fa-trophy me-2"></i>Our Sports
                        </a>
                        <a href="leadership.php" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-users me-2"></i>Leadership
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="sports-icons">
                        <i class="fas fa-baseball-ball sports-icon" data-sport="cricket"></i>
                        <i class="fas fa-futbol sports-icon" data-sport="football"></i>
                        <i class="fas fa-table-tennis sports-icon" data-sport="badminton"></i>
                        <i class="fas fa-volleyball-ball sports-icon" data-sport="volleyball"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="h1 mb-4">About Our Sports Club</h2>
                    <p class="lead mb-4">
                        The GEC Vaishali Sports Club is dedicated to fostering athletic excellence and promoting 
                        a healthy lifestyle among our students. We believe that sports play a crucial role in 
                        character development, leadership skills, and overall well-being.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4>Excellence</h4>
                        <p>We strive for excellence in every sport we participate in, pushing our limits and achieving new heights.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Teamwork</h4>
                        <p>Building strong teams and fostering collaboration among our members is at the heart of our mission.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Passion</h4>
                        <p>Our love for sports drives us to create an environment where everyone can pursue their athletic dreams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sports Overview -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Sports Disciplines</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="sport-card" data-sport="cricket">
                        <div class="sport-icon">
                            <i class="fas fa-baseball-ball"></i>
                        </div>
                        <h4>Cricket</h4>
                        <p class="text-muted">Led by Saquib Pathan</p>
                        <a href="sports.php#cricket" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="sport-card" data-sport="football">
                        <div class="sport-icon">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4>Football</h4>
                        <p class="text-muted">Led by Tarang Kohli</p>
                        <a href="sports.php#football" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="sport-card" data-sport="badminton">
                        <div class="sport-icon">
                            <i class="fas fa-table-tennis"></i>
                        </div>
                        <h4>Badminton</h4>
                        <p class="text-muted">Led by Abhishek Sharma</p>
                        <a href="sports.php#badminton" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="sport-card" data-sport="volleyball">
                        <div class="sport-icon">
                            <i class="fas fa-volleyball-ball"></i>
                        </div>
                        <h4>Volleyball</h4>
                        <p class="text-muted">Led by Anish Bumrah</p>
                        <a href="sports.php#volleyball" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
