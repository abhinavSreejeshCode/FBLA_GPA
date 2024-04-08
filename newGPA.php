
<!--includes the main php file -->
<?php include("server.php")
    

    
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--links to bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!--link to the javascript file for the calculate button -->
    <script src="./newGPA.js" defer></script>

    <!--links to the stylesheet for this html  -->
    <link rel="stylesheet" href="./newGPA.css" />
  </head>
  <body style="background-color: #f5f5f5">
  <!--navbar html -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-custom bg-dark">
        <a href="" class="navbar-brand" id="logo">GPA Calculator</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="progress.php">Progress</a>
            </li>
            <li class="nav-item">
            <p class="nav-link" style="font-size: 20px; color:grey;">
            <!--Uses the sessions username and displays it -->
            Welcome 
              <?php
              echo $_SESSION['username']; ?>
            </p>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
        <!--html for the hamburger menu -->
        <div class="ms-auto">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="true"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon navbar-light"
              ><svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 512 512"
                height="1em"
                width="1em"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"
                ></path>
              </svg>
            </span>
          </button>
        </div>
      </nav>
      <!--grey box on top that tells you about the webpage -->
      <div
        class="jumbotron text-center p-5"
        style="background-color: rgb(206, 203, 203); height: 300px"
      >
        <div class="container">
          <h1 class="display" style="font-size: 70px; color: rgb(58, 58, 58)">
            GPA Calculator
          </h1>
          <h7 class="display" style="color: rgb(54, 54, 54)">
            This website is used you calculate you gpa, after calculation the
            gpa with be stored and put into the progress tab. This website was
            made with students at mind .If you have any question refer to the
            button below.
          </h7>
        </div>
        <a class="btn btn-primary mt-2" href="./help.html"> Help </a>
      </div>
    </header>

    <div
      class=" d-flex justify-content-center align-items-center";
    >

    <!--table for the user input that is used to calculate the gpa -->
      <div class="my-card" id="Semester-1">
        <div class="table-responsive">
          <table class="table" id="table-1" style="height: 350px; width: 700px">
            <tbody id="table">
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-1" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-1" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-1" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-2" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-2" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-2" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-3" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-3" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-3" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-4" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-4" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-4" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-5" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-5" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-5" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="form-control classname"
                    placeholder="Course Name"
                  />
                </td>
                <td>
                  <select id="course-6" class="form-control">
                    <option selected>Select a Grade</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">F</option>
                  </select>
                </td>
                <td>
                  <select id="credits-6" class="form-control">
                    <option selected>Credits</option>
                    <option value="1">0.5</option>
                    <option value="2">1</option>
                    <option value="3">1.5</option>
                    <option value="4">2</option>
                    <option value="5">2.5</option>
                    <option value="6">3</option>
                  </select>
                </td>
                <td>
                  <select id="weight-6" class="form-control">
                    <option selected>Weight</option>
                    <option value="1">Regular</option>
                    <option value="2">Honors</option>
                    <option value="3">AP/IB</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div> 
          
        <!--Toggles the weighted part of the gpa calculator -->
        <div style="padding-left: 15px; padding-top: 30px">
          <input type="checkbox" class="toggle" />
          Weighted
        </div>

        <!--adds course if the users is taking more classes -->
        <div class="p-3">
          <button
            id="addCourse"
            class="btn btn-outline-primary btn-sm"
            style="border-radius: 20px; width: 125px"
          >
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 16 16"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z"
                clip-rule="evenodd"
              ></path>
              <path
                fill-rule="evenodd"
                d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z"
                clip-rule="evenodd"
              ></path>
              <path
                fill-rule="evenodd"
                d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z"
                clip-rule="evenodd"
              ></path>
            </svg>
            Add course
          </button>
        </div>

        <!--Button that calculates the gpa and displays it -->
        <div class="p-3" id ="forcalculatebtn">
          <button
            id="Calculate"
            class="btn btn-primary btn-lg active Calculate"
          >
            Calculate
          </button>
        </div>

        <div id="gpa" style="padding-left: 15px; color: green; font-size: 20px; "></div>

        <!--provides user with the option to save the gpa to see later in the progress page -->
        <form name="save" method="post" action="newGPA.php">
            <input type="hidden" name="gpa" id="saveGPA" />
            <button type="submit" name="save_gpa" class="btn btn-primary">Save GPA</button>
        </form>
        
      </div>
    </div> 
  </body>
</html>
