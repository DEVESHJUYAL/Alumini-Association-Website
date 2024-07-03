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
    <div
      class="bg-cover bg-center bg-no-repeat h-screen"
      style="
        background-image: url('https://www.coe.int/documents/18894444/26346690/2023+04+Alumni.png/8d738315-2852-05ba-b095-613cf1811914?t=1681737602725');
      "
    >
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
        class="hidden bg-black bg-opacity-90 p-4 absolute top-0 right-0 w-3/4 h-full justify-center items-center z-10"
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
      <div>
        <h6
          class="text-white uppercase sm:font-semibold font-medium text-sm mt-4 ml-8"
        >
          Best Places for Alumini
        </h6>
        <h1
          class="text-white font-extrabold text-center sm:text-5xl text-3xl mt-5 animate-in duration-1000 slide-in-from-top ease-in"
        >
          FIND YOUR CAREER OPPORTUNITIES WITH THE
          <span class="text-black">QUANTUM UNIVERSITY</span>
        </h1>
        <p
          class="font-medium sm:text-2xl text-lg text-center mt-5 text-pink-950 animate-bounce direction-normal"
        >
          The Future is exciting....
        </p>
      </div>
    </div>
    <div class="flex flex-wrap w-full justify-center event-container">
      <!-- Event 1 -->
      <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
        <div class="text-yellow-500 text-3xl font-bold">12:00 PM</div>
        <div class="text-2xl font-semibold my-2">Event 1</div>
        <div class="border-t-2 border-white my-2"></div>
        <div class="border-t-2 border-white"></div>
      </div>

      <!-- Event 2 -->
      <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
        <div class="text-yellow-500 text-3xl font-bold">2:30 PM</div>
        <div class="text-2xl font-semibold my-2">Event 2</div>
        <div class="border-t-2 border-white my-2"></div>
        <div class="border-t-2 border-white"></div>
      </div>

      <!-- Event 3 -->
      <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
        <div class="text-yellow-500 text-3xl font-bold">5:00 PM</div>
        <div class="text-2xl font-semibold my-2">Event 3</div>
        <div class="border-t-2 border-white my-2"></div>
        <div class="border-t-2 border-white"></div>
      </div>
    </div>
    <div
      class="flex justify-center p-10 animate-in duration-1000 slide-in-from-left ease-in"
      style="
        margin-left: 100px;
        margin-right: 100px;
        background-color: rgba(128, 128, 128, 0.267);
        margin: 0;
      "
    >
      <div>
        <img
          class="w-96 hidden md:block"
          src="https://sayidan.kenzap.com/wp-content/uploads/2016/07/single-event-img-3-569x331.jpg"
        />
      </div>
      <div class="ml-10">
        <h1 class="text-2xl text-black opacity-20" style="letter-spacing: 5px">
          UPCOMING EVENT
        </h1>
        <h1 class="text-3xl font-bold mt-5" style="color: rgb(66, 66, 66)">
          ANNUAL MEETUP AND SCHOLARSHIP PRESENTATION
        </h1>
        <div class="flex items-center">
          <img
            src="https://cdn-icons-png.flaticon.com/512/3082/3082383.png"
            style="height: 20px"
            class="mt-4"
          />
          <h1 class="mt-4 ml-1">
            22km Mile Stone, Mandawar, Roorkee- Dehradun Highway (NH-73),
            Roorkee-247667 (Uttarakhand) India
          </h1>
        </div>
        <div
          class="mt-4 ml-3 px-4 py-2"
          style="width: fit-content; background-color: gold"
        >
          <a class="mt-4 font-bold text-white" href="programandevents.php"
            >JOIN NOW</a
          >
        </div>
      </div>
      <div>
        <ul class="ml-10">
          <li
            class="text-3xl font-bold"
            style="
              background-color: rgba(128, 128, 128, 0.205);
              padding: 5px 20px 5px 20px;
            "
          >
            07
          </li>
          <li
            style="
              background-color: rgba(128, 128, 128, 0.205);
              padding: 5px 20px 5px 20px;
            "
          >
            Dec
          </li>
          <li
            style="
              background-color: rgba(128, 128, 128, 0.486);
              padding: 5px 20px 5px 20px;
            "
          >
            2023
          </li>
        </ul>
      </div>
    </div>

    <div style="padding: 70px">
      <div>
        <h1 style="color: rgb(66, 66, 66)" class="text-2xl">
          Quantum University Alumni Dashboard
        </h1>
      </div>
      <div
        class="flex flex-wrap w-full justify-center"
        style="margin-top: 60px"
      >
        <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
          <div>
            <img
              src="data:image/png;base64,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"
              style="height: 40px"
            />
          </div>
          <div
            class="text-xl font-semibold my-2 mt-3"
            style="color: rgb(66, 66, 66)"
          >
            Checking Message
          </div>
          <div
            class="border-t-2 border-white my-2"
            style="color: rgb(66, 66, 66)"
          >
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam.
          </div>
        </div>
        <!-- Event 1 -->
        <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
          <div>
            <img
              src="data:image/png;base64,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"
              style="height: 40px"
            />
          </div>
          <div
            class="text-xl font-semibold my-2 mt-3"
            style="color: rgb(66, 66, 66)"
          >
            Update My Information
          </div>
          <div
            class="border-t-2 border-white my-2"
            style="color: rgb(66, 66, 66)"
          >
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam.
          </div>
        </div>

        <!-- Event 2 -->
        <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 event">
          <div>
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/3/36/Search_Icon.png"
              style="height: 40px"
            />
          </div>
          <div
            class="text-xl font-semibold my-2 mt-3"
            style="color: rgb(66, 66, 66)"
          >
            Search Alumni Directory
          </div>
          <div
            class="border-t-2 border-white my-2"
            style="color: rgb(66, 66, 66)"
          >
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam.
          </div>
        </div>

        <!-- Event 3 -->
      </div>
      <div class="flex justify-center items-center">
        <div
          class="mt-4 ml-3 px-4 py-2"
          style="width: fit-content; background-color: gold"
        >
          <a class="mt-4 font-bold text-white" href="./LogIn.php"
            >LOG IN TO ALUMINI DASHBOARD</a
          >
        </div>
      </div>
    </div>

    <div class="w-full mx-auto p-4 mt-8" style="background-color: #52525211">
      <div class="md:flex items-center">
        <!-- Image (hidden on smaller screens) -->
        <div class="md:w-1/2 hidden md:block">
          <img
            src="https://img.freepik.com/free-photo/hardworking-focused-woman-trendy-glasses-concentrating-writing-essay-sitting-cozy-cafe-near-laptop-working-making-notes-carefully_197531-21320.jpg?size=626&ext=jpg&ga=GA1.1.1788068356.1696377600&semt=ais"
            alt="Image"
            class="shadow-md"
            style="width: 2000px"
          />
        </div>

        <!-- Text -->
        <div class="md:w-1/2 px-4 py-2">
          <h1
            class="text-2xl mb-4"
            style="color: rgb(126, 126, 126); margin-bottom: 30px"
          >
            Alumni Interview
          </h1>
          <h1
            class="text-4xl font-semibold mb-4"
            style="color: rgb(61, 61, 61); margin-bottom: 30px"
          >
            Hannah Jordan
          </h1>
          <p class="text-gray-600">
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam littera gothica, quam
            nunc putamus parum claram, anteposuerit litterarum formas
            humanitatis per seacula quarta decima et quinta decima.
          </p>

          <div style="margin-top: 40px">
            <div
              class="mt-4 ml-3 px-4 py-2 btn"
              style="
                width: fit-content;
                border: 4px;
                border-style: solid;
                border-color: gold;
                transition: background-color 0.3s ease, color 0.3s ease;
                cursor: pointer;
              "
            >
              <a class="mt-4 text-black px-4" href="aluministories.php"
                >SEE HANNAH STORY</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="./gallery.php">
      <div class="mx-auto px-5 py-2 md:pt-12 md:pb-8 bg-slate-200">
        <div class="flex flex-wrap md:-m-2">
          <div class="flex w-full flex-wrap sm:w-1/5">
            <div class="w-full p-1 md:p-2">
              <img
                alt="gallery"
                class="block h-full w-full rounded-lg object-cover object-center"
                src="https://images.pexels.com/photos/6147369/pexels-photo-6147369.jpeg?cs=srgb&dl=pexels-keira-burton-6147369.jpg&fm=jpg"
              />
            </div>
          </div>
          <div class="flex w-full flex-wrap sm:w-1/5">
            <div class="w-full p-1 md:p-2">
              <img
                alt="gallery"
                class="block h-full w-full rounded-lg object-cover object-center"
                src="https://d2jyir0m79gs60.cloudfront.net/news/images/successful-college-student-lg.png"
              />
            </div>
          </div>
          <div class="flex w-full flex-wrap sm:w-1/5">
            <div class="w-full p-1 md:p-2">
              <img
                alt="gallery"
                class="block h-full w-full rounded-lg object-cover object-center"
                src="https://media.istockphoto.com/id/1340766096/photo/beautiful-smiling-female-college-student.jpg?s=612x612&w=0&k=20&c=phSOH_VAm5fszVSnxnPbSjlbne0SpUXRv2VlyrdSihQ="
              />
            </div>
          </div>
          <div class="flex w-full flex-wrap sm:w-1/5">
            <div class="w-full p-1 md:p-2">
              <img
                alt="gallery"
                class="block h-full w-full rounded-lg object-cover object-center"
                src="https://t3.ftcdn.net/jpg/03/88/97/92/360_F_388979227_lKgqMJPO5ExItAuN4tuwyPeiknwrR7t2.jpg"
              />
            </div>
          </div>
          <div class="flex w-full flex-wrap sm:w-1/5">
            <div class="w-full p-1 md:p-2">
              <img
                alt="gallery"
                class="block h-full w-full rounded-lg object-cover object-center"
                src="https://s3-us-east-2.amazonaws.com/maryville/wp-content/uploads/2019/01/20092424/nutrition.jpg"
              />
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- component -->
    <div class="2xl:mx-auto 2xl:container mx-4 py-16">
      <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
      <div class="w-full relative flex items-center justify-center">
        <img
          src="https://intercoastcolleges.gumlet.io/wp-content/uploads/2020/03/dropping-out-of-school.jpeg?compress=true&quality=80&w=376&dpr=2.6"
          alt="dining"
          class="w-full h-full absolute z-0 hidden xl:block"
        />
        <img
          src="https://intercoastcolleges.gumlet.io/wp-content/uploads/2020/03/dropping-out-of-school.jpeg?compress=true&quality=80&w=376&dpr=2.6"
          alt="dining"
          class="w-full h-full absolute z-0 hidden sm:block xl:hidden"
        />
        <img
          src="https://intercoastcolleges.gumlet.io/wp-content/uploads/2020/03/dropping-out-of-school.jpeg?compress=true&quality=80&w=376&dpr=2.6"
          alt="dining"
          class="w-full h-full absolute z-0 sm:hidden"
        />
        <div
          class="bg-gray-800 bg-opacity-80 md:my-16 lg:py-16 py-10 w-full md:mx-24 md:px-12 px-4 flex flex-col items-center justify-center relative z-40"
        >
          <h1 class="text-4xl font-semibold leading-9 text-white text-center">
            Don’t miss out!
          </h1>
          <p class="text-base leading-normal text-center text-white mt-6">
            Subscribe to your newsletter to stay in the loop. Our newsletter is
            sent once in <br />
            a week on every friday so subscribe to get latest news and updates.
          </p>
          <div
            class="sm:border border-white flex-col sm:flex-row flex items-center lg:w-5/12 w-full mt-12 space-y-4 sm:space-y-0"
          >
            <input
              class="border border-white sm:border-transparent text-base w-full font-medium leading-none text-white p-4 focus:outline-none bg-transparent placeholder-white"
              placeholder="Email Address"
            />
            <button
              class="focus:outline-none focus:ring-offset-2 focus:ring border border-white sm:border-transparent w-full sm:w-auto bg-white py-4 px-6 hover:bg-opacity-75"
            >
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- component -->
    <!-- Footer container -->
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
              <a
                href="career.php"
                class="text-neutral-600 dark:text-neutral-200"
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
    </script>
  </body>
</php>
