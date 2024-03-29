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
    <link rel="stylesheet" href="../styles/profile.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="../scripts/index.js" type="module"></script>
    <title>Perfil | SongHub</title>
</head>

<body>
    <header class="main-header" id="main-header">
        <?php require "fragments/header.view.php"?>
    </header>
    <main>
        <header>
            <section class="user">
                <img src="https://i.pinimg.com/236x/f4/e4/ff/f4e4ff0e8518813c6d5dde10a4d5164d.jpg"
                    alt="Imagen de perfil" height="60px" width="60px" class="image-border" />
                <p class="username-container">
                    <span class="name">Nombre de usuario</span>
                    <span class="username">@username</span>
                </p>
            </section>

            <section class="user-stats">
                <ul>
                    <li><span>1K</span>POSTS</li>
                    <li><span>2M</span>SEGUIDORES</li>
                    <li><span>500</span>SEGUIDOS</li>
                </ul>
            </section>

            <section class="user-actions">
                <p class="profile-button-container">
                    <!-- El botón de seguir se renderiza si el perfil no es el del usuario logueado-->
                    <button class="action-button submit-outline-button">
                        Siguiendo
                    </button>
                    <!-- El enlace de editar perfil se renderiza si el perfil  es el del usuario logueado -->

                    <!-- <a
						href="profile-edit.html"
						class="submit-outline-button"
					>
						Editar perfil
					</a> -->
                    <button class="submit-button spotify-profile-button">
                        <img src="../assets/icons/spotify.svg" alt="Logo de Spotify" />
                        <span> Perfil </span>
                    </button>
                </p>
            </section>
            <p class="biography">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis parturient.
            </p>
        </header>

        <section class="section">
            <h2 class="section-title">Tus álbumes favoritos</h2>
            <article class="add-modal-access" aria-describedby="favourite-song-1">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/89/28/e3/8928e372651fc60256360ba5e21a7d2f.jpg"
                            alt="Portada del álbum 'Pulse' de Pink Floyd" width="150px" height="150px"
                            class="image-border" />
                    </section>
                    <figcaption id="favourite-song-1">
                        <h3 class="song-title">Pulse</h3>
                        <h4 class="artist-title">Pink Floyd</h4>
                    </figcaption>
                </figure>
            </article>

            <article class="add-modal-access" aria-describedby="favourite-song-2">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/99/41/82/99418264794012ddd044c761919fbb44.jpg"
                            alt="Portada del álbum 'Punisher' de Phoebe Bridgers" width="150px" height="150px"
                            class="image-border" />
                    </section>
                    <figcaption id="favourite-song-2">
                        <h3 class="song-title">Punisher</h3>
                        <h4 class="artist-title">Phoebe Bridgers</h4>
                    </figcaption>
                </figure>
            </article>

            <article class="add-modal-access" aria-describedby="favourite-song-3">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/94/76/b8/9476b8e8cb9368ceba6f90bec0c1b980.jpg"
                            alt="Portada del álbum 'Random Acces Memories' de Daft Punk" width="150px" height="150px"
                            class="image-border" />
                    </section>
                    <figcaption id="favourite-song-3">
                        <h3 class="song-title">Random Acces Memories</h3>
                        <h4 class="artist-title">Daft Punk</h4>
                    </figcaption>
                </figure>
            </article>
        </section>

        <section class="section">
            <h2 class="section-title">Tus canciones favoritas</h2>

            <article class="add-modal-access" aria-describedby="favourite-song-4">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/3d/65/d5/3d65d5e4af0cde2458b2e7b55869f4e6.jpg"
                            alt="Portada del álbum 'Peso Pluma || Music Session' de Bizarrap" width="150px"
                            height="150px" class="image-border" />
                    </section>
                    <figcaption id="favourite-song-4">
                        <h3 class="song-title">
                            Peso Pluma || Music Session
                        </h3>
                        <h4 class="artist-title">Bizarrap</h4>
                    </figcaption>
                </figure>
            </article>

            <article class="add-modal-access" aria-describedby="favourite-song-5">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/aa/af/30/aaaf30cb2a66f80057d06d8e78b0bd3e.jpg"
                            alt="Portada del álbum 'Bad Habit' de Steve Lazy" width="150px" height="150px"
                            class="image-border" />
                    </section>
                    <figcaption id="favourite-song-5">
                        <h3 class="song-title">Bad Habit</h3>
                        <h4 class="artist-title">Steve Lazy</h4>
                    </figcaption>
                </figure>
            </article>

            <article class="add-modal-access" aria-describedby="favourite-song-6">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy"
                            src="https://i.pinimg.com/564x/28/83/60/288360836d7d5532e52012bf06981410.jpg"
                            alt="Portada del álbum 'Comfortably Numb' de Pink Floyd" width="150px" height="150px"
                            class="image-border" />
                    </section>
                    <figcaption id="favourite-song-6">
                        <h3 class="song-title">Comfortably Numb</h3>
                        <h4 class="artist-title">Pink Floyd</h4>
                    </figcaption>
                </figure>
            </article>
        </section>
        <section class="recent-activity">
            <h2 class="section-title">Actividad reciente</h2>
            <article tabindex="0" class="post add-modal-access" id="post_1" aria-posinset="1" aria-setsize="3"
                aria-labelledby="post-1-song-title post-1-artist-title" aria-describedby="post-content-1">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy" class="image-border" width="100px" height="100px"
                            src="https://i.pinimg.com/564x/2f/18/9e/2f189e3be4ef04ab12a0a125efe4e67e.jpg"
                            alt="Portada del álbum 'Dark Side of The Moon' Pink Floyd" />
                    </section>
                    <section class="user-info">
                        <img loading="lazy" class="user-img" height="25px" width="25px"
                            src="https://i.pinimg.com/236x/94/7f/14/947f14841d26f5dc3541366a987b32f5.jpg"
                            alt="Imagen de perfil de 'Usuario 1'" />
                        <p class="user-name">
                            <a href="profile.html">Usuario 1</a>
                            <span>$username1</span>
                        </p>
                        <p class="post-time">hace 8 horas</p>
                    </section>
                    <figcaption>
                        <h3 class="song-title" id="post-1-song-title">
                            <a href="/content">The Dark Side of the Moon</a>
                        </h3>
                        <h4 class="artist-title" id="post-1-artist-title">
                            Pink Floyd
                        </h4>
                        <span class="tag">Increible</span>
                        <span class="tag">Rock</span>
                        <span class="tag">Internacional</span>
                        <p class="stars">★★★★★</p>
                    </figcaption>
                </figure>
                <a href="post.html">
                    <section class="post-content" id="post-content-1">
                        <p>
                            It has survived not only five centuries, but
                            also the leap into electronic typesetting,
                            remaining essentially unchanged. It was
                            popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing
                            software like Aldus PageMaker including versions
                            of Lorem Ipsum. t has survived not only five
                            centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It
                            was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages,
                            and more recently with deskt. It has survived
                            not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with
                            the release of Letraset sheets containing Lorem
                            Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker
                            including versions of Lorem Ipsum. t has
                            survived not only five centuries, but also the
                            leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the
                            1960s with the release of Letraset sheets
                            containing Lorem Ipsum passages, and more
                            recently with deskt.
                        </p>
                    </section>
                </a>
                <footer>
                    <section class="reaction-container comment-container">
                        <button>
                            <i class="ph ph-chats-circle icon comment-icon"></i>
                            <span class="visually-hidden">Comentar post</span>
                        </button>
                        <p>20</p>
                    </section>
                    <section class="reaction-container like-container">
                        <button class="heart-button">
                            <i class="ph ph-heart icon heart-icon"></i>
                            <span class="visually-hidden">Dar favorito al post</span>
                        </button>
                        <p>1008</p>
                    </section>
                </footer>
            </article>
            <article tabindex="0" class="post add-modal-access" id="post_2" aria-posinset="2" aria-setsize="3"
                aria-labelledby="post-2-song-title post-2-artist-title" aria-describedby="post-content-2">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy" height="100px" width="100px" class="image-border"
                            src="https://i.pinimg.com/236x/73/01/9f/73019f71f5bc1124787d11044d21d12d.jpg"
                            alt="Portada del álbum 'Preacher`s Daughter' de Ethel Cain" />
                    </section>
                    <section class="user-info">
                        <img loading="lazy" class="user-img" height="25px" width="25px"
                            src="https://i.pinimg.com/236x/2d/92/d0/2d92d085613a400e12fbadacc019e0e2.jpg"
                            alt="Imagen de perfil de 'Usuario 2'" />
                        <p class="user-name">
                            <a href="profile.html">Usuario 2</a>
                            <span>$username2</span>
                        </p>
                        <p class="post-time">hace 8 horas</p>
                    </section>
                    <figcaption>
                        <h3 class="song-title" id="post-2-song-title">
                            <a href="/content"> Preacher`s Daughter </a>
                        </h3>
                        <h4 class="artist-title" id="post-2-artist-title">
                            Ethel Cain
                        </h4>
                        <span class="tag">Chill</span>
                        <span class="tag">Internacional</span>
                        <p class="stars">★★★★½</p>
                    </figcaption>
                </figure>
                <a href="post.html">
                    <section class="post-content" id="post-content-2">
                        <p>
                            It has survived not only five centuries, but
                            also the leap into electronic typesetting,
                            remaining essentially unchanged. It was
                            popularised in the 1960s.
                        </p>
                    </section>
                </a>
                <footer>
                    <section class="reaction-container comment-container">
                        <button>
                            <i class="ph ph-chats-circle icon comment-icon"></i>
                            <span class="visually-hidden">Comentar post</span>
                        </button>
                        <p>20</p>
                    </section>
                    <section class="reaction-container like-container">
                        <button class="heart-button">
                            <i class="ph ph-heart icon heart-icon"></i>
                            <span class="visually-hidden">Dar favorito al post</span>
                        </button>
                        <p>1008</p>
                    </section>
                </footer>
            </article>
            <article class="post add-modal-access" id="post_3" tabindex="0" aria-posinset="3" aria-setsize="3"
                aria-labelledby="post-3-song-title post-3-artist-title" aria-describedby="post-content-3">
                <figure>
                    <section class="article-img-container">
                        <img loading="lazy" class="image-border" height="100px" width="100px"
                            src="https://i.pinimg.com/236x/bf/00/49/bf0049614afb7ec4f5f64bb20834d728.jpg"
                            alt="Portada del álbum 'Certified Lover Boy' de Drake" />
                    </section>
                    <section class="user-info">
                        <img loading="lazy" class="user-img" height="25px" width="25px"
                            src="https://i.pinimg.com/236x/94/7f/14/947f14841d26f5dc3541366a987b32f5.jpg"
                            alt="Imagen de perfil de 'Usuario 1'" />
                        <p class="user-name">
                            <a href="profile.html">Usuario 1</a>
                            <span>$username1</span>
                        </p>
                        <p class="post-time">hace 8 horas</p>
                    </section>
                    <figcaption>
                        <h3 class="song-title" id="post-3-song-title">
                            <a href="/content"> Certified Lover Boy </a>
                        </h3>
                        <h4 class="artist-title" id="post-3-artist-title">
                            Drake
                        </h4>
                        <span class="tag">Amazing</span>
                        <span class="tag">Trap</span>
                        <span class="tag">Drake</span>
                        <p class="stars">★★★½</p>
                    </figcaption>
                </figure>
                <a href="post.html">
                    <section class="post-content" id="post-content-3">
                        <p>
                            It has survived not only five centuries, but
                            also the leap into electronic typesetting,
                            remaining essentially unchanged. It was
                            popularised in the 1960s.
                        </p>
                    </section>
                </a>
                <footer>
                    <section class="reaction-container comment-container">
                        <button>
                            <i class="ph ph-chats-circle icon comment-icon"></i>
                            <span class="visually-hidden">Comentar post</span>
                        </button>
                        <p>20</p>
                    </section>
                    <section class="reaction-container like-container">
                        <button class="heart-button">
                            <i class="ph ph-heart icon heart-icon"></i>
                            <span class="visually-hidden">Dar favorito al post</span>
                        </button>
                        <p>1008</p>
                    </section>
                </footer>
            </article>
        </section>
    </main>

    <footer class="main-footer">
        <?php require "fragments/footer.view.php"?>
    </footer>
</body>

</html>