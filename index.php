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
    <link href="./dist/output.css?v=<?= time() ?>" rel="stylesheet" />

    <script src="js/lightbox-plus-jquery.min.js"></script>
    <link href="lightbox.css" rel="stylesheet" />
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
        <h1 class="text-center pb-8 xl:pb-0 font-josefin text-yellow-300 text-6xl leading-none">Podpora</h1>
        <div class="flex items-center flex-wrap">
            <div class="w-full md:w-1/2 max-w-lg mx-auto pr-10 xl:-mt-40 2xl:-mt-80 4xl:-mt-96  ">
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
    <section class="container mx-auto mb-10 px-6 pt-10 border-t-2">
        <h1 class="text-center pb-8 xl:pb-0 font-josefin text-yellow-300 text-6xl leading-none">Galéria</h1>
        <h2 class="my-4 text-center font-josefin text-gray-600 text-2xl leading-none">Campfest 2021</h2>
        <div class="flex justify-center items-center">
        <!-- slider container -->
            <div class="relative h-96 w-full max-w-4xl overflow-hidden">
                <!-- slide 1 -->
                <div class="absolute top-0 w-full h-96 flex  items-center justify-center transition-transform " data-all>
                    <a href="./img/gal2/TF__4941.jpeg" data-lightbox="roadtrip"><img class="w-full h-full object-cover" src="./img/gal2/TF__4941.jpeg" alt="" /></a>
                </div>
                <!-- slide 2 -->
                <div class="absolute top-0 w-full h-96 flex  items-center justify-center transition-transform " data-all>
                    <a href="./img/gal2/TF__4946.jpeg" data-lightbox="roadtrip"><img class="w-full h-full object-cover" src="./img/gal2/TF__4946.jpeg" alt="" /></a>
                </div>
                <!-- slide 3 -->
                <div class="absolute top-0 w-full h-96 flex  items-center justify-center transition-transform" data-all>
                    <a href="./img/gal2/TF__4950.jpeg" data-lightbox="roadtrip"><img class="w-full h-full object-cover" src="./img/gal2/TF__4950.jpeg" alt="" /></a>
                </div>

                <!-- buttons left and right  -->
                <button id="left" class="absolute w-10 h-10 ml-2 md:ml-10 cursor-pointer font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-500 leading-tight text-center z-10 top-48 left-0 my-auto flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <button id="right" class="absolute w-10 h-10 mr-2 md:mr-10 cursor-pointer font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-500 leading-tight text-center z-10 top-48 right-0 my-auto flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </section>



    <footer>

    </footer>
   
<script>
    const slides = document.querySelectorAll("[data-all]");
const btnLeft = document.querySelector('#left');
const btnRight = document.querySelector('#right');

let currSlide = 0;
const maxSlide = slides.length

const goToSlide = function(slide){
  slides.forEach((s,i) => s.style.transform = `translateX(${100 * (i - slide)}%)`)
}

goToSlide(0)

const nextSlide = function(){
  if(currSlide === maxSlide -1){
    currSlide = 0
  } else{
    currSlide++
  }
  
  goToSlide(currSlide)
}

btnRight.addEventListener('click', nextSlide)

const prevSlide = function(){
  if(currSlide === 0){
    currSlide = maxSlide -1
  }else{
   currSlide-- 
  }
  goToSlide(currSlide)
  
}
btnLeft.addEventListener('click', prevSlide)

document.addEventListener('keydown', function (e) {

  if (e.key === 'ArrowLeft') prevSlide();
  e.key === 'ArrowRight' && nextSlide();
});
</script>


    <script>
        var nav = document.getElementById('site-menu');
        var header = document.getElementById('top');

        window.addEventListener('scroll', function() {
            if (window.scrollX >= 40) {
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
    if (isset($_GET['send'])) {
    ?>
        <script type="text/javascript">
            $(document).ready(function() {
                alert('Sprava odoslana');
            });
        </script>
    <?php
    }
    ?>

</body>

</html>