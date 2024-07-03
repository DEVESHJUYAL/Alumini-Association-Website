<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../dist/output.css" rel="stylesheet" />
    <link rel="icon" href="../Assets/title_logo.png" type="image/x-icon" />
    <style>
            .logout{
        border-color:black;
      }
      .logout:hover{
        border-color: red;
      }
      /* Custom CSS for styling */
      .event-container {
        background-color: #000;
      }

      .event {
        color: #fff;
      }

      .btn:hover {
        background-color: gold;
        color: #fff;
      }
    </style>
    <title>Quantum University Alumini</title>
  </head>
  <body>
  <?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION["userId"])) {
    header("Location: Login.php");
    exit();
}

// Get the user's full name from the session
$fullName = $_SESSION["fullName"];
?>
    <div class="bg-pink-950 text-white py-2 hidden md:block">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Left side: Phone Number and Email -->
        <div class="flex space-x-4 items-center">
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-1"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 9.293V5a3 3 0 00-3-3H5a3 3 0 00-3 3v4.293a4 4 0 00-.553 5.037l4.074 12.223a2 2 0 002.283 1.37l1.337-.267a6 6 0 005.97-6.793L15 9.293z"
              />
            </svg>
            <span>123-456-7890</span>
          </div>
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-1"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7 4a1 1 0 100-2 1 1 0 000 2z"
              />
            </svg>
            <span>info@example.com</span>
          </div>
        </div>
        <h6 class="text-white">Welcome, <?php echo $fullName; ?>!</h6>
        <!-- Right side: Help Centre, Blog, and Career -->
        <div class="flex space-x-4">
          <a
            href="ContactUs.php"
            class="hover:text-pink-300 transition duration-300"
            >Contact Us</a
          >
          <a href="#" class="hover:text-pink-300 transition duration-300"
            >Blog</a
          >
          <a
            href="career.php"
            class="hover:text-pink-300 transition duration-300"
            >Career</a
          >
        </div>
      </div>
    </div>
      <!-- Navbar -->
      <nav class="p-4 bg-white border-b-2 border-pink-700">
        <div class="container mx-auto flex justify-between items-center">
          <!-- Logo (Left Side) -->
          <div class="text-white font-bold text-xl">
            <a href="./Home.php">
              <img
                src="https://qums.quantumuniversity.edu.in/Account/showClientLogo"
                alt="Logo"
                class="h-12 w-50 mr-2 inline-block"
                style="filter: brightness(130%); filter: contrast(200%)"
            /></a>
          </div>

          <!-- Mobile Menu Button (Hidden by Default) -->
          <div class="md:hidden">
            <button id="mobile-menu-toggle" class="text-white">
              <img src="../Assets/menu.svg" />
            </button>
          </div>

          <!-- Navigation Links (Hidden on Mobile) -->
          <ul class="hidden md:flex space-x-4">
            <li>
              <a
                href="AboutUs.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >ABOUT US</a
              >
            </li>
            <li>
              <a
                href="News.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >NEWS</a
              >
            </li>
            <li>
              <a
                href="Batchmates.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >BATCHMATES</a
              >
            </li>
            <li>
              <a
                href="programandevents.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >PROGRAM AND EVENTS</a
              >
            </li>
            <li>
              <a
                href="aluministories.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >ALUMINI STORIES</a
              >
            </li>
            <li>
              <a
                href="gallery.php"
                class="text-black font-medium text-lg hover:text-red-900"
                >GALLERY</a
              >
            </li>
          </ul>

          <!-- Login and Sign Up Buttons (Right Side) -->
          <div class="hidden md:flex items-center space-x-4 logout" style="
    border-width: 2px; padding:5px; border-radius:10px">
    <a href="./Logout.php" class="text-black font-bold text-lg hover:text-red-900">Logout</a>
