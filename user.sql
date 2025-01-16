-- Créer un bdd avec le même nom que sur o2switch
CREATE DATABASE sc4judi6669_bijouterie_ocean CHARSET utf8 collate utf8_general_ci;
-- Créer le même utilisateur que sur o2switch avec le même mot de passe
CREATE USER sc4judi6669_oceane@localhost IDENTIFIED BY '04TTL6%6@lRz';
-- Donner à l'utiisateur tous les droits sur la bdd
GRANT ALL PRIVILEGES ON sc4judi6669_bijouterie_ocean.* TO sc4judi6669_oceane@localhost;