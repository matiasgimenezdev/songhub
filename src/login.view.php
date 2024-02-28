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
    <link rel="stylesheet" href="../styles/login.css" />
    <script src="../scripts/index.js" type="module"></script>
    <title>Iniciar sesión | SongHub</title>
</head>

<body>
    <main>
        <form action="/login" method="POST">
            <header>
                <h1>Bienvenido</h1>
                <h2>Por favor, ingresa tus credenciales</h2>
            </header>
            <fieldset>
                <legend>Informacion de inicio de sesión</legend>
                <p class="input-container">
                    <input name="email" id="email" type="email" autocomplete="off" placeholder=" " required
                        class="input" aria-labelledby="email-label" />
                    <label for="email" id="email-label">Correo electrónico</label>
                </p>
                <p class="input-container">
                    <input id="password" name="password" type="password" required class="input"
                        aria-labelledby="password-label" />
                    <label for="password" id="password-label">Contraseña</label>
                </p>
                <a href="#">Recuperar contraseña</a>
            </fieldset>
            <p class="button-container">
                <input type="submit" class="submit-button" value="Iniciar sesión" />
                <button class="google-button">
                    <span>
                        <img src="../assets/icons/google.svg" alt="Icono de Google " />
                    </span>
                    Acceder con Google
                </button>
            </p>
            <p class="link-container">
                No tenes cuenta?
                <a href="register.html">Registrate aquí</a>
            </p>
        </form>
    </main>
</body>

</html>