</div>
        </div>
      </nav>

      <!-- Mobile Menu (Hidden by Default) -->
      <div
        id="mobile-menu"
        class="hidden bg-black bg-opacity-90 z-10 p-4 absolute top-0 right-0 w-3/4 h-full justify-center items-center"
      >
        <ul class="text-white text-center space-y-4">
          <a href="AboutUs.php" class="hover:text-pink-700">
            <li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              About Us
            </li></a
          >
          <a href="News.php" class="hover:text-pink-700">
            <li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              News
            </li></a
          >
          <a href="Batchmates.php" class="hover:text-pink-700">
            <li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              Batchmates
            </li></a
          >
          <a href="programandevents.php" class="hover:text-pink-700"
            ><li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              Program and Events
            </li></a
          >
          <a href="aluministories.php" class="hover:text-pink-700"
            ><li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              Alumini Stories
            </li></a
          >
          <a href="gallery.php" class="hover:text-pink-700"
            ><li class="border-b-[1px] border-white py-3 hover:border-pink-700">
              Gallery
            </li></a
          >
          <li>
            <button
              class="bg-pink-500 hover:bg-pink-700 text-white font-semibold py-2 px-4 w-full transition duration-300"
            >
             <h6 class="text-white font-bold text-lg">Welcome, <?php echo $fullName; ?>!</h6>
              
            </button>
          </li>
          <li>
            <button
              class="bg-white bg-opacity-50 hover:bg-opacity-75 text-pink-900 font-semibold w-full py-2 px-4 transition duration-300"
            >
              <a
                href="./Logout.php"
                class="text-white font-bold text-lg hover:text-red-900"
                >Logout</a
              >
            </button>
          </li>
        </ul>
        <!-- Close Mobile Menu Button -->
        <button
          id="close-mobile-menu"
          class="text-white absolute top-4 right-4"
        >
          <img src="../Assets/close.svg" class="bg-white" />
        </button>
      </div>
    </div>
    <!-- component -->
<!-- follow me on twitter @asad_codes -->
<!-- component -->
<main class="flex pt-20 pb-40 w-screen items-center justify-evenly bg-gray-700">
  <!--👇 Copy code below 👇-->
  <div>
    <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
      <div class="mb-3 text-right">
        <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
      </div>
      <div class="flex items-center gap-x-2">
        <img class="aspect-[2/2] w-16" src="https://1000logos.net/wp-content/uploads/2021/10/logo-Meta.png" />
        <div>
          <h3 class="text-xl font-bold text-gray-50">Meta</h3>
          <span class="text-xs text-gray-300">Menlo Park, California, United States</span>
        </div>
      </div>
      <div class="my-4">
        <h3 class="text-2xl font-medium text-gray-200">React Developer</h3>
        <div class="text-sm font-medium">
          <span class="m-1 ml-0 inline-block text-blue-500">php</span>
          <span class="m-1 ml-0 inline-block text-yellow-500">CSS</span>
          <span class="m-1 ml-0 inline-block text-pink-500">React</span>
          <span class="m-1 ml-0 inline-block text-lime-500">API</span>
          <span class="m-1 ml-0 inline-block text-blue-500">FIGMA</span>
        </div>
        <div class="mt-2 text-sm text-gray-400">$60K - $120K per year</div>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-sm font-medium text-gray-50">Full Time</span>
        <a id="showFormButton" onclick="showApplicationForm('Meta')" class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80" style="cursor: pointer;">Apply Now</a>
      </div>
    </div>
  </div>
  <div>
    <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
      <div class="mb-3 text-right">
        <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
      </div>
      <div class="flex items-center gap-x-2">
        <img class="aspect-[2/2] w-16" src="https://img.icons8.com/fluency/48/null/mac-os.png" />
        <div>
          <h3 class="text-xl font-bold text-gray-50">Apple</h3>
          <span class="text-xs text-gray-300">Cupertino, California, United States</span>
        </div>
      </div>
      <div class="my-4">
        <h3 class="text-2xl font-medium text-gray-200">UI/UX Designer</h3>
        <div class="text-sm font-medium">
          <span class="m-1 ml-0 inline-block text-blue-500">php</span>
          <span class="m-1 ml-0 inline-block text-yellow-500">CSS</span>
          <span class="m-1 ml-0 inline-block text-pink-500">FIGMA</span>
          <span class="m-1 ml-0 inline-block text-lime-500">Ad. XD</span>
          <span class="m-1 ml-0 inline-block text-blue-500">Illustrator</span>
        </div>
        <div class="mt-2 text-sm text-gray-400">$60K - $100K per year</div>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-sm font-medium text-gray-50">Full Time</span>
        <a id="showFormButton1" onclick="showApplicationForm('Apple')" class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80" style="cursor: pointer;">Apply Now</a>
      </div>
    </div>
  </div>
  <div>
    <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
      <div class="mb-3 text-right">
        <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
        </button>
      </div>
      <div class="flex items-center gap-x-2">
        <img class="aspect-[2/2] w-16" src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" />
        <div>
          <h3 class="text-xl font-bold text-gray-50">Google</h3>
          <span class="text-xs text-gray-300">Menlo Park, California, United States</span>
        </div>
      </div>
      <div class="my-4">
        <h3 class="text-2xl font-medium text-gray-200">Software Engineer</h3>
        <div class="text-sm font-medium">
          <span class="m-1 ml-0 inline-block text-blue-500">JAVA</span>
          <span class="m-1 ml-0 inline-block text-yellow-500">DSA</span>
          <span class="m-1 ml-0 inline-block text-pink-500">PYTHON</span>
          <span class="m-1 ml-0 inline-block text-lime-500">C</span>
          <span class="m-1 ml-0 inline-block text-blue-500">C++</span>
        </div>
        <div class="mt-2 text-sm text-gray-400">$160K - $200K per year</div>
      </div>
      <div class="flex items-center justify-between">
        <span class="text-sm font-medium text-gray-50">Full Time</span>
        <a id="showFormButton2" onclick="showApplicationForm('Google')" class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80" style="cursor: pointer;">Apply Now</a>
      </div>
    </div>
  </div>
  <!-- **************** -->
