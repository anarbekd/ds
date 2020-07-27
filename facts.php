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
    <h1 align="center" class="font-paprika">Interesting facts about cows</h1>
    <div class="fakeimg" >   
    <div class="row">
    <div class="col">
    <ol>
    <br><li> Domestic cows are descendants of wild oxen known as aurochs, and they were first domesticated in southeast Turkey around 10,500 years ago. From the original 80 progenitors, an estimated 1.4 billion cattle exist today.</li>
    <br><li> When scientists mapped out the bovine genome in 2009, they discovered that cattle have about 22,000 genes; 80 percent of their genes are shared with humans.</li>
    <br><li> The word "cattle" comes from the Old French "chatel," as in chattel, meaning property. In many parts of the world, cattle remain an indicator of economic wealth.</li>
    <br><li> Female cattle are called cows; male cattle are called bulls. Generally in the English language we have a single word that we can use to refer to both the male or female of a species — like cat or dog. But cows are unique in that we don't have a singular noun that refers equally to an adult cow or a bull; we just have cattle, which is plural. That said, in colloquial usage cattle are often referred to as cows, like in some of the references here.</li>
    <br><li> Cows spend 10 to 12 hours a day lying down.</li>
    <br><li> The average sleep time of a domestic cow is about four hours a day; unlike horses, they don't sleep standing up.</li>
    <br><li> Drunken rural carousers swear by their stories of tipping over cows in the middle of the night, but most experts assert that there's more urban myth going on than actual tipping. A 2005 study by University of British Columbia researchers concluded that tipping a cow would require an exertion of 2,910 newtons of force; meaning that a 4'7" cow pushed at an angle of 23.4 degrees relative to the ground would require the equivalent strength of 4.43 people to tip the poor thing over.</li>
    <br><li> A dairy cow that is milking consumes around 100 pounds of feed each day.</li>
    <br><li> When cows digest food, fermentation results in a large amount of methane; cattle produce 250 to 500 liters (and by some accounts, up to 1,000 liters) of the gas per day.</li>
    <br><li> According to Stanford University, livestock account for anywhere between 18 and 51 percent of global greenhouse gas emissions measured in CO2 equivalent</li>
    <br> <li> Just like dogs, cows enjoy a good rubdown, whether on the head, neck or back, as seen in this video of a cow using a "Happycow" machine.</li>
    <br><li> There are about 350 udder squirts in a gallon of milk</li>
    <br><li> Researchers have found that if you name a cow and treat her as an individual, she will produce almost 500 more pints of milk a year.</li>
    <br><li> A study by University of Duisburg-Essen researchers in Germany found that cows tend to face either magnetic north or south when grazing or resting, regardless of the sun's position or the wind's direction. The study's author says that magnetic compass orientation has been relatively under-studied in mammals; why cows use it remains a mystery.</li>
    <br><li> Cattle have almost 300 degrees of vision, with blind spots only right in front of and behind them.</li>
    <br><li> Cows have favorite friends and become stressed when they are separated. In a study measuring isolation, heart rates and cortisol levels, researcher Krista McLennan concluded that, "When heifers have their preferred partner with them, their stress levels in terms of their heart rates are reduced compared with if they were with a random individual."</li>
    <br><li> Cows are good swimmers. Three cows made headlines recently when they were discovered on Cape Lookout National Seashore on the Outer Banks of North Carolina. Several cows had been swept out to see by Hurricane Dorian months earlier, and it's believed they swam about 4 or 5 miles to find safety at Cape Lookout. The cows had been living on Cedar Island when the hurricane generated a "mini tsunami," sweeping much of the wildlife off the island, reports The Herald-Sun of Durham, North Carolina.</li>
    <br> <center><iframe  width="560" height="315" src="https://www.youtube.com/embed/p514LaTTIbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    <br><li> Cattle are unable to see the color red; the red flags used by matadors only catch a bull's attention because of the movement.</li>
    <br><li> Cows can have regional accents. After a group of dairy farmers noticed their cows had different moos, language specialists determined that, "In small populations such as herds you would encounter identifiable dialectical variations which are most affected by the immediate peer group."</li>
    <br><li> Cows have an excellent sense of smell and can detect odors up to six miles away.</li>
    <br><li> Hindu nations believe that cows are holy and there are strict laws to protect them. The toughest come from the central Indian state of Madhya Pradesh, where anyone convicted of killing a cow or taking it somewhere to be killed can be jailed for up to seven years.</li>
    <br><li> The world's most expensive cow, Missy, brought in $1.2 million at the Royal Agricultural Winter Fair in 2009.</li>
    </ol>
    </div>
    </div>       
    </div>
    <p></p>
    <p></p>



  </div>
</div>

<div class="footer">
  <h2 class="font1">Veterinary Diagnosis of Cattle Diseases</h2>
  <h5 class="font1 footer-copyright">© 2020 Saule Zhanizakova, zhanizakovaas@gmail.com </h5>
</div>

</body>
</html>
