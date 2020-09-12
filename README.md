## About WLAR - Web Linguistics Audio Recorder

WLAR is a web application designed to facilitate linguistics research projects. It takes the user through a wizard that explains the project and conducts a survey to collect data from the user. The user is then brought to a final page where they read and can record text. Their responses and recording are saved onto the server.

WLAR is developed using the Laravel framework on PHP.

### WLAR Contributors

- Dimitri Prica
- Marton Soskuthy
- Michael Ducharme

### Installation

Needs more detail, but:

Fetch the repository and run "composer install" in the root to install dependencies.
Edit config/app.php and set wlar_languages list.
Create empty file database/database.sqlite
Then run "php artisan migrate" to create the SQLite tables for administration interface.
Copy .env.example to .env and customize as necessary.
First user to register for administration interface is given admin rights, they can authorise further users from there.
