
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rybářský svět | Domů</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVIGACE -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                <img src="ris.svg" class="logo" alt="Logo">
                <span>RYBÁŘSKÝ SVĚT</span>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            Domů
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                            href="reviry.html"
                            role="button"
                            data-bs-toggle="dropdown">
                            Revíry
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="reviry.html">Seznam revírů</a></li>
                            <li><a class="dropdown-item" href="mapa.html">Mapa revírů</a></li>
                            <li><a class="dropdown-item" href="pravidla.html">Pravidla rybaření</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cinost.html">Činnost</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="onas.html">O nás</a>
                    </li>

                </ul>

                <a href="reviry.html" class="nav-button">
                    Naše revíry ↗
                </a>

            </div>
        </div>
    </nav>


    <!-- HLAVNÍ SEKCE -->

    <header class="hero">

        <div class="hero-overlay"></div>

        <div class="container hero-container">

            <div class="hero-content">

                <div class="hero-label">
                    <span class="label-line"></span>
                    VÍTEJTE VE SVĚTĚ RYBAŘENÍ
                </div>

                <h1>
                    Místo, kde<br>
                    <span>čas plyne jinak.</span>
                </h1>

                <p class="hero-text">
                    Klidná hladina, probouzející se příroda
                    a chvíle, na které se nezapomíná.
                    Objevte krásu rybaření s námi.
                </p>

                <div class="hero-buttons">

                    <a href="reviry.html" class="button-primary">
                        Objevit revíry <span>→</span>
                    </a>

                    <a href="onas.html" class="button-secondary">
                        Poznejte nás
                    </a>

                </div>

            </div>

            <div class="hero-bottom">
                <span>RESPEKT K PŘÍRODĚ</span>
                <span class="hero-bottom-line"></span>
                <span>VÁŠEŇ PRO RYBAŘENÍ</span>
            </div>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            <div class="intro-heading">
                <div>
                    <p class="eyebrow">RYBAŘENÍ JE NÁŠ ŽIVOT</p>
                    <h2>Víc než jen<br>čekání na záběr.</h2>
                </div>
                <p class="intro-description">
                    Rybaření je spojení člověka s přírodou.
                    Je to ticho u vody, ranní mlha nad hladinou
                    a radost z každého okamžiku stráveného venku.
                    Právě proto pro vás vytváříme místo,
                    kde najdete vše důležité pro své výpravy.
                </p>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">PROZKOUMEJTE</p>
                    <h2>Všechno pro vaši výpravu.</h2>
                </div>
                <p class="section-subtitle">
                    Vyberte si, co vás zajímá.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="reviry.html" class="feature-card">
                        <div class="feature-image image-one">
                            <span class="feature-number">01</span>
                            <span class="feature-arrow">↗</span>
                        </div>

                        <div class="feature-content">
                            <p class="feature-category">KAM VYRAZIT</p>
                            <h3>Rybářské revíry</h3>
                            <p>
                                Objevte nová místa, řeky a vodní plochy
                                pro své další rybářské dobrodružství.
                            </p>
                            <span class="feature-link">Prohlédnout revíry →</span>
                        </div>

                    </a>
                </div>


                <div class="col-md-4">
                    <a href="pravidla.html" class="feature-card">

                        <div class="feature-image image-two">
                            <span class="feature-number">02</span>
                            <span class="feature-arrow">↗</span>
                        </div>

                        <div class="feature-content">
                            <p class="feature-category">VŠE DŮLEŽITÉ</p>
                            <h3>Pravidla rybaření</h3>
                            <p>
                                Připravte se na výpravu a seznamte se
                                s pravidly, která patří k rybaření.
                            </p>
                            <span class="feature-link">Zjistit více →</span>
                        </div>

                    </a>
                </div>


                <div class="col-md-4">
                    <a href="cinost.html" class="feature-card">

                        <div class="feature-image image-three">
                            <span class="feature-number">03</span>
                            <span class="feature-arrow">↗</span>
                        </div>

                        <div class="feature-content">
                            <p class="feature-category">NÁŠ PŘÍBĚH</p>
                            <h3>Naše činnost</h3>
                            <p>
                                Poznejte aktivity a práci,
                                díky kterým má rybaření smysl i do budoucna.
                            </p>
                            <span class="feature-link">Prozkoumat →</span>
                        </div>

                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- ZÁVĚREČNÍ BANNER -->

    <section class="nature-banner">
        <div class="container nature-content">

            <p class="eyebrow">PŘÍRODA SI ZASLOUŽÍ RESPEKT</p>

            <h2>Nejkrásnější úlovek?<br>
                <span>Chvíle, které zažijete.</span>
            </h2>

            <p>
                Chraňme naše vody, respektujme přírodu
                a předávejme lásku k rybaření dál.
            </p>

            <a href="onas.html" class="button-primary">
                Více o nás <span>→</span>
            </a>

        </div>
    </section>


    <!-- PATIČKA -->

    <footer class="footer">
        <div class="container footer-content">

            <a href="index.html" class="footer-brand">
                RYBÁŘSKÝ SVĚT<span>.</span>
            </a>

            <p>
                S úctou k přírodě. Srdcem u vody.
            </p>

            <div class="footer-line"></div>

            <small>© 2026 Rybářský svět. Všechna práva vyhrazena.</small>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>