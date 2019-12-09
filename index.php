<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function solucion(){
        var masa1=9.8;
        var masa2=19.600
        var altura=1.2;
        var tiempo=0.6;
        var cose=.5858;
        var sen=.4141;
        var velocidad=15;
        var tiem=30;
        var altura=cose*sen/masa2;
        var tiempo=tiem/masa1;
        var d=document.getElementById("resultado");
        d.innerHTML='La altura es: '+altura+'ms';

        var d=document.getElementById("resulta");
        d.innerHTML='El tiempo es: '+tiempo+'sg';
        }
    </script>
</head>
<body>
    <section id="contenedor">
        <header id="gridHeader">
        <center><h2>Resolver problemas de Ciencia e Ingeniería con JS</h2></center>
        <center><h2>Nombre: Hernández Juárez Yessica &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. de control: 17091065</h2></center>
        <center><h1>Science Technology Engineerig & Mathematics</h1></center>
        <img class="foto" src="images/def.jpg" alt="su foto" width="250px" height="200px"><br>
        </header>
        </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <h2>Problema: Cálcular el tiempo y altura  de un lanzamiento</h2>
            <p>Descripción:</p>
            <p>Un jugador de los Patriotas de la NFL le pega al balón con un ángulo de  37 grados con respectro al plano horizontal  <br>
                <p>imprimiendole una velocidad de 15 m/s. Calcular tiempo que dura la pelota en el aire y la altura maxima </p>
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            ang = an = 37 grados <br>
            altura = h = .0124 <br>
            tiempo = t = 3.0612 <br>
            velocidad =v = 15m/s. <br>
            masa = g = 9.8 <br>
            alcance = r = -0.0716
      </section>
      <section id="formulas">
            <h2>Fórmulas</h2>
            h=cos(an)2*sen(an)2/2g <br>
            r=cos(an)2*sen(2an)/g <br>
            t=2v/g <br>
      </section>
      <section id="solucion">
            <h2>Solución</h2>
            <p>La altura es:<br>
             t=30/9.8</p>
             h=.5859*.4141/19.600
             <button onclick="solucion()">Presiona para calcular</button>
      </section>
      
      <section id="resultado"></section>
    </section>
    
    <section id="resulta"></section>
</section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
