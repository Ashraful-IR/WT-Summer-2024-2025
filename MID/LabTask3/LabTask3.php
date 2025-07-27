<!DOCTYPE html>
<html>
<head>
  <title>Js Task</title>
</head>
<body>

  <h1>Student Information</h1>


  <script>

    console.log("Courses Grade in gpa:");
    var WebTech = 4;
    var Os = 4;
    var RM = 4;
    console.log("WebTech:", WebTech);
    console.log("Os:", Os);
    console.log("RM:", RM);

    //Calculation
    z=(WebTech*3)+(Os*3)+(RM*3);
    x=z/9;
    console.log("Student's Cgpa:"+ x);

    // Determining if the student is an adult and whether they passed.
let age = 19;
let score = 60;

if (age >= 18) {
  console.log("Adult.");
} else {
  console.log("Not an adult.");
}
if (score >= 50) {
  console.log("Passed.");
} else {
  console.log("Did not pass.");
}
//LOOPS

let Grade = {
  WebTech: 4,
  RM: 4,
  Os: 4,
  
};
console.log("\n Grades:");
for (let subject in Grade) {
  console.log(subject + ": " + Grade[subject]);
}

    //  7. FUNCTIONS

    console.log("\n Summary");

    function greetUser(summary) {
      console.log(summary);
    }

    greetUser("The Student is Adult and Passed");
    greetUser("The student is doing 4 courses");

    // We'll add the button below HTML and attach event here

    function showMessage() {
      alert("The average of the student result is: 4");
      console.log("Button was clicked.");
    }
  </script>

  <br><br>

  <button onclick="showMessage()">Avg</button>

</body>
</html>