</main>
<div id="applicationModal" class="fixed inset-0 bg-black bg-opacity-25 z-50 hidden">
<div class="w-full md:w-96 md:max-w-full mx-auto bg-white mt-3">
  <div class="p-6 border border-gray-300 sm:rounded-md">
    <button id="closeFormButton"
    class="absolute top-2 right-2 h-6 w-6 bg-gray-500 text-white rounded-full flex items-center justify-center cursor-pointer">
    <span class="sr-only">Close</span>&times;</span>
  </button>
  <?php


// Check if the form is submitted
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

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $experience = $_POST["experience"];
    $message = $_POST["message"];
    $workPreference = $_POST["workPreference"];
    $skills = $_POST["skills"];
    $companyName = $_POST["companyName"];
    $userid = $_SESSION["userId"];


    // Insert data into the database
    $sql = "INSERT INTO applicants (name,user_id,email, experience, message, skills, work_preference, company_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared successfully
    if ($stmt) {
        $stmt->bind_param("ssssssss", $name, $userid, $email, $experience, $message, $skills, $workPreference, $companyName);
        $stmt->execute();
        $stmt->close();
        echo '<script>alert("Application submitted successfully!");</script>';
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>




    <form
    method="POST" action="career.php" enctype="multipart/form-data"

    >
    <div>
      <input style="  display: block; margin: 0 auto; text-align: center; color: blue; font-size: 30px;" name="companyName" id="companyNameInput" value="">
</div>
      <label class="block mb-6">
        <span class="text-gray-700">Your name</span>
        <input
          required
          name="name"
          type="text"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          placeholder="  Joe Bloggs"
        />
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Email address</span>
        <input
          required
          name="email"
          type="email"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          placeholder="  joe.bloggs@example.com"
        />
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Years of experience</span>
        <select
          required
          name="experience"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
        >
          <option>Less than a year</option>
          <option>1 - 2 years</option>
          <option>2 - 4 years</option>
          <option>4 - 7 years</option>
          <option>7 - 10 years</option>
          <option>10+ years</option>
        </select>
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Tell us more about yourself</span>
        <textarea
          name="message"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          rows="3"
          placeholder="What motivates you?"
        ></textarea>
      </label>
      <label class="block mb-6">
    <span class="text-gray-700">Your Skills</span>
    <textarea
        name="skills"
        class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
        rows="3"
        placeholder="List your skills"
    ></textarea>
</label>
      <div class="mb-6">
        <div class="mt-2">
          <div>
            <label class="inline-flex items-center">
              <input
              name="workPreference"
                value="remotely"
                type="radio"
                class="
                  text-indigo-600
                  border-gray-300
                  rounded-full
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-offset-0
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
                checked
              />
              <span class="ml-2">You'd like to work remotely</span>
            </label>
          </div>
          <div>
            <label class="inline-flex items-center">
              <input
              name="workPreference"
                value="onsite"
                type="radio"
                class="
                  text-indigo-600
                  border-gray-300
                  rounded-full
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-offset-0
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
              />
              <span class="ml-2">You'd prefer to work onsite</span>
            </label>
          </div>
        </div>
      </div>
     
      <div class="mb-6">
        <button
          type="submit"
          class="
            h-10
            px-5
            text-indigo-100
            bg-indigo-700
            rounded-lg
            transition-colors
            duration-150
            focus:shadow-outline
            hover:bg-indigo-800
          "
        >
          Apply
        </button>
      </div>
      </div>
    </form>
  </div>
</div>
</div>

    <footer
      class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left"
    >
      <div
        class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between"
      >
        <div class="mr-12 hidden lg:block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Social network icons container -->
        <div class="flex justify-center">
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
              />
            </svg>
          </a>
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
              />
            </svg>
          </a>
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                fill-rule="evenodd"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
              />
            </svg>
          </a>
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"
              />
            </svg>
          </a>
          <a href="#!" class="text-neutral-600 dark:text-neutral-200">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
              />
            </svg>
          </a>
        </div>
      </div>

      <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
      <div class="mx-6 py-10 text-center md:text-left">
        <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
          <!-- Tailwind Elements section -->
          <div class="">
            <h6
              class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start"
            >
              <a href="./Home.php">
                <img
                  class="h-5 mr-1 mt-1"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAKlBMVEXqIoTqIoRHcEzqIoTqIoTqIoTqIoTqIoTqIoTqIoTqIoTqIoTqIoTqIoRsp0EqAAAADnRSTlPs/wBpYuYUnC8IT77WfwiG3XgAAADKSURBVDiN7ZPRDsMgCEUpiKjY///dQbUrutdlTzNNo9eDXiJA5zAgISaISgc44iBEWgQA3oG0CPwzQBIRLABRkgBYdnUBoM7JBEzPK5D/wHeA4xOowg/Asr2FPRZiIR0lp1R8HQHJrmButlPaXMTnPrqU6mq9PvsV6bFg3LemEenBSe9i51j2/bzuLmd/tK0toCG2TSKNwtY4oARmXTgCT1WzWEJwWX7fGgBz5AnB8F3nMTdgwXXswJ2amdfbg450NsCPUW9/bTmILyPnCb2x6RBPAAAAAElFTkSuQmCC"
              /></a>
              QUANTUM UNIVERSITY
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Products section -->
          <div class="">
            <h6
              class="mb-4 flex justify-center font-semibold uppercase md:justify-start"
            >
              UNIVERSITY
            </h6>
            <p class="mb-4">
              <a
                href="Batchmates.php"
                class="text-neutral-600 dark:text-neutral-200"
                >BATCHMATES</a
              >
            </p>
            <p class="mb-4">
              <a
                href="programandevents.php"
                class="text-neutral-600 dark:text-neutral-200"
                >EVENTS</a
              >
            </p>
            <p class="mb-4">
              <a
                href="gallery.php"
                class="text-neutral-600 dark:text-neutral-200"
                >GALLERY</a
              >
            </p>
            <p>
              <a href="News.php" class="text-neutral-600 dark:text-neutral-200"
                >NEWS</a
              >
            </p>
          </div>
          <!-- Useful links section -->
          <div class="">
            <h6
              class="mb-4 flex justify-center font-semibold uppercase md:justify-start"
            >
              ALUMINI
            </h6>
            <p class="mb-4">
              <a
                href="ContactUs.php"
                class="text-neutral-600 dark:text-neutral-200"
                >CONTACTS</a
              >
            </p>
            <p class="mb-4">
              <a
                href="career.php"
                class="text-neutral-600 dark:text-neutral-200"
                >CAREER</a
              >
            </p>
            <p class="mb-4">
              <a
                href="AboutUs.php"
                class="text-neutral-600 dark:text-neutral-200"
                >ABOUT US</a
              >
            </p>
            <p>
              <a href="career.php" class="text-neutral-600 dark:text-neutral-200"
                >APPLY TO JOB</a
              >
            </p>
          </div>
          <!-- Contact section -->
          <div>
            <h6
              class="mb-4 flex justify-center font-semibold uppercase md:justify-start"
            >
              Contact
            </h6>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5"
              >
                <path
                  d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"
                />
                <path
                  d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"
                />
              </svg>
              Roorkee-247667 (Uttarakhand) India
            </p>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5"
              >
                <path
                  d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
                />
                <path
                  d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
                />
              </svg>
              quantumuniversity@gmail.com
            </p>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                  clip-rule="evenodd"
                />
              </svg>
              + 01 234 567 88
            </p>
            <p class="flex items-center justify-center md:justify-start">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                  clip-rule="evenodd"
                />
              </svg>
              + 01 234 567 89
            </p>
          </div>
        </div>
      </div>

      <!--Copyright section-->
      <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700">
        <span>© 2023</span>
        <a
          class="font-semibold text-neutral-600 dark:text-neutral-400"
          href="https://tailwind-elements.com/"
          >Quantum University | Website by Devesh Juyal</a
        >
      </div>
    </footer>
    <script>
      const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
      const mobileMenu = document.getElementById("mobile-menu");
      const closeMobileMenu = document.getElementById("close-mobile-menu");

      mobileMenuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      closeMobileMenu.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
      });
      const modal = document.getElementById('applicationModal');
    const showFormButton = document.getElementById('showFormButton');
    const showFormButton1 = document.getElementById('showFormButton1');
    const showFormButton2 = document.getElementById('showFormButton2');
    const closeFormButton = document.getElementById('closeFormButton');

    showFormButton.addEventListener('click', () => {
      modal.classList.toggle('hidden');
    });
    showFormButton1.addEventListener('click', () => {
      modal.classList.toggle('hidden');
    });
    showFormButton2.addEventListener('click', () => {
      modal.classList.toggle('hidden');
    });

    closeFormButton.addEventListener('click', () => {
      modal.classList.add('hidden');
    });

        function showApplicationForm(companyName) {
        document.getElementById('companyNameInput').value = companyName;
    }

    </script>
  </body>
</php>
