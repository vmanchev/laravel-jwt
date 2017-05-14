## Laravel API Boilerplate (JWT Edition)

This project is based on https://github.com/tymondesigns/jwt-auth and the tutorial found at https://www.sitepoint.com/how-to-build-an-api-only-jwt-powered-laravel-app/

I did few changes to make it works with Laravel 5.x and to use it as demo backend for my [Ionic3 seed project with JWT support](https://github.com/vmanchev/ionic3-seed-jwt)


### Users endpoints

| Method | URI | Description |
|-----|---|---|
| POST | /api/auth/signup | Create a new user account |
| POST | /api/auth/login | Authenticate user |
| POST | /api/auth/recovery | Forgot password |
| POST | /api/auth/reset | Set new password | 


### Books endpoints

| Method | URI | Description |
|-----|---|---|
| POST | /api/books | Add a new book |
| GET | /api/books | Get all books |
| GET | /api/books/:id | Get a book by id |
| PUT | /api/books/:id | Update a book |
| DELETE | /api/books/:id | Delete a book |

### ToDo
* Forgot password
* Reset password
* Update user profile