<html>

<head>
  <link rel="stylesheet" href="./form1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>

<body>
   <h3 class="w3-bar w3-teal">
  <a href="http://localhost/Project/reports.php" class="w3-bar-item w3-button w3-right">reports</a> 
  <a href="http://localhost/Project/form.php" class="w3-bar-item w3-button w3-right">co-po</a>

</h3><br>
  <form action="http://localhost/Project/copo.php" method="post">
    <div class="wrapper">
      <div class="title">
        CO-PO Mapping Form
      </div>
      <div class="form">
        <div class="inputfield">
          <label>Staff name :</label><input type="text" id="staff_nm" name="staff_nm" required><br><br>
        </div>
        <div class="inputfield">
          <label for="dept">Department:</label>
          <div class="custom_select">
            <select name="dept" id="dept" required>
              <option value="none" selected disabled>--</option>
              <option value="MECH">Mechanical Engineering</option>
              <option value="EXTC">Electronics and Telecommunications Enginnering</option>
              <option value="INSTRU">Instrumentation Engineering</option>
              <option value="CS">Computer Engineering</option>
              <option value="EXTC">Information Technology</option>
              <option value="CIVIL">Civil Engineering</option>
              <option value="ASH">Applied Science & Humanities</option>
            </select><br><br>
          </div>
        </div>
        <div class="inputfield">
          <label for="sem">Semester of course:</label>
        <div class="custom_select">
            <select name="sem" id="sem" required>
              <option value="none" selected disabled>--</option>
              <option value="1">I</option>
              <option value="2">II</option>
              <option value="3">III</option>
              <option value="4">IV</option>
              <option value="5">V</option>
              <option value="6">VI</option>
              <option value="7">VII</option>
              <option value="8">VIII</option>
             </select><br><br>
          </div>
        </div>
        <div class="inputfield">
          <label>Course name:</label><input type="text" id="course_nm" name="course_nm"><br><br>
        </div>
        <div class="inputfield">
          <label>Course_code:</label><input type="text" maxlength="8"  id="course_cd" name="course_cd" required><br><br>
        </div>
        <h5>Enter your Course Outcome:</h5>
        <div class="inputfield">
          <label>Co1:</label><input type="text" id="co1" name="co1"><br><br>
        </div>
        <div class="inputfield">
          <label>Co2:</label><input type="text" id="co2" name="co2"><br><br>
        </div>
        <div class="inputfield">
          <label>Co3:</label><input type="text" id="co3" name="co3"><br><br>
        </div>
        <div class="inputfield">
          <label>Co4:</label><input type="text" id="co4" name="co4"><br><br>
        </div>
        <div class="inputfield">
          <label for="cay">Academic Year:</label>
        <div class="custom_select">
            <select name="cay" id="cay" required>
              <option value="" disabled>--</option>
              <option value="17">2017-2018</option>
              <option value="18">2018-2019</option>
              <option value="19">2019-2020</option>
              <option value="20">2020-2021</option>
             </select><br><br>
          </div>
        </div>
       
        <div class="inputfield">
          <input type="submit" value="Submit" class="btn">
        </div>
      </div>
    </div>
  </form>

  <div class="wrapper">
    
    <?php

      $h=getallheaders();
        if($h["Referer"]=="http://localhost/Project/form.php"){
          echo <<<EXCERPT
          <div class="w3-panel w3-pale-red w3-display-container w3-border">
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">×</span>
          <h4>Error!</h4>
          <p>Seems like the data was already stored.</p>
          </div>
          EXCERPT;
          
      }
      
   
       
    ?>
   </div> 
      
    
</body>

</html>