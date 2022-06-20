displayAll();

/*function renderSlides()
{
    document.getElementById("slide-show").style.display = "block";
    document.getElementById("slide-show").innerHTML = "";
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("slide-show").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","../PHP/searchDB.php?all=2&q=",true);
    xmlhttp.send();
}*/

function displayAll()
{
    document.getElementById("slide-show").style.display = "block";
    //renderSlides();
    document.getElementById("animalgrid").innerHTML = "";
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("animalgrid").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","../PHP/searchDB.php?all=1&q=",true);
    xmlhttp.send();
}

function showResults(str) {
    document.getElementById("animalgrid").innerHTML = "";
    if (str.length==0) 
    {
        displayAll();
        return
    }
    else
    {
        document.getElementById("slide-show").style.display = "none";
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("animalgrid").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","../PHP/searchDB.php?all=0&q="+str,true);
    xmlhttp.send();
  }