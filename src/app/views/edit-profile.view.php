<!DOCTYPE html>
<html lang="es">

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
    <link rel="stylesheet" href="../styles/edit-profile.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="../scripts/index.js" type="module"></script>
    <title>Editar perfil | SongHub</title>
</head>

<body>
    <header class="main-header" id="main-header">
        <?php require "fragments/header.view.php"?>
    </header>
    <main>
        <h2 class="section-title">Información del perfil</h2>
        <form action="/" method="POST">
            <fieldset>
                <legend>Información de perfil</legend>
                <p class="profile-image-edit">
                    <img src="https://i.pinimg.com/236x/f4/e4/ff/f4e4ff0e8518813c6d5dde10a4d5164d.jpg"
                        alt="Imagen de perfil" height="150px" width="150px" class="image-border" />
                </p>
                <p class="input-container name-edit">
                    <label for="firstname" class="label">Nombre</label>
                    <input class="input" name="firstname" id="firstname" type="text" />
                </p>
                <p class="input-container username-edit">
                    <label for="username" class="label">Nombre de usuario</label>
                    <input class="input" name="username" id="username" type="text" disabled />
                </p>
                <p class="input-container email-edit">
                    <label for="email" class="label">Correo electrónico</label>
                    <input class="input" name="email" id="email" type="email" disabled />
                </p>
                <p class="input-container country-edit">
                    <label for="country" class="label">Pais</label>
                    <input class="input" name="country" id="country" type="text" />
                </p>
                <p class="input-container biography-edit">
                    <label for="biography" class="label">Biografía</label>
                    <textarea name="biography" id="biography" class="input" maxlength="160"></textarea>
                </p>
            </fieldset>
            <p class="button-container">
                <button class="submit-outline-button">Volver</button>
                <input class="submit-button" type="submit" value="Guardar cambios" />
            </p>
        </form>
        <section class="edit-favourites">
            <h3 class="section-title">Álbumes Favoritos</h3>
            <section>
                <figure aria-describedby="favourite-song-1">
                    <img loading="lazy" src="https://i.pinimg.com/564x/89/28/e3/8928e372651fc60256360ba5e21a7d2f.jpg"
                        alt="Portada del álbum 'Pulse' de Pink Floyd" width="120px" height="120px"
                        class="image-border" />
                    <figcaption class="visually-hidden" id="favourite-song-1">
                        <h4>Pulse</h4>
                        <h5>Pink Floyd</h5>
                    </figcaption>
                </figure>

                <figure aria-describedby="favourite-song-2">
                    <img loading="lazy" src="https://i.pinimg.com/564x/99/41/82/99418264794012ddd044c761919fbb44.jpg"
                        alt="Portada del álbum 'Punisher' de Phoebe Bridgers" width="120px" height="120px"
                        class="image-border" />
                    <figcaption class="visually-hidden" id="favourite-song-2">
                        <h4>Punisher</h4>
                        <h5>Phoebe Bridgers</h5>
                    </figcaption>
                </figure>

                <a href="/search">
                    <article class="empty-favourite image-border">
                        <i class="ph ph-plus-circle icon add-favorite-icon"></i>
                        <span class="visually-hidden">Agregar album favorito</span>
                    </article>
                </a>
            </section>
        </section>

        <section class="edit-favourites">
            <h3 class="section-title">Canciones Favoritas</h3>
            <section>
                <figure aria-describedby="favourite-song-4">
                    <img loading="lazy" src="https://i.pinimg.com/564x/3d/65/d5/3d65d5e4af0cde2458b2e7b55869f4e6.jpg"
                        alt="Portada del álbum 'Peso Pluma || Music Session' de Bizarrap" width="120px" height="120px"
                        class="image-border" />
                    <figcaption class="visually-hidden" id="favourite-song-4">
                        <h4>Peso Pluma || Music Session</h4>
                        <h5>Bizarrap</h5>
                    </figcaption>
                </figure>

                <figure aria-describedby="favourite-song-5">
                    <img loading="lazy" src="https://i.pinimg.com/564x/aa/af/30/aaaf30cb2a66f80057d06d8e78b0bd3e.jpg"
                        alt="Portada del álbum 'Bad Habit' de Steve Lazy" width="120px" height="120px"
                        class="image-border" />
                    <figcaption class="visually-hidden" id="favourite-song-5">
                        <h4>Bad Habit</h4>
                        <h5>Steve Lazy</h5>
                    </figcaption>
                </figure>

                <a href="/search">
                    <article class="empty-favourite image-border">
                        <i class="ph ph-plus-circle icon add-favorite-icon"></i>
                        <span class="visually-hidden">Add favorite song</span>
                    </article>
                </a>
                
            </section>
        </section>
    </main>
    <footer class="main-footer">
        <?php require "fragments/footer.view.php"?>
    </footer>
</body>

</html>