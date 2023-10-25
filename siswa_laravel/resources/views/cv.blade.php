<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Zikri</title>
    <link rel="shortcut icon" href="/img/profile.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/cv.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <main class="main flex flex-col">
        <nav class="nav flex flex-row align-center">
            <div class="logo flex flex-row align-center">
                <img class="profile" src="/img/profile.png" alt="">
                <h2 class="nav-title">{{$siswa -> name}}</h2>
            </div>
            <ul class="nav-links flex">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Experience">Experience</a></li>
                <li><a href="#Skill">Skill</a></li>
                <li><a href="#Education">Education</a></li>
            </ul>
        </nav>
        <section class="hero flex flex-col just-center" id="Home">
                <p class="hero-title">WE DESIGN AND BUILD WEB</p>
                <p class="hero-subtitle">Hi,I am <span class="hero-subtitle-special">{{$siswa -> name}}</span> This is my <span class="hero-subtitle-special">Cv</span></p>
                <div class="hero-btn flex">
                    <a href="https://wa.me/088707860072">
                        <button class="btn flex align-center"><img src="/svg/phone.svg" alt="">WhatsApp</button>
                    </a>
                    <a href="mailto:zikriaf23@gmail.com, apadah2121@gmail.com">
                        <button class="btn flex align-center"><img src="/svg/mail.svg" alt="">Mail</button>
                    </a>
                </div>
        </section>
        <div class="page">
            <section class="page-About h-vh80" id="About">
                <h1 class="">Profile</h1>
                <p>NIS : {{ $siswa -> nis }}</p>
                <div class="flex align-center">
                    <img class="About-img" src="/img/Zee.jpg" alt="">
                    <p class="About-Text">Hello, good morning/afternoon/evening/night. I'm {{$siswa -> nama}}, Hope you are always healthy. I am a novice web programmer. I'm 16 years old, i was born in {{ $siswa -> alamat }}. Call me {{ $siswa -> noTelp }}</p>
                </div>
            </section>
            <section class="page-Experience h-vh80" id="Experience">
                <h1 class="">Experience</h1>
                <p class="">Nothing</p>
            </section>
            <section class="page-Skill h-vh80" id="Skill">
                <h1 class="">Skill</h1>
                <div class="skill-list flex flex-col">
                    <div class="list flex align-center">
                        <img src="/img/html.png" alt="">
                        <p>HTML 50%</p>
                    </div>
                    <div class="list flex align-center">
                        <img src="/img/css-3.png" alt="">
                        <p>CSS 50%</p>
                    </div>
                </div>
            </section>
            <section class="page-Education h-vh80" id="Education">
                <h1 class="">Education</h1>
                <div class="flex flex-col">
                    <div class="school flex align-center">
                        <h6>Elementary school</h6>
                        <p>SDN Cibeunying 04</p>
                    </div>
                    <div class="school flex align-center">
                        <h6>Junior high school</h6>
                        <p>SMPN 52 Bandung</p>
                    </div>
                    <div class="school flex align-center">
                        <h6>Vocational School</h6>
                        <p>SMKN 2 Bandung, {{ $siswa -> kelas }}</p>
                    </div>
                </div>
            </section>
        </div>    
        </div>
    </main>
</body>
</html>