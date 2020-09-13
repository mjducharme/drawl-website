[![Build Status](https://travis-ci.org/mjducharme/drawl-website.svg?branch=master)](https://travis-ci.org/mjducharme/drawl-website)

## About WLAR - Web Linguistics Audio Recorder

WLAR is a web application designed to facilitate linguistics research projects. It takes the user through a wizard that explains the project and conducts a survey to collect data from the user. The user is then brought to a final page where they read and can record text. Their responses and recording are saved onto the server.

WLAR is developed using the Laravel framework on PHP.

### WLAR Contributors

- Dimitri Prica
- Marton Soskuthy
- Michael Ducharme

### Installation

Needs more detail, but:

1. Fetch the repository and run "composer install" in the root to install dependencies.
2. Edit config/app.php and set wlar_languages list.
3. Create empty file database/database.sqlite
4. Then run "php artisan migrate" to create the SQLite tables for administration interface.
5. Copy .env.example to .env and customize as necessary.
6. Run php artisan key:generate to generate key.

**WARNING** - First user to register for administration interface (/admin URL) is given admin rights, they can authorise further users from there. **AFTER DEPLOYING, REGISTER IMMEDIATELY** to prevent someone else from doing so.
