# UpSkillsIT

UpSkillsIT est une plateforme PHP/MySQL native dédiée aux étudiants IT, jeunes diplômés, professionnels et administrateurs. Elle propose un site public, une authentification par sessions, des profils, opportunités, ressources, événements avec inscription, tableau de bord apprenant et administration.

## Technologies

- PHP 8.x natif en MVC
- MySQL 8.x avec PDO et requêtes préparées
- HTML5, CSS3, JavaScript vanilla, Fetch API
- Apache avec `.htaccess`
- Sessions PHP, `password_hash()`, `password_verify()`, CSRF, RBAC

## Installation XAMPP

1. Copier le dossier `TP` dans `htdocs/upskillsit` ou pointer un VirtualHost vers `TP/public`.
2. Démarrer Apache et MySQL.
3. Créer/importer la base :
   - importer `database/schema.sql`
   - importer `database/seed.sql`
4. Vérifier la configuration dans `config/config.php`.
5. Ouvrir `http://localhost/upskillsit/TP/public` ou le VirtualHost configuré.

## Comptes de démonstration

- Admin : `admin@example.com` / `AdminDemo!2026`
- Étudiant : `student@example.com` / `StudentDemo!2026`
- Professionnel : `professional@example.com` / `ProDemo!2026`

Ces mots de passe sont destinés au développement local uniquement.

## Structure

- `public/` : front controller, assets, uploads, SEO
- `app/Core/` : routeur, contrôleur, modèle, session, auth, CSRF, validation
- `app/Controllers/` : contrôleurs HTTP
- `app/Models/` : accès données et logique métier
- `app/Views/` : vues et layouts
- `database/` : schéma et données de démo
- `docs/` : architecture, base, sécurité, tests

## Fonctionnalités

- Site public : accueil, services, profils cibles, opportunités, ressources, actualités, événements, FAQ, contact, pages légales
- Inscription, connexion, déconnexion, mot de passe oublié, modification et suppression du compte
- Dashboard utilisateur avec progression du profil
- Profil étudiant avec CV/photo et compétences détaillées
- Profil professionnel
- Opportunités avec recherche et filtres
- Ressources avec catégories
- Événements avec inscription AJAX, transactions et liste d'attente
- Admin : statistiques, utilisateurs, opportunités, ressources, événements

## Tests manuels rapides

1. Créer un compte étudiant.
2. Se connecter, compléter le profil, envoyer une photo valide et un PDF.
3. Filtrer opportunités et ressources.
4. S'inscrire à un événement depuis sa fiche.
5. Réessayer l'inscription au même événement pour vérifier l'unicité.
6. Se connecter comme admin et gérer utilisateurs/contenus.
7. Tester une route admin sans session pour vérifier la redirection/refus.

## Évolution

Le MVP est extensible vers candidatures avancées, modération fine, notifications enrichies, matching ou intégrations externes, sans changer la base MVC native.
