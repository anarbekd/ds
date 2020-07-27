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
    <h1 align="center" class="font-paprika">Anthrax</h1>
    <br>
    <br>
    <div class="fakeimg">
    <div class = "row">
    <div class = "col">
    <p> Anthrax, a highly infectious and fatal disease of mammals and humans, is caused by a relatively large spore-forming rectangular shaped bacterium called Bacillus anthracis. </p>
    <p> Anthrax occurs on all the continents, causes acute mortality in ruminants and is a zoonosis. The bacteria produce extremely potent toxins which are responsible for the ill effects, causing a high mortality rate. While most mammals are susceptible, anthrax is typically a disease of ruminants and humans. </P>
    
    <div>
    <h3><b> Clinical Signs </b> </h3>
    <ul>
    <li> Sudden death (often within 2 or 3 hours of being apparently normal) is by far the most common sign</li>
    <li> Very occasionally some animals may show trembling, a high temperature, difficulty breathing, collapse and convulsions before death. This usually occurs over a period of 24 hours</li>
    <li> After death blood may not clot, resulting in a small amount of bloody discharge from the nose, mouth and other openings</li>
    </ul>
    <p>     Disease is more common in younger animals (one to three years old). Infection can also cause mastitis in cows. </p>
    </div>

    <div>
    <h3><b> Diagnosis </b> </h3>
    <ul>
    <li> On the clinical signs described above</li>
    <li> Rod-shaped bacteria surrounded by a capsule are visible in blood smears made from surface blood vessels</li>
    <li> Post-mortem examinations should not be undertaken on suspected anthrax cases (including any cow that has died suddenly for no apparent reason) until a blood smear has proved negative)</li>
    <li> If a carcass is opened accidentally, the spleen is usually swollen and there is bloodstained fluid in all body cavities.</li>
    </ul>
    <p>     Disease is more common in younger animals (one to three years old). Infection can also cause mastitis in cows. </p>
    </div>

    <div> 
    <h3> <b> Treatment </b> </h3>
    <p> Due to the rapidity of the disease treatment is seldom possible, although high doses of penicillin have been effective in the later stages of some outbreaks. </p>
    </div>

    <div>
    <h3> <b> Prevention </b> </h3>
    <p> Infection is usually acquired through the ingestion of contaminated soil, fodder or compound feed. Anthrax spores in the soil are very resistant and can cause disease when ingested even years after an outbreak. The spores are brought to the surface by wet weather, or by deep tilling, and when ingested or inhaled by ruminants the disease reappears. </p>
    <p> Where an outbreak has occurred, carcases must be disposed of properly, the carcase should not be open (exposure to oxygen will allow the bacteria to form spores) and premises should be quarantined until all susceptible animals are vaccinated. </p>
    <p> Vaccination in endemic areas is very important. Although vaccination will prevent outbreaks veterinary services sometimes fail to vaccinate when the disease has not appeared for several years. But because the spores survive for such lengthy periods, the risk is always present. </p>
    <p> Anthrax is a disease listed in the World Organisation for Animal Health (OIE) Terrestrial Animal Health Code, 2011, (Article 1.2.3) and must be reported to the OIE (Chapter 1.1.2 – Notification of Diseases and Epidemiological Information). </p>
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
