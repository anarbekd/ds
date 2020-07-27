<!DOCTYPE html>
<html lang="en">
<head>
<title>Veterinary Diagnosis</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
<link href='bootstrap.css' rel='stylesheet'>
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 15%;
  text-align: center;
  background: #1abc9c;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar1 {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar1 a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar1 a.right {
  float: right;
}

/* Change color on hover */
.navbar1 a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar1 a {
    float: none;
    width: 100%;
  }
}

.footer-copyright {
    color: #808080;
}

.footer h2 {
  color: #404040;
}

.header-img{
background-image: url(img/bg2.jpg);
background-repeat: no-repeat;

height: 100%;
width: auto;
}

.font2 {
  font-family: 'Ewert';
}

.font1 {
  font-family: 'Fredoka One';
}

.hr2 {
border: 0;
height: 0; /* Firefox... */
box-shadow: 0 0 10px 1px #000000;
}

.hr1 {
height: 30px;
border-style: solid;
border-color: black;
border-width: 1px 0 0 0;
border-radius: 20px;
}

.hr-last {
display: block;
content: "";
height: 30px;
margin-top: -31px;
border-style: solid;
border-color: black;
border-width: 0 0 1px 0;
border-radius: 20px;
}

.font-paprika {
  font-family: 'Paprika';
}
</style>
</head>
<body>

<div class="header header-img">
  <!--h1>Cattle diseases</h1>
  <p>Veterinary Diagnosis of Cattle Diseases</p-->
</div>

<div class="navbar1">
  <a href="index.php">Home</a>
  <!--a href="advices.php">Advices</a-->
  <a href="facts.php">Interesting facts</a>
  <a href="contacts.php" class="right">Contacts</a>
</div>

<div class="row">
  <div class="side">
    <div class="fakeimg" style="height:350px;"><center><img src="img/cow3.jpg" style="height:300px;"></center></div><br>
    <div class="fakeimg" style="height:325px;"><center><img src="img/cow4.jpg" style="height:275px;"></center></div><br>
    <div class="fakeimg" style="height:350px;"><center><img src="img/cow1.jpg" style="height:300px;"></center></div><br>
    <div class="fakeimg" style="height:350px;"><center><img src="img/cow2.jpg" style="height:300px;"></center></div><br>

</div>
  <div class="main">
    <h1 align="center" class="font-paprika">Anaplasmosis</h1>
    <br>
    <br>
    <div class="fakeimg">
    <div class = "row">
    <div class = "col">
    <h3><b> Cause </b></h3>
    <p> Anaplasmosis is a vector-borne, infectious blood disease in cattle caused by the rickesttsial parasites 
    Anaplasma marginale and Anaplasma centrale. It is also known as yellow-bag or yellow-fever.
    This parasite infects the red blood cells and causes severe anemia. It is most usually spread by ticks. </p>
   
    <div>
    <h3><b> Symptoms </b> </h3>
    <ul>
    <li> Anemia</li>
    <li> Fever</li>
    <li> Weight loss</li>
    <li> Breathlessness</li>
    <li> Jaundice</li>
    <li> Uncoordinated movements</li>
    <li> Abortion</li>
    <li> Death</li>
    </ul>
    </div>

    <div> 
    <h3> <b> Treatment </b> </h3>
    <p> Tetracycline is often used for clinical anaplasmosis. However it cannot be used in every country. </p>
    <p> General supportive care is also important for anemic animals. Blood transfusions are of limited benefit. </p>
    <p> The incubation time for the disease to develop varies from two weeks to over three months, but averages three to four weeks. Adult cattle are more susceptible to infection than calves. </p>
    <p> The disease is generally mild in calves under a year of age, rarely fatal in cattle up to two years of age, sometimes fatal in animals up to three years of age, and often fatal in older cattle.</p>
    <p> Once an animal recovers from infection, either naturally or with normal therapy, it will usually remain a carrier of the disease for life. Carriers show no sign of the disease but act as sources of infection for other susceptible cattle.</p>
    
    </div>

    <div>
    <h3> <b> Prevention </b> </h3>
    <p> Typically, cases of anaplasmosis increase in late summer and fall as insect vectors increase. Therefore, control of vectors is key to preventing anaplasmosis. If necessary herd treatment with oxytetracycline injection every 3 to 4 weeks during high risk times may be necessary will prevent clinical disease but animals can become carriers.</p>
    <p> Chlortetracycline also known as CTC can reduce the risk of anaplasmosis. A consistent intake of the correct amount of mineral is crucial to a anaplasmosis prevention programme. CTC is available in medicated feed, free choice salt-mineral mixes or medicated blocks.</p>
    <p> In some places, vaccines are available to increase resistance to anaplasmosis. </p>
    </div>

    </div>

    </div>          
    </div>

  </div>
</div>

<div class="footer">
  <h2 class="font1">Veterinary Diagnosis of Cattle Diseases</h2>
  <h5 class="font1 footer-copyright">© 2020 Saule Zhanizakova, zhanizakovaas@gmail.com </h5>
</div>

</body>
</html>
