<!DOCTYPE html>
<html lang="es-mx>
<head>
<meta charset="UTF-8">
<title>Intro PHP7 Grupo:XC </title>
<link rel="stylesheet" href="css/estilos.css"/>
<link rel="stylesheet" href="css/menu.css"/>
<link rel="stylesheet" href="css/problema.css"/>
<link href="https://fonts.googleapis.com/css?family=Ramba" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"/>
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo><a href="index.php">Intro PHP7 </a></h1>
<nav>
<ul>
<li><a href="index.php" class="current">Inicio</a></h1>
<li><a href="#" >Otro Ejemplo</a></h1>
</ul>
</nav>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Cálcular el tiempo y altura  de un lanzamiento</h2>
            <p>Descripción:</p>
            <p>Un jugador de los Patriotas de la NFL le pega al balón con un ángulo de  37 grados con respectro al plano horizontal  <br>
                <p>imprimiendole una velocidad de 15 m/s. Calcular tiempo que dura la pelota en el aire y la altura maxima </p>
      </section>
      <section class="formulas">
      <h2>Formulas</h2>
            h=cos(an)2*sen(an)2/2g <br>
            r=cos(an)2*sen(2an)/g <br>
            t=2v/g <br>
      </section>
       <section class="datos">
            <h2>Datos:</h2>
            ang = an = 37 grados <br>
            altura = ha = .5859 <br>
            tiempo = t = 3.0612 <br>
            velocidad =v = 15m/s. <br>
            masa = g = 9.8 <br>
            tem = ti =30<br>
            po = p =.4141<br>
            alcance = r = -0.0716
      </section>
      <section class="calculos">
            <h2>Calculos:</h2>
          <p>La altura es:<br>
             t=ti/g</p>
             h=ha*p/19.600
             
             </section>
             
          <?php
             function calcula_altura(){
             $ha=.5859;
             $g=9.8;
             $ti=30;
             $p=.4141;
             $t=$ti/$g;
             $h=$ha*$p/19.60;
             return $h;
             }
             
             ?>
             
             <section class="resultado">
             <h2>Resultado:</h2>
             <div id="resultadoA"></div>
             <?php
             print "<h1> Resultado: altura=".calcula_altura()." mtrs</h1>";
             ?>
             
             </section>
             </section>
             
             <footer class="Pie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
    </section>
</body>
</html>
             
             
