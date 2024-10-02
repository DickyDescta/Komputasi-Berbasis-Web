<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Form</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h1>Contact Us</h1>

      <form action="konfirmasi.php" method="POST">
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
        </div>

        <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input type="email" class="form-control" id="mail" name="email" placeholder="Enter your email" required>
        </div>

        <p>Hobby:</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="Hobby1" name="hobbies[]" value="Nyanyi">
          <label class="form-check-label" for="Hobby1">Nyanyi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="Hobby2" name="hobbies[]" value="Lari">
          <label class="form-check-label" for="Hobby2">Lari</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="Hobby3" name="hobbies[]" value="Baca">
          <label class="form-check-label" for="Hobby3">Baca</label>
        </div>

        <p>Jenis Kelamin:</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelamin" id="Laki-laki" value="Laki-laki" required>
          <label class="form-check-label" for="Laki-laki">L</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelamin" id="Perempuan" value="Perempuan" required>
          <label class="form-check-label" for="Perempuan">P</label>
        </div>

        <div class="mb-3">
        <label for="dob" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>

        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Konfirmasi</button>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
