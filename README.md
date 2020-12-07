# LARAVEL_VUE_JS_FRONTEND

## Installation
1. Git clone the project
2. Run "composer install" to install all its dependencies
3. Copy .env.example to a new file called .env and set DB credentials(Create a new DB)
4. Run "php artisan key:generate" in the console
5. Run "php artisan passport:install" in the console
6. vue --version
7. cd vue-starter
8. npm run serve
9. You can then access the routes (below) in your browser

## Routes
1. http://127.0.0.1:8080/en/
2. http://127.0.0.1:8080/en/index
3. http://127.0.0.1:8080/en/about
4. http://127.0.0.1:8080/en/contact-us
5. http://127.0.0.1:8080/en/covid-19
6. http://127.0.0.1:8080/en/terms
7. http://127.0.0.1:8080/en/cookie-policy
8. http://127.0.0.1:8080/en/cat-facts
9. http://127.0.0.1:8080/en/beers

## Locales / Languages
1. EN (English)
2. DE (German)
3. ES (Spanish)
4. FR (French)

# NOTES
1. Vue frontend makes use of Axios Promise to retrieve data for the frontend.
2. The CatFacts API allows CORS requests with origin "*" so we make direct requests from javascript with Axios.
3. The Beers API denies CORS requests however it accepts requests from backend systems, so we have a proxy controller action to make the request and returns the response to javascript.
4. Multiple languages (EN, ES, DE, FR).

### Author
Donal Lynch donal.lynch.msc@gmail.com