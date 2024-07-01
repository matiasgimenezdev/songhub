<?php

namespace Songhub\app\models;

use Songhub\core\exceptions\InvalidValueException;

class User
{
    public $fields = [
        "USER_ID" => null,
        "USERNAME" => null,
        "NAME" => null,
        "EMAIL" => null,
        "PASSWORD" => null,
        "SPOTIFY_ID" => null,
        "REFRESH_TOKEN" => null,
        "SPOTIFY_AVATAR" => null,
        "BIOGRAPHY" => "",
        "SPOTIFY_URL" => null,
        "COUNTRY_ID" => null,
    ];
    public function setUserId($userId)
    {
        $userId = trim($userId);
        $this->fields["USER_ID"] = $userId;
    }

    public function setName(string $name = "")
    {
        $name = trim($name);

        if (strlen($name) > 60) {
            throw new InvalidValueException("El nombre debe tener un maximo de 60 caracteres");
        }

        if (strlen($name) === 0) {
            throw new InvalidValueException("El nombre debe tener al menos un caracter");
        }

        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
            throw new InvalidValueException("El nombre solo puede contener letras, números y espacios en blanco");
        }

        $this->fields["NAME"] = $name;
    }

    public function setUsername(string $username)
    {
        $username = trim($username);

        if (strlen($username) > 30) {
            throw new InvalidValueException("El nombre de usuario debe tener un maximo de 30 caracteres");
        }

        if (strlen($username) === 0) {
            throw new InvalidValueException("El nombre de usuario debe tener al menos un caracter");
        }

        if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            throw new InvalidValueException("El nombre de usuario solo puede contener letras y números");
        }

        $this->fields["USERNAME"] = $username;
    }
    public function setEmail(string $email, string $emailConfirmation = null)
    {

        $email = strtolower(trim($email));
        if (strlen($email) > 128) {
            throw new InvalidValueException("El email debe tener un maximo de 128 caracteres");
        }

        if (strlen($email) === 0) {
            throw new InvalidValueException("El email no es valido");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidValueException("El email no es valido");
        }

        if (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)) {
            throw new InvalidValueException("El email no es valido");
        }

        // El email de confirmacion solo se pasa al momento de registrarse. En el resto de usos del metodo setEmail, no se tiene en cuenta este segundo parametro.
        if ($emailConfirmation !== null) {
            $emailConfirmation = strtolower(trim($emailConfirmation));
            if ($email !== $emailConfirmation) {
                throw new InvalidValueException("Los emails no coinciden");
            }
        }

        $this->fields["EMAIL"] = $email;
    }

    public function setPassword($password, $passwordConfirmation = "")
    {
        if (strlen($password) < 8) {
            throw new InvalidValueException("La contraseña debe tener un minimo de 8 caracteres");
        }

        if (strlen($password) > 255) {
            throw new InvalidValueException("La contraseña debe tener un maximo de 255 caracteres");
        }

        if (!preg_match("#[0-9]+#", $password)) {
            // Verifica que la contraseña tenga al menos un numero
            throw new InvalidValueException("La contraseña debe tener al menos un numero");
        }

        if (!preg_match("#[a-zA-Z]+#", $password)) {
            // Verifica que el password tenga al menos una letra
            throw new InvalidValueException("La contraseña debe tener al menos una letra");
        }

        // El password de confirmacion solo se pasa al momento de registrarse. En el resto de usos del metodo setPassword, no se tiene en cuenta este segundo parametro.
        if (strlen($passwordConfirmation) > 0) {
            if ($password !== $passwordConfirmation) {
                throw new InvalidValueException("Las contraseñas no coinciden");
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $this->fields["PASSWORD"] = $hashedPassword;
        } else {
            $this->fields["PASSWORD"] = $password;
        }
    }

    public function setSpotifyId(string $spotifyId)
    {
        $spotify_id = trim($spotifyId);
        $this->fields["SPOTIFY_ID"] = $spotifyId;
    }

    public function setSpotifyUrl(string $spotifyUrl)
    {
        $spotify_url = trim($spotifyUrl);
        $this->fields["SPOTIFY_URL"] = $spotifyUrl;
    }

    public function setRefreshToken(string $refreshToken)
    {
        $refresh_token = trim($refreshToken);
        $this->fields["REFRESH_TOKEN"] = $refreshToken;
    }

    public function setSpotifyAvatar(string $spotifyAvatar)
    {
        if (!filter_var($spotifyAvatar, FILTER_VALIDATE_URL)) {
            throw new InvalidValueException("La URL del avatar de spotify no es valida");
        }

        $spotify_avatar = trim($spotifyAvatar);
        $this->fields["SPOTIFY_AVATAR"] = $spotifyAvatar;
    }
    public function setBiography(string $biography = "")
    {

        if (strlen($biography) > 160) {
            throw new InvalidValueException("La biografia debe tener un maximo de 160 caracteres");
        }

        $biography = trim($biography);
        $this->fields["BIOGRAPHY"] = $biography;
    }

    public function checkPassword($password)
    {
        if (!password_verify($password, $this->fields["PASSWORD"])) {
            return false;
        }

        return true;
    }

    public function setCountryId(string $countryId)
    {
        $countryId = trim($countryId);

        if($countryId == 0) {
            $countryId = null;
        }

        $this->fields["COUNTRY_ID"] = $countryId;
    }

    public function set(array $values)
    {

        foreach (array_keys($this->fields) as $field) {
            $field = trim($field);
            if (!isset($values[$field])) {
                continue;
            }

            $property = explode("_", $field);
            if (count($property) > 1) {
                $method = "set" . ucfirst(strtolower($property[0])) . ucfirst(strtolower($property[1]));
            } else {
                $method = "set" . ucfirst(strtolower($property[0]));
            }

            $this->$method($values[$field]);
        }
    }
}
