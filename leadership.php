<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership - GEC Vaishali Sports Club</title>
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
                    <h1 class="display-4 fw-bold text-white mb-3">Our Leadership</h1>
                    <p class="lead text-light">Meet the dedicated leaders who drive our sports club forward</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-5">
        <div class="container">
            <!-- Faculty In-charge -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="mb-5">Faculty Leadership</h2>
                    <div class="faculty-card">
                        <div class="leader-avatar faculty-avatar">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3 class="mt-3">Nishant Nilay</h3>
                        <p class="lead text-primary">Faculty In-charge</p>
                        <p class="text-muted">
                            Providing guidance and support to all sports activities at GEC Vaishali. 
                            Ensuring academic excellence alongside athletic achievements.
                        </p>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- Sports Heads -->
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Sports Team Heads</h2>
                    <p class="text-muted">Dedicated student leaders managing individual sports disciplines</p>
                </div>
            </div>

            <div class="row">
                <!-- Cricket Head -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="leader-card">
                        <div class="card-body text-center">
                            <div class="leader-avatar cricket-theme">
                                <i class="fas fa-baseball-ball"></i>
                            </div>
                            <h4 class="mt-3">Saquib Pathan</h4>
                            <p class="text-primary fw-semibold">Cricket Head</p>
                            <p class="text-muted">
                                Leading the cricket team with strategic gameplay and team coordination. 
                                Focuses on developing both batting and bowling skills among team members.
                            </p>
                            <div class="leader-stats">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-trophy text-warning"></i>
                                            <p class="mb-0 mt-1"><small>Tournaments</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-users text-info"></i>
                                            <p class="mb-0 mt-1"><small>Team Building</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-medal text-success"></i>
                                            <p class="mb-0 mt-1"><small>Training</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Football Head -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="leader-card">
                        <div class="card-body text-center">
                            <div class="leader-avatar football-theme">
                                <i class="fas fa-futbol"></i>
                            </div>
                            <h4 class="mt-3">Tarang Kohli</h4>
                            <p class="text-success fw-semibold">Football Head</p>
                            <p class="text-muted">
                                Passionate about football strategy and team coordination. Emphasizes fitness, 
                                teamwork, and competitive spirit in all training sessions.
                            </p>
                            <div class="leader-stats">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-trophy text-warning"></i>
                                            <p class="mb-0 mt-1"><small>Championships</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-users text-info"></i>
                                            <p class="mb-0 mt-1"><small>Squad Management</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-dumbbell text-danger"></i>
                                            <p class="mb-0 mt-1"><small>Fitness</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Badminton Head -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="leader-card">
                        <div class="card-body text-center">
                            <div class="leader-avatar badminton-theme">
                                <i class="fas fa-table-tennis"></i>
                            </div>
                            <h4 class="mt-3">Abhishek Sharma</h4>
                            <p class="text-warning fw-semibold">Badminton Head</p>
                            <p class="text-muted">
                                Expert in badminton techniques and training methodologies. Focuses on precision, 
                                agility, and mental concentration for optimal performance.
                            </p>
                            <div class="leader-stats">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-target text-primary"></i>
                                            <p class="mb-0 mt-1"><small>Precision</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-bolt text-warning"></i>
                                            <p class="mb-0 mt-1"><small>Speed Training</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-brain text-info"></i>
                                            <p class="mb-0 mt-1"><small>Strategy</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Volleyball Head -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="leader-card">
                        <div class="card-body text-center">
                            <div class="leader-avatar volleyball-theme">
                                <i class="fas fa-volleyball-ball"></i>
                            </div>
                            <h4 class="mt-3">Anish Bumrah</h4>
                            <p class="text-danger fw-semibold">Volleyball Head</p>
                            <p class="text-muted">
                                Specialist in volleyball team dynamics and coordination. Emphasizes communication, 
                                timing, and teamwork to achieve victory in every match.
                            </p>
                            <div class="leader-stats">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-comments text-primary"></i>
                                            <p class="mb-0 mt-1"><small>Communication</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-stopwatch text-warning"></i>
                                            <p class="mb-0 mt-1"><small>Timing</small></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="stat">
                                            <i class="fas fa-hands-helping text-success"></i>
                                            <p class="mb-0 mt-1"><small>Teamwork</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Philosophy -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Our Leadership Philosophy</h2>
                    <p class="lead">
                        At GEC Vaishali Sports Club, our leadership believes in developing not just athletic skills, 
                        but also character, discipline, and teamwork. Each leader brings unique expertise and 
                        passion to their respective sports, ensuring every student gets the best guidance and support.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
                    <h5>Innovation</h5>
                    <p>Constantly improving training methods and strategies</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                    <h5>Dedication</h5>
                    <p>Committed to the growth and success of every athlete</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-star fa-3x text-warning mb-3"></i>
                    <h5>Excellence</h5>
                    <p>Striving for the highest standards in all activities</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
