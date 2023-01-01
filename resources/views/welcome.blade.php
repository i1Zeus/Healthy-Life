<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Health life</title>


    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/
        11.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- icon link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <!-- header section startes -->
    <header class="header">
        <a href="#" class="logo">
            <i class="fas fa-heartbeat"></i> Healthy life
        </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#sections">sections</a>
            <a href="#library">library</a>
            <a href="#services">services</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="image">
            <img src="/img/Healthy lifestyle-bro.png" alt="Healthy lifestyle" />
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p>
                You have to go through life, hopefully trying to stay healthy, being
                as happy as you can, and pursuing, you know, doing what you want
            </p>
            <a href="#" class="btn">
                read more <span class="fas fa-chevron-right"></span>
            </a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- icons section starts -->
    <section class="icos" id="sections">
        <h1 class="heading">website <span>sections</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/food.png" alt="food" />
                </div>
                <div class="content">
                    <h3>Healthy meals</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/Eating food 2.png" alt="Eating food" />
                </div>
                <div class="content">
                    <h3>diet</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/gym 2.png" alt="gym" />
                </div>
                <div class="content">
                    <h3>sport machines</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- icons section ends -->

    <!-- library section starts -->
    <section class="library" id="library">
        <h1 class="heading">our <span>library</span></h1>

        <div class="row">
            <div class="image">
                <img src="/img/Library-amico.png" alt="Library" />
            </div>

            <div class="content">
                <h3>Read and learn through our library</h3>
                <p>You can get free books in the field of healthy life</p>
                <a href="#" class="btn">
                    read more <span class="fas fa-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- library section ends -->
    <!-- service section starts -->
    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/medical.png" alt="medical" />
                </div>
                <div class="content">
                    <h3>Medical Advice</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/body.png" alt="body" />
                </div>
                <div class="content">
                    <h3>body care</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/artical.png" alt="artical image" />
                </div>
                <div class="content">
                    <h3>Articles</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        similique veritatis. Iusto fuga culpa dolores? Dicta saepe soluta
                        aperiam cum deleniti accusantium adipisci, officiis itaque sunt
                        aspernatur debitis, quod eum.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- service section ends -->

    <!-- js link -->
    <script src="/js/script.js"></script>
</body>
