<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/Produit.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <script src="../javaScript/piece.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
<script>
 function SELECTION(id){
       var list = document.getElementById("myimg");
    if (list.hasChildNodes())
    {
    list.removeChild(list.childNodes[0]);
    }
    if(id == "Capteurdefumee"){
        document.getElementById("voici").innerHTML = "Description of capteur de fumée";
        document.getElementById("pageStatut").innerHTML = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br> ";
        var bigImg = document.createElement("img");
        bigImg.src="http://localhost/Site-G6E/MvcModel/Views/1.jpg";    //"CF.jpg";   //给img元素的src属性赋值
        var myimg = document.getElementById('myimg');
        //获得dom对象
        myimg.appendChild(bigImg);   //为dom添加子元素img
    }else if (id == "Capteurdecontactsansfil"){
         document.getElementById("voici").innerHTML = "Description of capteur de contact sans fil";
        document.getElementById("pageStatut").innerHTML = "";
        var bigImg = document.createElement("img");
        bigImg.src="http://localhost/Site-G6E/MvcModel/Views/2.jpg";//"";   //给img元素的src属性赋值

        var myimg = document.getElementById('myimg'); //获得dom对象
        myimg.appendChild(bigImg);      //为dom添加子元素img
    }else if (id == "Capteurdepresences"){
        document.getElementById("voici").innerHTML = "Description of capteur de présences";
        document.getElementById("pageStatut").innerHTML = "";
        var bigImg = document.createElement("img");
        bigImg.src="http://localhost/Site-G6E/MvcModel/Views/3.jpg";   //给img元素的src属性赋值
        var myimg = document.getElementById('myimg'); //获得dom对象
        myimg.appendChild(bigImg);      //为dom添加子元素img
    }else if (id == "Capteurdetemperatureetdhumidite"){
        document.getElementById("voici").innerHTML = "Description of capteur de température et d'humidité";
        document.getElementById("pageStatut").innerHTML = "";
        var bigImg = document.createElement("img");
        bigImg.src="http://localhost/Site-G6E/MvcModel/Views/4.jpg";   //给img元素的src属性赋值
        var myimg = document.getElementById('myimg'); //获得dom对象
        myimg.appendChild(bigImg);      //为dom添加子元素img
    }else if (id == "Capteurdeluminosite"){
        document.getElementById("voici").innerHTML = "Description of capteur de luminosité";
        document.getElementById("pageStatut").innerHTML = "";
        var bigImg = document.createElement("img");
        bigImg.src="http://localhost/Site-G6E/MvcModel/Views/5.jpg";   //给img元素的src属性赋值
        var myimg = document.getElementById('myimg'); //获得dom对象
        myimg.appendChild(bigImg);      //为dom添加子元素img
    }

}
</script>
</head>

<body>
  <?php include("header.php") ?>

    <div id="content">
        <div id="capteurs" >
            <div class="li">
                  <input type="button" class="section" id="Capteurdefumee" onclick="SELECTION(this.id)" value="Capteur de fumée"></input>
            </div>
            <div class="li">
                  <input type="button" class="section" id="Capteurdecontactsansfil" onclick="SELECTION(this.id)" value="Capteur de contact sans fil"></input>
            </div>
            <div class="li">
                  <input type="button" class="section" id="Capteurdepresences" onclick="SELECTION(this.id)" value="Capteur de présences"></input>
            </div>
            <div class="li">
                  <input type="button" class="section" id="Capteurdetemperatureetdhumidite" onclick="SELECTION(this.id)" value="Capteur de température et d'humidité"></input>
            </div>
            <div class="li">
                  <input type="button" class="section" id="Capteurdeluminosite" onclick="SELECTION(this.id)" value="Capteur de luminosité"></input>
            </div>
        </div>
    <div  id="description">
       <fieldset>
        <h1 id="voici" align="left"></h1>
        <div id="detail">
        <div id="myimg"></div>
        <div id="pageStatut"></div>
        </div>
       </fieldset>
    </div>

</div>
<?php include("footer.php") ?>
</body>


</html>
