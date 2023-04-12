<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons.css">
   <title>exercise page</title>
   <style type="text/css">
      li{
      
      padding: 20%;

    }
     ul li {
      display: inline-flex;
    }

     a{
      text-decoration: none;
    
    color: tomato;
    font-family: French Script MT;
    font-size: 20px;}

    ul{

       box-shadow: 0 0 15px;
      overflow: none;
      position: fixed;
       margin-top:-49px;
      margin-left: -10px;
      background-color:whitesmoke;
      margin-right: 850px;
      margin-bottom: -500px;

    }
     h1{
    
      color: whitesmoke;
      font-family: French Script MT;
      text-align: ;
      font-size: 38px;
      

     }
     .head{
       background-color: Tomato;
      margin-left: -10px;
      margin-top: -10px;
      margin-right: -25px;
      top: 0;
      overflow: none;
      position: fixed;
      width: 100%;
      box-shadow: 0 0 15px;

     }
     .head h1{
      display: inline-block;
     }
     .search input [type='text']{
      width: 100px;
      height: 30px;
      background-color: gray;
     }
     .search input[type='submit']{
      color: Tomato;
      background-color: whitesmoke;
      width: 70px;
      font-family: French Script MT;
      font-size: 18px;
     }
     .search{
     margin-top: -10px;
     margin-left: 400px;

     }
     .login{
         margin-top: -20px;
     margin-left: 900px;
     }
     body{
      background-color: whitesmoke;
     }
     h4{
         font-family: French Script MT;
         font-size: 19px;
     }
     footer{
    
      font-size: 16px;
      font-family: French Script MT;
     }
.footer{

     text-align: center;
     background-color: tomato;
     color: whitesmoke;
     margin-right: -25px;
     margin-bottom: -10px;
     margin-left: -10px;
}
.p{
 color: black;
   background-color: whitesmoke;
   margin-top: 180px;
   margin-left: 230px;
   margin-right: 140px;
    font-family:Gloucester MT Extra Condensed;
    font-size: 20px;
    border: 2px solid;
    border-radius: 20px;
    border-color: Tomato;
    padding: 10px;

    
}
i{
color: whitesmoke;
}
h2{
   text-align: center;
   color:black;
    font-family: French Script MT;
    font-size: 30px;
}
button {
background: whitesmoke;
   margin-left: 200px;
   border-color: tomato;
}

label{
   color: tomato;
}


   </style>
</head>
<body>
   <div class="head">
   <h1>Menya </h1>
   <div class="search">
      <a href="index.php"><i class="bi bi-search"></i></a>
   <input type="text" name="search">
   <input type="submit" name="search" value="search">
   </div>
   
</div>
<ul>
   
   <li><a href="index2.php">home</a></li>
      <li><a href="study.php">study</a></li>
   <li><a href="exercise.php">exercise</a></li>
   <li><a href="quize.php">quiz</a></li>
  
   
</ul>
<div class="p">
   
   <h2>ikizamini<br>
hitamo igisubizo nyacyo
   </h2>
   <p>
   <form><label>1. Uretse igihe icyapa kibyerekana ukundi, 
uburemere ntarengwa ku mateme akozwe mu ngiga z'ibiti cyangwa mu mbaho ni:
</label><br>
      <input type="radio" name="a">A.   toni 5<br>
      <input type="radio" name="a">B.  Toni 12<br>
      <input type="radio" name="a">C.  Kg 800<br>
      <input type="radio" name="a"> 
D. Toni 8
 <br>
  

      <label>2.   Uretse amategeko yihariye akurikizwa muri ako karere, umwanya usigara hagati y'ibinyabiziga bibiri bihagaze umwanya munini ku ruhande rumwe rw'umuhanda ubisikanirwamo kandi utuma hahita ibinyabiziga bibiri gusa, ugomba kuba nibura:</label><br>

      <input type="radio" name="b">A.  Metero 5 iyo ari mu nsisiro, na metero 20 ahatari mu nsisiro.<br>
      <input type="radio" name="b">B.  Metero 20 iyo ari mu nsisiro, na metero 5 ahatari mu nsisiro. na f<br>
      <input type="radio" name="b">C.  Metero 3 iyo ari mu nsisiro, na metero 20 ahatari mu nsisiro<br>
      <input type="radio" name="b">d. ntagisubizo kiri moD. Metero 1 iyo ari mu nsisiro, na metero 5 ahatari mu nsisiro.

      <label>3.   3. Iyo nta mategeko awugabanya by’ umwihariko, umuvuduko ntarengwa w' imodoka zikoreshwa nk’amavatiri y’ifasi cyangwa amatagisi zifite uburemere bwemewe butarenga kilogarama 3500:  
