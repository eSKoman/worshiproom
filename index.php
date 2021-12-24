<!DOCTYPE html>
<html lang="sk-SK">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Worshiproom Music, Kresťanská kapela, Worshiproom.sk, Worshiproom">
        <meta name="description" content="Worshiproom Music">
        <meta name="author" content="Slavomír Kotlár">
        <title>Worshiproom Music</title>
        <!-- Favicon-->
        <link rel="icon" href="./img/logo.png" type="image/gif">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes tailwind)-->
        <link href="./dist/output.css?v=<?=time()?>" rel="stylesheet" />
    </head>
    <body class="font-sans">

        <!-- Navigation-->
        <div class="fixed w-screen z-10">
            <header class="flex w-full flex-col items-center bg-black md:bg-opacity-60">
                <nav id="site-menu" class="flex flex-col md:flex-row w-full justify-center items-center  py-1">
                    
                    <div class="w-full md:w-auto self-start md:self-center flex-col flex md:flex-none flex-no-wrap justify-between items-center">
                        <a href="www.worshiproom.sk">
                            <img src="./img/logo.PNG" class="w-20 h-auto md:-mr-6 lg:mr-10 2xl:mr-20" alt="Logo Worshiproom">
                        </a>
                        <button id="menuBtn" class="hamburger block md:hidden focus:outline-none" type="button" onclick="navToggle();">
                            <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
                          </button>
                    </div>
                
                    <ul id="menu" class="w-full md:w-auto md:flex flex-col md:flex-row h-full  hidden text-white uppercase font-josefin">
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Domov</a></li>
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Hudba</a></li>
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Podpora</a></li>
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Podujatia</a></li>
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Galéria</a></li>
                        <li class="w-full no-underline md:w-auto md:px-1 lg:px-2 mr-1 hover:text-black hover:bg-yellow-300 transition duration-700 rounded-lg"><a href="#" class="p-4 block w-max mx-auto">Kontakt</a></li>
                    </ul>

                </nav>
            </header> 
        </div>

        <!-- Motto-->  
        <article class="pt-72 min-h-screen min-w-screen bg-center bg-fixed" style="background-image: url('./img/pozadieheader.JPG'); background-repeat: no-repat; background-size: cover;">
            <div class="min-w-screen md:w-10/12 lg:w-8/12 xl:w-8/12 2xl:w-6/12 mx-auto p-14 rounded-2xl bg-black bg-opacity-60">
                <h1 class="pb-4 font-josefin uppercase text-yellow-300  text-center text-4xl sm:text-4xl xl:text-6xl">Worshiproom Music</h1>
                <p class="w-10/12 xl:w-5/12 mx-auto text-white font-bold text-center leading-loose">Celým srdcom vášnivo milujeme Boha a našou poctou je viesť ľudí do Jeho prítomnosti tak, že sa môžu stretnúť z tváre do tváre a zakúsiť Jeho dobrotu.</p>
            </div>
        </article>
       
        <!-- Hudba-->
        <section class="max-w-screen p-8 container m-auto mt-10 text-center">
            
            <h1 class="mb-6 font-josefin text-yellow-300 text-6xl leading-none">Hudba</h1>
            <h2 class="font-josefin text-gray-600 text-2xl leading-none">Nové srdce</h2>
            <div class="flex-none md:flex w-max m-auto space-x-16">
                
                <ul class="w-auto ml-12 mt-6 list-decimal font-josefin text-left text-gray-600 leading-loose">
                    <li>SI VYVÝŠENÝ</li>
                    <li>JE NIK AKO TY</li>
                    <li>PRI TEBE</li>
                    <li>JEŽIŠ</li>
                    <li>SRDCE S TVOJÍM</li> 
                    <li>HODEN SI</li>
                    <li>MILOSŤ I NOVÉ SRDCE
                    <li>ĽÚBIM ŤA</li>
                </ul>     
                <div class="w-80 sm:w-96">
                    <img src="./img/about.png" class="mt-2 md:mt-0 rounded-full" alt="Obal od CD">
                </div>      
            </div>
            <img src="./img/2.png" class="xl:max-w-6xl m-auto" alt="Otvorený obal od CD">
        </section>

        <!-- Podpora-->

        <section class="container mx-auto px-6 p-10 border-t-2">
            <h2 class="text-center pb-8 xl:pb-0 font-josefin text-yellow-300 text-6xl leading-none">Podpora</h2>
            <div class="flex items-center flex-wrap">
                <div class="w-full md:w-1/2 pr-10 xl:-mt-40 2xl:-mt-80 4xl:-mt-96  ">
                    <p class="text-gray-600 mb-8">Pomôž nám vydať debutový album NOVÉ SRDCE a pridaj sa tak k našej službe hlásania EVANJELIA. Veríme, že chvála má moc meniť životy, tak ako sme sa o tom my sami už niekoľko krát presvedčili. Pomôž nám ju dostať k ľuďom, ktorí ju potrebujú počuť. Bez Tvojej podpory to nezvládneme!</p>
                    <h2 class="mt-8 text-lg font-bold text-yellow-300">CIEĽOVÁ SUMA:</h2>
                    <h2 class="mb-3 text-lg font-bold text-yellow-300">5000 €</h2>
                    <div class="w-full bg-gray-300 rounded-2xl dark:bg-gray-700">
                        <div class="bg-yellow-300 text-md font-medium text-gray-600 text-center p-4 leading-none rounded-2xl" style="width: 24%"> 24%</div>
                    </div>
                    <h2 class="mt-3 text-lg font-bold text-yellow-300">IBAN: SK6065000000003651026312</h2>
                    <p class="my-8 text-gray-600 font-bold">DÔLEŽITÉ INFO!!!<br> Do informácií pre príjemcu zadaj:<br> Meno a priezvisko, Adresu (ulica, č. domu, mesto, psč), tel. číslo, e-mail a jeden z variantov. (Variant 2 s veľkosťou - napr. V2XL).<br>Ak Ti niečo nie je jasné, pokojne nám napíš a radi Ti pomôžeme.</p>
                    <p class="my-8 text-gray-600 font-bold">🔒Vaše osobné údaje budú použité výhradne pre komunikáciu s Vami a zaslanie konkrétneho variantu na vašu adresu tak, aby bolo všetko v súlade so zákonom GDPR o ochrane osobných údajov.🔒</p>
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <img class="rounded-lg" src="./img/3.png" alt="Čiarový kód na naskenovanie v aplikácii Tvojej banky. CD." />
                </div>
            </div>
            <div class="w-full">
                <img class="rounded-lg" src="./img/4.png" alt="Dva čiarové kódy s Variantom 1 - CD a variantom 2 - tričko." />
            </div>
        </section>

        <!-- Galéria-->

        







        <footer>

        </footer>
    <script>
        var nav = document.getElementById('site-menu');
        var header = document.getElementById('top');

        window.addEventListener('scroll', function() {
            if (window.scrollX >=40) { 
                nav.classList.add('nav-sticky');
                header.classList.add('pt-scroll');
            } else {
                nav.classList.remove('nav-sticky');
                header.classList.remove('pt-scroll');
            }
        });

        function navToggle() {
            var btn = document.getElementById('menuBtn');
            var nav = document.getElementById('menu');

            btn.classList.toggle('open');
            nav.classList.toggle('flex');
            nav.classList.toggle('hidden');
        }
    </script> 

<?php
    if(isset($_GET['send'])) {
?>
<script type="text/javascript">
    $(document).ready(function(){
    alert('Sprava odoslana');
    });
</script>
<?php
 }
?>
    
</body>
</html>
