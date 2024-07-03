<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="icon" href="../Assets/title_logo.png" type="image/x-icon" />
    <script
      src="https://kit.fontawesome.com/13ccb33514.js"
      crossorigin="anonymous"
    ></script>
    <title>Sign Up</title>
  </head>
  <body>
  
  <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quantum_university";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT id FROM users WHERE email = ?";
    $checkEmailStmt = $conn->prepare($checkEmailQuery);

    if ($checkEmailStmt) {
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $checkEmailStmt->store_result();

        if ($checkEmailStmt->num_rows > 0) {
            // Email already exists, show an error message
            echo '<script>alert("Email already exists. Please use a different email.");</script>';
        } else {
            // Email is unique, proceed with registration
            $checkEmailStmt->close();

            // Prepare and bind
            $insertQuery = "INSERT INTO users (fullName, email, password) VALUES (?, ?, ?)";
            $insertStmt = $conn->prepare($insertQuery);

            // Check if the statement is prepared successfully
            if ($insertStmt) {
                $insertStmt->bind_param("sss", $fullName, $email, $password);
                $insertStmt->execute();
                $insertStmt->close();

                // Retrieve user details after signup for session
                $selectQuery = "SELECT id, fullName FROM users WHERE email = ?";
                $selectStmt = $conn->prepare($selectQuery);

                if ($selectStmt) {
                    $selectStmt->bind_param("s", $email);
                    $selectStmt->execute();
                    $selectStmt->bind_result($userId, $userFullName);

                    if ($selectStmt->fetch()) {
                        // Start the session
                        session_start();

                        // Set session variables
                        $_SESSION["userId"] = $userId;
                        $_SESSION["fullName"] = $userFullName;

                        // Redirect to the home page after successful signup
                        header("Location: Home.php");
                        exit();
                    }
                }

                // Close the statement
                $selectStmt->close();
            } else {
                echo "Error preparing SQL statement: " . $conn->error;
            }
        }
    }

    // Close the connection
    $conn->close();
}
?>



    <!-- Section: Design Block -->
    <section class="vh-100" style="background-color: #9a616d">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="../Assets/img1.webp"
                    alt="login form"
                    class="img-fluid"
                    style="border-radius: 1rem 0 0 1rem"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                      <div
                        class="card cascading-right"
                        style="
                          border: none;
                          background: hsla(0, 0%, 100%, 0.55);
                          backdrop-filter: blur(30px);
                        "
                      >
                        <div class="d-flex align-items-center">
                          <a href="./Home.php"
                            ><img
                              src="https://images.collegedunia.com/public/college_data/images/logos/1519895601QULogo1.png"
                              style="height: 40px; margin-right: 10px"
                          /></a>
                          <span class="h1 fw-bold">Quantum University</span>
                        </div>
                        <div class="card-body p-5 shadow-5 text-center">
                          <h2 class="fw-bold mb-3">Sign up now</h2>
                         <form action="SignUp.php" method="post">
 <!-- Full name input -->
 <div class="form-outline mb-4">
    <input
      type="text"
      id="form3Example1"
      class="form-control"
      name="fullName"
    />
    <label class="form-label" for="form3Example1">Full name</label>
 </div>

 <!-- Email input -->
 <div class="form-outline mb-4">
    <input
      type="email"
      id="form3Example3"
      class="form-control"
      name="email"
    />
    <label class="form-label" for="form3Example3">Email address</label>
 </div>

 <!-- Password input -->
 <div class="form-outline mb-4">
    <input
      type="password"
      id="form3Example4"
      class="form-control"
      name="password"
    />
    <label class="form-label" for="form3Example4">Password</label>
 </div>

 <!-- Submit button -->
 <button type="submit" class="btn btn-primary btn-block mb-4">
    Sign up
 </button>
</form>

                            <!-- Register buttons -->
                            <div class="text-center">
                              <p>or sign up with:</p>
                              <button
                                type="button"
                                class="btn btn-link btn-floating mx-1"
                              >
                                <i class="fab fa-facebook-f"></i>
                              </button>

                              <button
                                type="button"
                                class="btn btn-link btn-floating mx-1"
                              >
                                <i class="fab fa-google"></i>
                              </button>

                              <button
                                type="button"
                                class="btn btn-link btn-floating mx-1"
                              >
                                <i class="fab fa-twitter"></i>
                              </button>

                              <button
                                type="button"
                                class="btn btn-link btn-floating mx-1"
                              >
                                <i class="fab fa-github"></i>
                              </button>
                            </div>
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
  </body>
</html>
