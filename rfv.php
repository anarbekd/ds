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
    <h1 align="center" class="font-paprika">Rift Valley Fever</h1>
    <br>
    <br>
    <div class="fakeimg">
    <div class = "row">
    <div class = "col">
    <h3><b> Cause </b></h3>
    <p> Listeriosis is an infectious disease caused by a bacterium, Listeria monocytogenes. It is a zoonotic disease. </p>
    <p> There is a high incidence of intestinal carriers. Encephalitis or meningoencephalitis in adult ruminants is the most frequently recognizsd form. </P>
    <p> The reservoirs of infection are the soil and the intestinal tracts of asymptomatic animals. </p>
    <p> Infected animals can shed L. monocytogenes in the feces, milk and uterine discharges. It is also found in aborted fetuses and occasionally in the nasal discharges and urine of symptomatic animals. Soil or fecal contamination results in its presence on plants and in silage.Infected animals can shed L. monocytogenes in the feces, milk and uterine discharges. It is also found in aborted fetuses and occasionally in the nasal discharges and urine of symptomatic animals. Soil or fecal contamination results in its presence on plants and in silage. </p>
    <p> Most infections are acquired by ingestion, but Listeria can also spread by inhalation or direct contact. Venereal transmission might also be possible. </p>
    <p> Listeriosis is primarily a winter-spring disease of feedlot or housed ruminants. The less acidic pH of spoiled silage enhances multiplication of L monocytogenes. Outbreaks may occur around 10 days after feeding poor-quality silage. Removal or change of silage in the ration often stops the spread of listeriosis; feeding the same silage months later may result in new cases. </p>

    <div>
    <h3><b> Symptoms </b> </h3>
    <ul>
    <li> Depression</li>
    <li> Loss of appetite</li>
    <li> Fever</li>
    <li> Lack of coordination (animals seen going around in circles)</li>
    <li> Isolation from herd</li>
    <li> Salivation</li>
    <li> Facial paralysis</li>
    <li> Abortions</li>
    <li> Stillbirths</li>
    <li> Encephalitis (inflammation of the brain)</li>
    <li> Blood poisoning</li>
    </ul>
    <p>     Disease is more common in younger animals (one to three years old). Infection can also cause mastitis in cows. </p>
    </div>

    <div> 
    <h3> <b> Treatment </b> </h3>
    <p> Infected animals should be isolated from other animals. </p>
    <p> Listeriosis is treated with antibiotics; depending on the form of the disease, treatment may take up to six weeks or more. </p>
    <p> High doses are required because of the difficulty in achieving minimum bactericidal concentrations in the brain. Recovery depends on early, aggressive antibiotic treatment. If signs of encephalitis are severe, death usually occurs despite treatment </p>
    </div>

    <div>
    <h3> <b> Prevention </b> </h3>
    <p> The risk of listeriosis can be lowered by feeding good quality silage with a low pH. </p>
    <p> Avoid spoiled or moldy silage and silage from the top layer (few inches) which has been exposed to air. Any leftover silage should be removed from the feedbunk after feeding. </p>
    <p> Rodent control will prevent spread of bacteria. </p>
    <p> Vaccines are available in some countries, however results are questionable, which leads to questions about the cost-benefit of vaccination. </p>
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
