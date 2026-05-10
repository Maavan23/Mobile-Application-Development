<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Library</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #ffffff, #e6e6fa);
    }
    .section-title {
      color: #007bff;
    }
    .social-icons img {
      width: 30px;
      margin-right: 10px;
    }
    .card-img-top {
      height: 150px;
      object-fit: cover;
    }
    .rounded-circle {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?auto=format&fit=crop&w=80&q=80" alt="City Library" class="rounded-circle"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
        <a href="#" class="btn btn-primary">Search Catalog</a>
      </div>
    </div>
  </nav>


  <!-- Main content -->
  <div class="container py-5">
    <div class="row">
      <!-- Main banner -->
      <div class="row mb-5">
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1474367658825-e5856e55c3a7?auto=format&fit=crop&w=1200&q=80" alt="Library Interior" class="img-fluid">
        </div>
        <div class="col-lg-6 d-flex align-items-center">
          <div>
            <h1 class="display-4">Welcome to City Library</h1>
            <p class="lead">Your gateway to knowledge and learning.</p>
            <a href="#" class="btn btn-primary me-2">Explore Collections</a>
            <a href="#" class="btn btn-primary">Contact Us</a>
          </div>
        </div>
      </div>


      <!-- Left column -->
      <div class="col-lg-8">
        <!-- Service highlights -->
        <div class="row text-center mb-5">
          <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=300&q=80" alt="24/7 Access" class="rounded-circle mb-3">
            <h3>24/7 Access</h3>
            <p>Access our digital collections anytime, anywhere.</p>
          </div>
          <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?auto=format&fit=crop&w=300&q=80" alt="Extensive Collection" class="rounded-circle mb-3">
            <h3>Extensive Collection</h3>
            <p>Over 100,000 books, journals, and more.</p>
          </div>
          <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=300&q=80" alt="Expert Staff" class="rounded-circle mb-3">
            <h3>Expert Staff</h3>
            <p>Knowledgeable librarians ready to assist you.</p>
          </div>
        </div>


        <!-- About Us -->
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="section-title">About City Library</h2>
            <p>City Library has been serving the community for over 50 years, providing access to knowledge and fostering a love for reading.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6">
            <img src="https://img.freepik.com/premium-photo/attentive-classmates-studying-library_107420-89354.jpg" alt="Library Exterior" class="img-fluid">
          </div>
        </div>


        <!-- Services -->
        <div class="mb-5">
          <h2 class="text-center section-title">Our Services</h2>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Book Borrowing">
                <div class="card-body">
                  <h5 class="card-title">Book Borrowing</h5>
                  <p class="card-text">Borrow books, magazines, and more.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Reference Assistance">
                <div class="card-body">
                  <h5 class="card-title">Reference Assistance</h5>
                  <p class="card-text">Get help with research and information.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Digital Resources">
                <div class="card-body">
                  <h5 class="card-title">Digital Resources</h5>
                  <p class="card-text">Access e-books, databases, and more online.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Events and Workshops">
                <div class="card-body">
                  <h5 class="card-title">Events and Workshops</h5>
                  <p class="card-text">Join our regular events and learning sessions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Right column -->
      <div class="col-lg-4">
        <!-- FAQ -->
        <div class="mb-5">
          <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How do I borrow a book?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can borrow books by presenting your library card at the circulation desk.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What are your opening hours?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We are open Monday to Friday, 9 AM to 5 PM, and Saturday, 10 AM to 2 PM.
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Video -->
        <div class="mb-5">
          <h2 class="section-title">Library Tour</h2>
          <p>Take a virtual tour of our library.</p>
          <img src="https://app.libry.jp/assets/libry_native_icon_with_name-8d4aa49a.png" alt="Library Tour Video" class="img-fluid">
        </div>


        <!-- Contact Us -->
        <div class="mb-5">
          <h2 class="section-title">Contact Us</h2>
          <p>Have a question about our services or collections? Contact us below.</p>
          <form action="contact.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="https://app.libry.jp/assets/libry_native_icon_with_name-8d4aa49a.png" alt="City Library" class="rounded-circle mb-3">
          <p>Phone: (123) 456-7890</p>
          <p>Email: info@citylibrary.com</p>
          <p>Address: 123 Main St, City, Country</p>
          <div class="social-icons">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="30"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" width="30"></a>
          </div>
        </div>
        <div class="col-md-3">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Collections</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="login.php">System Login</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Our Services</h5>
          <ul class="list-unstyled">
            <li><a href="#">Book Borrowing</a></li>
            <li><a href="#">Reference Assistance</a></li>
            <li><a href="#">Digital Resources</a></li>
            <li><a href="#">Events and Workshops</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Help & Support</h5>
          <ul class="list-unstyled">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support Center</a></li>
            <li><a href="#">Terms and Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

