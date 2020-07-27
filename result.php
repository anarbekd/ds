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
    <h1 align="center" class="font-paprika">Result</h1>
    <div class="fakeimg" >   

    <?php
    include('check.php'); 
if(isset($_POST['evidence'])){
	if(count($_POST['evidence'])<2){
		echo "Select minmum 2 symptoms";
	}else{
		$sql = "SELECT GROUP_CONCAT(b.code), a.cf
			FROM ds_bpa a
			JOIN ds_diseases b ON a.id_problem=b.id
			WHERE a.id_evidence IN(".implode(',',$_POST['evidence']).") 
			GROUP BY a.id_evidence";   //SQL запрос
		$result=$db->query($sql);
		$evidence=array();
		while($row=$result->fetch_row()){
			$evidence[]=$row; // Evidence - результат запроса
		}
		
	}
}

// determining environment
$sql="SELECT GROUP_CONCAT(code) FROM ds_diseases";
$result=$db->query($sql);
$row = mysqli_fetch_row($result);
$fod=$row[0];


// determining density value
$new_density=array();
while(!empty($evidence)){
	$density1[0]=array_shift($evidence);
  $density1[1]=array($fod,1-$density1[0][1]);

	$density2=array();
	if(empty($new_density)){
		$density2[0]=array_shift($evidence);
	}else{
		foreach($new_density as $k=>$r){
			if($k!="&theta;"){
        $density2[]=array($k,$r);
       
			}
		}
  }

	$theta=1;
	foreach($density2 as $d) $theta-=$d[1];// q=1-p;
	$density2[]=array($fod,$theta);
	$m=count($density2);
	$new_density=array();
	for($y=0;$y<$m;$y++){
		for($x=0;$x<2;$x++){
			if(!($y==$m-1 && $x==1)){
				$v=explode(',',$density1[$x][0]);
				$w=explode(',',$density2[$y][0]);
				sort($v);
				sort($w);
				$vw=array_intersect($v,$w);
				if(empty($vw)){
					$k="&theta;";
				}else{
					$k=implode(',',$vw);
				}
				if(!isset($new_density[$k])){
					$new_density[$k]=$density1[$x][1]*$density2[$y][1];
				}else{
					$new_density[$k]+=$density1[$x][1]*$density2[$y][1];
				}
			}
		}
	}
	foreach($new_density as $k=>$d){
		if($k!="&theta;"){
			$new_density[$k]=$d/(1-(isset($new_density["&theta;"])?$new_density["&theta;"]:0));
		}
	}
	print_r($new_density);
}

// sorting
unset($new_density["&theta;"]);
arsort($new_density);
print_r($new_density);


// disp4laying the final result
$codes=array_keys($new_density);
$sql="SELECT GROUP_CONCAT(name) 
	FROM ds_diseases 
	WHERE code IN('{$codes[0]}')";
$result=$db->query($sql);
$row=$result->fetch_row();
echo "<br><hr>Disease ";
if($row[0]=="Listeriosis")
echo "<a href='listeriosis.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Anaplasmosis")
echo "<a href='anaplasmosis.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Anthrax")
echo "<a href='anthrax.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Brucellosis")
echo "<a href='brucellosis.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Rift Valley Fever")
echo "<a href='rfv.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Rabies")
echo "<a href='rabies.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
if($row[0]=="Salmonella Dublin Infection")
echo "<a href='sdi.php'><b>{$row[0]}</b></a> detected with confidence ".round($new_density[$codes[0]]*100,2)."%";
$sql11="SELECT notes FROM ds_diseases
  WHERE code IN ('{$codes[0]}')";
 $result11 = $db->query($sql11);
 $row11 = $result11->fetch_row();
 if($row11!=null)
 echo "<br><hr><b>Recommendation:</b> {$row11[0]}";
else
echo "<br><hr><p color='ff0000'><b>There is no disease with such symptoms</b></p>";

?>

<center><a href="index.php"><input type="button" onclick="index.php" value="Go Back"></a></center>
      
    </div>
  </div>
</div>

<div class="footer">
  <h2 class="font1">Veterinary Diagnosis of Cattle Diseases</h2>
  <h5 class="font1 footer-copyright">© 2020 Saule Zhanizakova, zhanizakovaas@gmail.com </h5>
</div>

</body>
</html>
