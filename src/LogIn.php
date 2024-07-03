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
    <title>LogIn</title>
  </head>
  <body>
  <?php
session_start();

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Retrieve email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare and bind
    $sql = "SELECT id, fullName FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared successfully
    if (!$stmt) {
        die("Error preparing SQL statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $password);

    // Execute the prepared statement
    $stmt->execute();

    // Check if a user with the provided credentials exists
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // Authentication successful
        $stmt->bind_result($userId, $fullName);
        $stmt->fetch();

        // Set session variables
        $_SESSION["userId"] = $userId;
        $_SESSION["fullName"] = $fullName;

        // Redirect to the home page
        header("Location: Home.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
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
                    <form method="post" action="Login.php">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <a href="./Home.php"
                          ><img
                            src="https://images.collegedunia.com/public/college_data/images/logos/1519895601QULogo1.png"
                            style="height: 40px; margin-right: 10px"
                        /></a>
                        <span class="h1 fw-bold mb-0">Quantum University</span>
                      </div>

                      <h5
                        class="fw-normal mb-3 pb-3"
                        style="letter-spacing: 1px"
                      >
                        Sign into your account
                      </h5>

                      <div class="form-outline mb-4">
                        <input
                          type="email"
                          id="form2Example17"
                          class="form-control form-control-lg"
                          name="email"
                        />
                        <label class="form-label" for="form2Example17"
                          >Email address</label
                        >
                      </div> 

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          id="form2Example27"
                          class="form-control form-control-lg"
                          name="password"
                        />
                        <label class="form-label" for="form2Example27"
                          >Password</label
                        >
                      </div>

                      <div class="pt-1 mb-4">
                        <button
                          class="btn btn-dark btn-lg btn-block"
                          type="submit"
                        >
                          Login
                        </button>
                      </div>

                      <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81">
                        Don't have an account?
                        <a href="./SignUp.php" style="color: #393f81"
                          >Register here</a
                        >
                      </p>
                      <a href="#!" class="small text-muted">Terms of use.</a>
                      <a href="#!" class="small text-muted">Privacy policy</a>
                    </form>
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