</label><br>
      <input type="radio" name="c">a.Ibirometero 65 mu isaha.<br>
      <input type="radio" name="c">b.Ibirometero 40 mu isaha.<br>
      <input type="radio" name="c"> c.Ibirometero 50 mu isaha.<br>
      <input type="radio" name="c">d. Ibirometero 75 mu isaha. <br> 

       <label>4. Iki cyapa gisobanura iki?</label><br>
      <input type="radio" name="d">  A. Ahahagararwa umwanya muto cyangwa munini<br>
      <input type="radio" name="d">B. Ubujijwe guhagarara<br>
      <input type="radio" name="d">C. ubujijwe guhagarara umwanya muto<br>
      <input type="radio" name="d">D. ubujijwe guhagarara umwanya muto cyanwa munini.   <br> 
 
      <label>5. Iyo umugenzi ari mu nzira nyabagendwa asatiriwe n'ikinyabiziga ndakumirwa kirangwa n'intabaza ndangururajwi yihariye akora iki?</label><br>
      <input type="radio" name="e">A.  Agomba kugabanya umuvuduko <br>
      <input type="radio" name="e">B. Agomba gusubira inyuma ako kanya, ndetse byaba ngombwa agahagarara. 
      <input type="radio" name="e">C. Agomba kugihigamira ako kanya, ndetse byaba ngombwa agahagarara. <br>
      <input type="radio" name="e">D. Agomba guhagarara ako kanya aho yari ageze<br> 
    
      <label>6. Mu nsisiro, umuvuduko ntarengwa w' binyabiziga byose ushyizweho ku buryo bukurikira: </label><br>
      <input type="radio" name="f">ibirometero 50 mu isaha.<br>
      <input type="radio" name="f">B. ibirometero 40 mu isaha. <br>
      <input type="radio" name="f">C. ibirometero 45 mu isaha.<br>
      <input type="radio" name="f">  d.    kworoherana kugira ngo batambuD. ibirometero 60 mu isaha.  <br>
      <label>7. Iyo ntayindi mpamvu ihari iyo ibinyabiziga bigomba kubisikana ari ibyo mu rwego rumweni nde ugomba gusubira inyuma?:</label><br>
      <input type="radio" name="g">A. Ni umuyobozi w’ikinyabiziga kimanuka<br>
      <input type="radio" name="g">b. Basabwa bose gusubira inyuma<br>
      <input type="radio" name="g">C. Basabwa bose gukomeza urugendo<br>
      <input type="radio" name="g">D.Nta gisubizo kiri mo.  <br> 
    

      
      <label>8. Ni muyihe mihanda byemewe kugenda imodoka ibangikanye n’indi?  </label><br>
      <input type="radio" name="j">a.Mu gihe umuhanda ufite ibisate bibiri bigendwamo mu byerekezo byombi. <br>
      <input type="radio" name="j">b. Mu gihe umuhanda ufite igisate kimwe ;  <br>
      <input type="radio" name="j">c. Igihe cyose <br>
      <input type="radio" name="j"> d. Nta gisubizo kirimo.    <br> 
      <label>9. Amatara ndangambere ni:  </label><br>
      <input type="radio" name="m">A. Bivuga amatara y’ikinyabiziga akiranga kandi agaragaza imbere yacyo

 <br>
      <input type="radio" name="m">B. Bivuga amatara y’ikinyabiziga akiranga kandi agaragaza imbere yacyo mu gihe cy’imvura.<br>
      <input type="radio" name="m"> C. Bivuga amatara y’ikinyabiziga akiranga kandi agaragaza ubugari bwacyo burebewe imbere. <br>
       <input type="radio" name="m"> D. Bivuga amatara y’ikinyabiziga akiranga kandi agaragaza imbere yacyo mu gihe cy’ijoro. <br>
     <label>10. Itara ry'ikinyabiziga rigenewe kwereka abandi bagenzi ko umuyobozi ashaka kugana iburyo cyangwa ibumoso ryitwa:  </label><br>
      <input type="radio" name="k">A. Itara ndanga-cyerekezo

 <br>
      <input type="radio" name="k">B.Itara ryo kubisikana <br>
      <input type="radio" name="k">C. Itara ndanga <br>
      <input type="radio" name="k"> D. Ibisubizo A na B ni byo.   <br>
           <label>11. Icyapa gikurikira gisobanura:   </label><br>
      <input type="radio" name="n">A. Ahari ibitaro

 <br>
      <input type="radio" name="n">B. Aho imodoka zihagarara <br>
      <input type="radio" name="n">C. Aho imodoka nini zitwarira abantu hamwe zihagarara <br>
      <input type="radio" name="n"> D. Nta gisubizo kirimo <br>
           <label>12. Umuyobozi ugiye kwinjira mu isangano aho bagomba kuzenguruka, agomba:   </label><br>
      <input type="radio" name="l">A. Kureka ibinyabiziga byagezemo bikabanza bigatambuka.

 <br>
      <input type="radio" name="l">B. Kuvuza ihoni <br>
      <input type="radio" name="l">C. Guhagarara   <br>
      <input type="radio" name="l">D. Guhita atambuka  <br>
      <h2>subiza ukoresheje oya cyangwa yego </h2>
      <label>13. Umuyobozi wese uvuye ahantu hahana imbibi n'inzira nyabagendwa agiye kwinjiramo agomba kureka ibinyabiziga bigendamo bigatambuka.   </label><br>
      <input type="radio" name="p">a.yego

 <br>
      <input type="radio" name="p">b.oya<br>
      <label>14. Kubisikana bikorerwa ku ruhande rw'ibumoso                     </label><br>
      <input type="radio" name="p">a.yego

 <br>
      <input type="radio" name="p">b.oya<br>
      <label>15. Iyo ubugari bw'inzira nyabagendwa igendwamo n'ibinyabiziga budahagije kugira ngo bibisikane nta nkomyi, abagenzi bategetswe kworoherana kugira ngo batambuke.                    </label><br>
      <input type="radio" name="y">a.yego

 <br>
      <input type="radio" name="y">b.oya<br>
      <label>16. Amatara magufi n'amatara maremare agomba kuzima iyo ikinyabiziga gihagaze umwanya muto cyangwa munini.                    </label><br>
      <input type="radio" name="t">a.yego

 <br>
      <input type="radio" name="t">b.oya<br>

      <label>16. Amatara magufi n'amatara maremare agomba kuzima iyo ikinyabiziga gihagaze umwanya muto cyangwa munini.                    </label><br>
      <input type="radio" name="p">a.yego

 <br>
      <input type="radio" name="p">b.oya<br>
       <label>17. Umuyobozi w’ikinyabiziga ashobora kongera umuvuduko igihe abisabwe n’abo atwaye.                     </label><br>
      <input type="radio" name="u">a.yego

 <br>
      <input type="radio" name="u">b.oya<br>
       <label>18. Kunyuranaho bigomba gukorerwa iburyo iyo umuyobozi unyurwaho, amaze kwerekana ko ashaka kugana iburyo;                    </label><br>
      <input type="radio" name="z">a.yego

 <br>
      <input type="radio" name="z">b.oya<br>
       <label>19. Iyo umuhanda ugabanyijemo ibisate bitatu kandi ukaba ugenderwamo mu byerekezo byombi, umuyobozi wese yemerewe kugendera mu gisate cyerekeye inkombe y'ibumoso bw'umuhanda.                    </label><br>
      <input type="radio" name="j">a.yego

 <br>
 <input type="radio" name="j">a.oya

 <br>
 <label>20. Umuntu ufite Urwego D atwara Imodoka zakorewe gutwara ibintu kandi zifite imyanya irenga umunani yo kwicarwamo, hatabariwemo uw'umuyobozi                    </label><br>
      <input type="radio" name="s">a.yego

 <br>
      <input type="radio" name="s">b.oya<br>
   </form></p>
   <button><a href="">kwemeza</a></button>
</p>
</div>

<div class="footer">
<h4>Our contact</h4>
<footer >
   address:Rwanda ,rubavu, gisenyi
   email:menya1@gmail.com
   tel:0789750435
</footer>
</div>
</body>
</html>
<script type="text/javascript">
   var input = document.querySelectorAll("")
</script>