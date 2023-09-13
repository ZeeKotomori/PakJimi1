<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/company.css">
    <title>PPLG 2</title>
</head>
<body>
    <main>
        <nav class="nav flex just-between">
            <div class="nav-logo flex align-center">
                <img class="logo" src="img/PPLG_LOGO.png" alt="">
                <h1 class="logo-text">RPL</h1>
            </div>
            <ul class="nav-links flex align-center">
                <li><a href="#home">Home</a></li>
                <li><a href="#profesi">Profesi</a></li>
                <li><a href="{{ url('cv') }}">CV</a></li>
                <li><a href="#footer">Bantuan</a></li>
            </ul>
        </nav>
        <section id="home" class="hero">
            <div class="hero-header">
                <img class="hero-img" src="/img/tki_upscaled.jpeg" alt="">
                <div class="hero-text">
                    <p class="hero-title">Rekayasa Perangkat Lunak</p>
                    <a href="https://id.wikipedia.org/wiki/Rekayasa_perangkat_lunak">
                        <button class="btn-green">Read More</button>
                    </a>
                </div>
            </div>
        </section>
        <section id="profesi" class="content flex flex-row align-center just-around">
            <div class="card flex flex-col align-center">
                <img src="/svg/monitor.svg" alt="">
                <p class="card-title">web daveloper</p>
                <p class="card-content">Web Developer is a designer of a website</p>
            </div>
            <div class="card flex flex-col align-center">
                <img src="/svg/smartphone.svg" alt="">
                <p class="card-title">mobile daveloper</p>
                <p class="card-content">Developing the application interface</p>
            </div>
            <div class="card flex flex-col align-center">
                <img src="/svg/crosshair.svg" alt="">
                <p class="card-title">game daveloper</p>
                <p class="card-content">Game developer is a job creating video games</p>
            </div>
        </section>
        <footer id="footer" class="footer flex just-center align-center">
            <div class="footer-content flex flex-col align-center">
                <p>Mail</p>
                <a href="mailto:zikriaf23@gmail.com">
                    <img src="/svg/mail.svg" alt="">
                </a>
            </div>
            <div class="footer-content flex flex-col align-center">
                <p>Twitter</p>
                <a href="https://x.com/zikrifahrezy?t=9h4RpPS2t1-8g4HTL9M6yA&s=09">
                    <img src="/svg/twitter.svg" alt="">
                </a>
            </div>
            <div class="footer-content flex flex-col align-center">
                <p>Instagram</p>
                <a href="https://instagram.com/fahrezy.zikri_?igshid=MzRlODBiNWFlZA==">
                    <img src="/svg/instagram.svg" alt="">
                </a>
            </div>
            <div class="footer-content flex flex-col align-center">  
                <p>GitHub</p>
                <a href="https://github.com/ZeeKotomori">
                    <img src="/svg/github.svg" alt="">
                </a>
            </div>
        </footer>
    </main>
</body>
</html>