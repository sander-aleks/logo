# TAK-21 Test

## Prerequisites

- PHP `^8.1`
- Node `^18.x`
- Composer `^2.x`
- PHP extensions `BCMath, Ctype, cURL, DOM, Fileinfo, JSON, Mbstring, OpenSSL, PCRE, PDO, Tokenizer, XML`

### Refrences
- [Server Requirements](https://laravel.com/docs/10.x/deployment#server-requirements)
- [How to install all required PHP extensions for Laravel?](https://stackoverflow.com/questions/40815984/how-to-install-all-required-php-extensions-for-laravel)
- [Composer](https://getcomposer.org/)
- [How To Install Node.js](https://www.digitalocean.com/community/tutorial-collections/how-to-install-node-js)


## Getting started
1. Clone the repository
2. Run `composer install` & `npm i`
3. Create `.env` file based on the `.env example`
4. Run `php artisan migrate` & `php artisan db:seed`
5. Create a new branch with your first and last name e.g `ralf-heinsoo`

On success you should be able to log in with the following credentials:
- E-mail: `test@user.ee`
- Password: `test@user.ee`

## Workflow

Complete the assignments one at a time and in the numeric order.

Make a commit & push changes to your branch after every assignment.

# Assignment
## Context
The end result should be a digital library where user can add books and categorize them by genre.

## 1. Models, migrations & controllers
The digtal library should have books categorized by genres.

To achive this, do the following:

1. **Create 2 models:**
- `Book`
- `Genre`

2. **Create migrations for the models**
- `Genres` table should have the follwing fields:

    `id`, `name`, `created_at`,`updated_at`

- `Books` table should have the follwing fields:

    `id`,`genre_id`,`title`,`description`,`image_path`,`rating`,    `created_at`,`updated_at`

3. **Create `resource` controllers for both of these models.**

### Resources
- [Generating Model Classes](https://laravel.com/docs/10.x/eloquent#generating-model-classes)
- [Migrations:Columns](https://laravel.com/docs/10.x/migrations#main-content)
- [Resource Controllers](https://laravel.com/docs/10.x/controllers#resource-controllers)

## 2. Routes and navigation
_Authenticated user should be able to see a list of books & a list of genres by clicking on the respective navigation link in the dashboard view._

1. **Implement routes for all the resource controller actions.**

**!!** Make sure to name the routes.

2. **Add `Books` & `Genres` navigation elements to the authenticated users navbar.**

Find the correct place to add the navigation links and add utilize the `route()` helper method with the correct route name to get the `href` value.




### Resources
- [Actions Handled By Resource Controller](https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller)
- [Named Routes](https://laravel.com/docs/10.x/routing#named-routes)
- [Route(): helper method](https://github.com/tighten/ziggy)


