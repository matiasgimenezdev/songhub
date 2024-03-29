<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Descubre una plataforma interactiva donde puedes compartir opiniones sobre música y explorar nuevas recomendaciones.
                Únete a nuestra comunidad de usuarios para escribir reviews de canciones y álbumes e interactuar con otros amantes de la música.
                ¡Explora, conecta y descubre la pasión por la música en SongHub!" />
    <meta property="og:title" content="SongHub" />
    <meta property="og:description" content="Descubre una plataforma interactiva donde puedes compartir opiniones sobre música y explorar nuevas recomendaciones.
                Únete a nuestra comunidad de usuarios para escribir reviews de canciones y álbumes e interactuar con otros amantes de la música.
                ¡Explora, conecta y descubre la pasión por la música en SongHub!" />
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1485579149621-3123dd979885?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG11c2ljfGVufDB8fDB8fHww" />
    <meta property="og:url" content="" id="og-url" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" type="image/x-icon" href="/assets/icons/favicon.svg" />
    <link rel="stylesheet" href="../styles/follow.css" />
    <script src="../scripts/index.js" type="module"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Seguidores | SongHub</title>
</head>

<body>
    <header class="main-header" id="main-header">
        <?php require "fragments/header.view.php"?>
    </header>

    <main>
        <h2>Seguidores</h2>
        <section class="users">
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/236x/94/7f/14/947f14841d26f5dc3541366a987b32f5.jpg"
                    alt="Imagen de perfil de 'Usuario 1'" />
                <a href="profile.html">Usuario 1 <span>@username1</span></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit. Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis nat
                </p>
                <button class="submit-button action-button">Seguir</button>
            </article>
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/236x/2d/92/d0/2d92d085613a400e12fbadacc019e0e2.jpg"
                    alt="Imagen de perfil de 'Usuario 2'" />
                <a href="profile.html">Usuario 2 <span>@username2</span></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit. Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis nat
                </p>
                <button class="submit-outline-button action-button">
                    Siguiendo
                </button>
            </article>
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/564x/1b/c9/28/1bc92809105d535c7adbdd9c2e81602d.jpg"
                    alt="Imagen de perfil de 'Usuario 3'" />
                <a href="profile.html">Usuario 3 <span>@username3</span></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit. Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis nat
                </p>
                <button class="submit-outline-button action-button">
                    Siguiendo
                </button>
            </article>
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/564x/59/82/7d/59827d6ae38ba9e8e34ee89d59679611.jpg"
                    alt="Imagen de perfil de 'Usuario 4'" />
                <a href="profile.html">Usuario 4 <span>@username4</span></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit. Aenean commodo ligula eget dolor. Aenean m
                </p>
                <button class="submit-outline-button action-button">
                    Siguiendo
                </button>
            </article>
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/564x/68/23/25/6823252cc7346252874a7187de3e39ac.jpg"
                    alt="Imagen de perfil de 'Usuario 5'" />
                <a href="profile.html">Usuario 5 <span>@username5</span></a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscin</p>
                <button class="submit-button action-button">Seguir</button>
            </article>
            <article class="user">
                <img loading="lazy" height="70px" width="70px"
                    src="https://i.pinimg.com/564x/e3/2a/f5/e32af5f3863c9d2b161e9ba2d5ce06fd.jpg"
                    alt="Imagen de perfil de 'Usuario 6'" />
                <a href="profile.html">Usuario 6 <span>@username6</span></a>
                <p>Lorem ipsum dolo</p>

                <button class="submit-button action-button">Seguir</button>
            </article>
        </section>
    </main>
</body>

</html>