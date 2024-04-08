//defines variables used for the add course button and calculate
var courseid = 5;
var weightid = 5;
var creditsid = 5;

//calculates and returns the total amount of weighted points
function weightPoints(grade, weight) {
  var points = 0;
  if (grade == 1) {
    points += 4;
  } else if (grade == 2) {
    points += 3;
  } else if (grade == 3) {
    points += 2;
  } else if (grade == 4) {
    points += 1;
  } else if (grade == 5) {
    points += 0;
  }
  if (weight == 1) {
    points += 0;
  } else if (weight == 2) {
    points += 0.5;
  } else {
    points += 1;
  }
  return points;
}

//returns total points for unweighted gpa
function points(grade) {
  if (grade == 1) {
    return 4;
  } else if (grade == 2) {
    return 3;
  } else if (grade == 3) {
    return 2;
  } else if (grade == 4) {
    return 1;
  } else if (grade == 5) {
    return 0;
  }
}

//function that displays weighted gpa on the page
function weigthedCalculate() {
  var values = [];
  var weights = [];
  //assign thhe value of the input box to a variable
  for (var i = 1; i <= courseid + 1; i++) {
    values.push(document.querySelector("#course-" + i).value);
  }
  for (var i = 1; i <= weightid; i++) {
    weights.push(document.querySelector("#weight-" + i).value);
  }

  var finalGPA = 0;
  for (var i = 0; i < values.length; i++) {
    finalGPA += weightPoints(values[i], weights[i]);
  }

  //takes the total points and divides it buy the courses
  var total = finalGPA / (courseid + 1);
  var roundedTotal = Math.round(total * 10) / 10;

  console.log(roundedTotal);

  //displays it on the page
  document.querySelector("#gpa").innerHTML = "Weighted GPA: " + roundedTotal;
}

function calculate() {
  var values = [];
  //assign thhe value of the input box to a variable
  for (var i = 1; i <= courseid + 1; i++) {
    values.push(document.querySelector("#course-" + i).value);
  }

  console.log(values);

  var finalGPA = 0;
  for (var i = 0; i < values.length; i++) {
    finalGPA += points(values[i]);
  }

  console.log(finalGPA);

  var total = finalGPA / (courseid + 1);
  var roundedTotal = Math.round(total * 10) / 10;

  console.log(roundedTotal);

  //puts gpa into hidden input used for the save gpa buton
  document.forms["save"].gpa.value = roundedTotal;

  //displays the gpa on the webpage
  document.querySelector("#gpa").innerHTML = "GPA: " + roundedTotal;
}

//adds the function to the calculate button
document.querySelector("#Calculate").addEventListener("click", function () {
  //checks if toggle is on, if so will do weighted calculate otherwise unweighted calculate
  if (document.querySelector(".toggle").checked) {
    weigthedCalculate();
  } else {
    calculate();
  }
});

//inserts the html for the new course
document.querySelector("#addCourse").addEventListener("click", function () {
  var html =
    '<tr><td><input type="text"class="form-control classname"placeholder="Course Name"/></td><td><select id="' +
    courseid +
    '" class="form-control"><option selected>Select a Grade</option><option value="1">A</option><option value="2">B</option><option value="3">C</option><option value="4">D</option><option value="5">F</option></select></td><td><select id="' +
    creditsid +
    '" class="form-control"><option selected>Credits</option><option value="1">0.5</option><option value="2">1</option><option value="3">1.5</option><option value="4">2</option><option value="5">2.5</option><option value="6">3</option></select></td><td><select id="' +
    weightid +
    '" class="form-control"><option selected>Weight</option><option value="1">Regular</option><option value="2">Honors</option><option value="3">AP/IB</option></select></td></tr>';
  if (courseid < 8) {
    document.querySelector("#table").insertAdjacentHTML("beforeend", html);
  } else {
    alert("To many courses, try adding another semester");
  }

  //increaments the id's for calculation
  courseid++;
  weightid++;
  creditsid++;
});
