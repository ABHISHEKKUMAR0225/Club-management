<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GEC Vaishali Sports Club</title>
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
                    <h1 class="display-4 fw-bold text-white mb-3">Contact Us</h1>
                    <p class="lead text-light">Get in touch with GEC Vaishali Sports Club</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Send Us a Message</h3>
                            
                            <?php if (isset($_GET['success'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Your message has been sent successfully! We'll get back to you soon.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_GET['error'])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    There was an error sending your message. Please try again.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            <?php endif; ?>

                            <form action="process_contact.php" method="POST" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="sport" class="form-label">Interested Sport</label>
                                    <select class="form-select" id="sport" name="sport">
                                        <option value="">Select a sport (optional)</option>
                                        <option value="cricket">Cricket</option>
                                        <option value="football">Football</option>
                                        <option value="badminton">Badminton</option>
                                        <option value="volleyball">Volleyball</option>
                                        <option value="general">General Inquiry</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4 class="mb-4">Contact Information</h4>
                        
                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h6>Address</h6>
                                <p class="text-muted">Government Engineering College<br>Vaishali, Bihar, India</p>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h6>Email</h6>
                                <p class="text-muted">sports@gecvaishali.ac.in</p>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h6>Phone</h6>
                                <p class="text-muted">+91 XXX XXX XXXX</p>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h6>Office Hours</h6>
                                <p class="text-muted">Monday - Friday<br>9:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact for Sports Heads -->
                    <div class="mt-5">
                        <h5 class="mb-3">Contact Sports Heads Directly</h5>
                        <div class="sport-contact-list">
                            <div class="sport-contact-item">
                                <i class="fas fa-baseball-ball text-primary me-2"></i>
                                <span><strong>Cricket:</strong> Saquib Pathan</span>
                            </div>
                            <div class="sport-contact-item">
                                <i class="fas fa-futbol text-success me-2"></i>
                                <span><strong>Football:</strong> Tarang Kohli</span>
                            </div>
                            <div class="sport-contact-item">
                                <i class="fas fa-table-tennis text-warning me-2"></i>
                                <span><strong>Badminton:</strong> Abhishek Sharma</span>
                            </div>
                            <div class="sport-contact-item">
                                <i class="fas fa-volleyball-ball text-danger me-2"></i>
                                <span><strong>Volleyball:</strong> Anish Bumrah</span>
                            </div>
                        </div>
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
