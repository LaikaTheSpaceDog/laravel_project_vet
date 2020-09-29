# Pet Database
<img src="/pet.png" alt="Screen shot of Pet Database homepage">

This app was built during the Laravel module (weeks 7 and 8) of the Develop Me Coding Fellowship. The UI was built using Blade templating with basic bootstrap styling. This app also includes a RESTful API (API routes are all listed below), as well as user authentication (a login form in the UI and API Auth using Passport).

## Installation
To get set up with the project on your local machine you will need [Vagrant](https://www.vagrantup.com/) downloaded on your machine. Once you've done this, follow these instructions:

1.  Run `git clone git@github.com:LaikaTheSpaceDog/laravel_project_vet.git <desired sub-directory>`. The project files will be cloned to your local repo.
2.  Go to your project directory and run `npm install`. This will install the dependencies in the local node_modules folder.
3.  Go to the project folder: `cd laravel-project-vet`.
4.  Run `composer install` to download the required dependencies locally.
5.  Run `vendor/bin/homestead make` to copy relevant Homestead files into project directory.
6.  Change the second line of Homestead.yaml so it just uses 512mb: `memory: 512`
7.  Run `cp .env.example .env` to create a .env file
8.  In your newly created .env file, make the following changes:
   ````
   DB_DATABASE=homestead
   DB_USERNAME=root
   DB_PASSWORD=secret
   ````
9. Run `vagrant up` to get Vagrant up and running.
10. Once Vagrant has finished loading, in your browser go to the below to view the UI:
    1.  On Mac: http://homestead.test
    2.  On Windows: http://localhost:8000
11. Run `vagrant ssh` to SSH into the running Vagrant machine.
12. Run `cd code` to enter the code directory.
13. Run `artisan migrate` to run all migrations.
14. _optional_: Run `artisan db:seed` to run the Owners seeder - this will populate the Owner table with 50 random entries created using the Faker php library.

## Authorisation
This app includes some authorisation so in order to access all features you should create a user. The easiest way to do this is to use `artisan tinker`:
````
$user=newUser();
$user->name="Your Name"
$user->role="Your Role"
$user->email="your@email.horse"
$user->password=Hash::make("password")
$user->save()
````
You should now be able to log in to the app using these details. This will give you permission to create/edit owners and animals via the UI. 

<h3>API Auth</h3>
This app uses Passport to deal with tokens to authenticate API users. The Laravel Passport package should have been installed when you ran `composer install` and the Passport database migrations should have been run when you ran `artisan migrate`. Next:
1. Run `artisan passport:install` and make a note of the password grant Client ID and Client Secret that are returned after installation.
2. If you haven't already, create a user using the instructions above. Make sure to give the user the role of 'vet' so they have access to all API routes.
3. Make a `POST` request (for example, using Postman) to `http://homestead.test/oauth/token` with the body:
   ````
   {
       "grant_type":"password",
       "client_id":"<your_client_id>",
       "client_secret":"<your_client_secret>",
       "username":"an.author@gmail.com",
       "password":"password"
    }
   ````
4. Make a note of the token that you recieve in return. You can now use this as the Bearer Token when making requests to the API.


## API Routes
### Owners
1. GET: http://homestead.test/api/owners
2. POST: http://homestead.test/api/owners
3. GET: http://homestead.test/api/owners/{id}
4. PUT: http://homestead.test/api/owners/{id}
5. DELETE: http://homestead.test/api/owners/{id}
6. GET: http://homestead.test/api/owners/{id}/animals (This API route includes auth, user 'role' must be 'vet')
7. POST: http://homestead.test/api/owners/{id}/animals (This API route includes auth, user 'role' must be 'vet')

### Animals  
1. GET: http://homestead.test/api/animals
2. POST: http://homestead.test/api/animals (This API route includes auth, user 'role' must be 'vet')
3. GET: http://homestead.test/api/animals/{id}
4. PUT: http://homestead.test/api/animals/{id}
5. DELETE: http://homestead.test/api/animals/{id} 

### Users
1. GET: http://homestead.test/api/users