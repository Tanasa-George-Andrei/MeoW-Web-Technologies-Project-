
<?php
include_once 'wikiDBConnection.php';

$q=$_GET["q"];
$all=$_GET["all"];
$hint="";

if (strlen($q)>0 && $all==0) {
  $hint="";
  $searchTerms=explode(" ", strtolower($q));
  $finalsql="SELECT an.id AS ID, an.xml_file AS XMLF, an.name AS ANAME, an.main_image_file AS IMAGEF, an.sci_name AS SNAME, COUNT(an.id) AS C FROM wanimals an LEFT JOIN attributes att ON an.id=att.animal_id WHERE ";
  for($i=0; $i<count($searchTerms); $i++)
  {
     $finalsql=$finalsql."an.name LIKE '%".$searchTerms[$i]."%' OR an.sci_name LIKE '%".$searchTerms[$i]."%' OR att.value LIKE '%".$searchTerms[$i]."%'";
     if($i<(count($searchTerms)-1))
     {
      $finalsql=$finalsql." OR ";
     }
  }
  $finalsql=$finalsql." GROUP BY an.id ORDER BY C DESC;";
  $result=$conn->query($finalsql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $hint = $hint . "<div class='griditem'>
      <figure>
          <a href='wiki.php/q?file=".$row["XMLF"]."'><img src='../Img/".$row["IMAGEF"]."' alt='".$row["ANAME"]."' /></a>
          <figcaption>".ucfirst($row["ANAME"])."</figcaption>
      </figure>
      </div>
      ";
    }
  }
}

if($all==1){
  $hint="";
  $finalsql="SELECT an.id AS ID, an.xml_file AS XMLF, an.name AS ANAME, an.main_image_file AS IMAGEF, an.sci_name AS SNAME FROM wanimals an ORDER BY an.name DESC;";
  $result=$conn->query($finalsql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $hint = $hint . "<div class='griditem'>
      <figure>
          <a href='wiki.php/q?file=".$row["XMLF"]."'><img src='../Img/".$row["IMAGEF"]."' alt='".$row["ANAME"]."' /></a>
          <figcaption>".ucfirst($row["ANAME"])."</figcaption>
      </figure>
      </div>
      ";
    }
  }
}

/*if($all==2){
  $hint="";
  $finalsql="SELECT an.id AS ID, an.xml_file AS XMLF, an.name AS ANAME, an.main_image_file AS IMAGEF, an.sci_name AS SNAME FROM wanimals an ORDER BY an.name DESC LIMIT 6;";
  $result=$conn->query($finalsql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $hint = $hint . "<div class='slides'>
      <a href='wiki.php/q?file=".$row["XMLF"]." '><img src='../Img/".$row["IMAGEF"]."' alt='".$row["ANAME"]." width='100%' /></a>
      </div>";
    }
  }
  $hint = $hint . "<a class='prev' onclick='plusSlides(-1)'>❮</a>
    <a class='next' onclick='plusSlides(1)'>❯</a> <div class='caption-container'>
    <p id='caption'></p>
</div> <div class='row'>";
$result=$conn->query($finalsql);
if ($result->num_rows > 0) {
  $i = 1;
  while($row = $result->fetch_assoc()) {
    $hint = $hint . "<div class='column'>
    <img class='demo cursor' src='../Img/".$row["IMAGEF"]."' width='100%' onclick='currentSlide(".$i.")'
        alt=".ucfirst($row["ANAME"]).">
    </div>";
    $i++;
  }
}

$hint = $hint . "</div>";
}*/

if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

echo $response;