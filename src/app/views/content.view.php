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
    <link rel="stylesheet" href="../styles/content.css" />
    <script src="../scripts/index.js" type="module"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Canción | SongHub</title>
</head>

<body>
    <header class="main-header" id="main-header">
        <?php require "fragments/header.view.php"?>
    </header>

    <main>
        <section class="song-section">
            <figure>
                <img src="https://i.pinimg.com/564x/2f/18/9e/2f189e3be4ef04ab12a0a125efe4e67e.jpg"
                    alt="Portada del álbum 'The Dark Side of the Moon' de Pink Floyd" width="225px" height="225px"
                    class="image-border" />
                <figcaption>
                    <p>Canción</p>
                    <h2>Comfortably Numb</h2>
                    <h3>The Dark Side Of The Moon</h3>
                    <p class="artist-info">
                        <img src="https://i.pinimg.com/236x/20/cc/b2/20ccb24df9750b08d764e574fcec5f5d.jpg"
                            alt="Imagen de perfil de 'Pink Floyd'" height="50px" width="50px" />
                        <span>Pink Floyd · 1973</span>
                    </p>
                </figcaption>
            </figure>
            <section class="song-stats">
                <h2>Valoración</h2>
                <p class="posts-amount">10k posts</p>
                <p class="qualification">
                    <span class="stars">★★★★★</span>
                    <span class="number">4.2</span>
                </p>
            </section>
            <section class="song-actions">
                <button class="submit-button post-form-opener">Crear post</button>
                <button class="favourite-button">
                    <i class="ph ph-heart icon heart-icon"></i>
                    <span class="visually-hidden">
                        Agregar canción/álbum como favorita
                    </span>
                </button>
                <button class="share-button" data-song-id="1" data-post-content="The Dark Side of the Moon">
                    <i class="ph ph-share-network icon share-icon"></i>
                    <span class="visually-hidden">
                        Compartir información de la canción/álbum
                    </span>
                </button>
            </section>
        </section>

        <section class="most-popular-posts">
            <h2 class="section-title">Publicaciones más populares</h2>
            <section>
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
        </section>
        <section class="most-recent-posts">
            <h2 class="section-title">Publicaciones más recientes</h2>
            <section>
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
                                <a href="song.html">The Dark Side of the Moon</a>
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
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt. It
                                has survived not only five centuries, but
                                also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop
                                publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. t has
                                survived not only five centuries, but also
                                the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                                popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum
                                passages, and more recently with deskt.
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
        </section>
    </main>

    <footer class="main-footer">
        <?php require "fragments/footer.view.php"?>
    </footer>
</body>

</html>