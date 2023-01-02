<div class="text">
    <header class="header">
        <a href="#" class="logo">
            <i class="fas fa-heartbeat"></i> Healthy life
        </a>
        <nav class="navbar">
            <a href="{{ route('home') }}">
                <span class="{{ request()->is('/') ? 'text-[#16a085]' : '' }}">Home
                </span>
            </a>
            <a href="#sections">
                <span class="{{ request()->is('#services') ? 'text-[#16a085]' : '' }}">Sections
                </span>
            </a>
            <a href="{{ route('book-show') }}">
                <span class="{{ request()->is('book-show') ? 'text-[#16a085]' : '' }}">Library
                </span>
            </a>
            <a href="#services">
                <span class="{{ request()->is('#services') ? 'text-[#16a085]' : '' }}">Services
                </span>
            </a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>


</div>

<style scoped>
    @import url("https://fonts.googleapis.com/css2?family=Lalezar&family=Poppins:wght@100;200;300;400;500;600;700&family=Tajawal:wght@300&display=swap");

    :root {
        --green: #16a085;
        --black: #444;
        --light-color: #777;
        --box-shadow: 0.5rem 0.5rem 0 rgba(22, 160, 133, 0.2);
        --text-shadow: 0.5rem 0.5rem 0 rgba(0, 0, 0, 0.2);
        --border: 0.2rem solid var(--green);
    }

    * {
        font-family: "Poppins", sans-serif;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top: 7rem;
        scroll-behavior: smooth;
    }

    .header {
        padding: 2rem 9%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
    }

    .header .logo {
        font-size: 2.5rem;
        color: var(--black);
    }

    .header .logo i {
        color: var(--green);
    }

    .header .navbar a {
        font-size: 1.7rem;
        color: var(--light-color);
        margin-left: 2rem;
    }

    .header .navbar a:hover {
        color: var(--green);
    }

    #menu-btn {
        font-size: 2.5rem;
        border-radius: 0.5rem;
        background-image: #eee;
        color: var(--green);
        padding: 1rem 1.5rem;
        cursor: pointer;
        display: none;
    }

    /* media queries */
    @media (max-width: 991px) {
        html {
            font-size: 55%;
        }

        .header {
            padding: 2rem;
        }

        section {
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        #menu-btn {
            display: initial;
        }

        .header .navbar {
            position: absolute;
            top: 115%;
            right: 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--box-shadow);
            width: 30rem;
            border: var(--border);
            background: #fff;
            transform: scale(0);
            opacity: 0;
            transform-origin: top right;
            transition: none;
        }

        .header .navbar.active {
            transform: scale(1);
            opacity: 1;
            transition: 0.2s ease-out;
        }

        .header .navbar a {
            font-size: 2rem;
            display: block;
            margin: 2.5rem;
        }
    }

    @media (max-width: 450px) {
        html {
            font-size: 50%;
        }
    }
</style>
