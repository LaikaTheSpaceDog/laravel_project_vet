# Pet Database
This app was built during the Laravel module (weeks 7 and 8) of the Develop Me Coding Fellowship. The UI was built using Blade templating with basic bootstrap styling.

## Installation
To get set up with the project on your local machine:

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

## API Routes
1. GET: http://homestead.test/api/owners
2. POST: http://homestead.test/api/owners
3. GET: http://homestead.test/api/owners/{id}
4. PUT: http://homestead.test/api/owners/{id}
5. DELETE: http://homestead.test/api/owners/{id}
6. GET: http://homestead.test/api/owners/{id}/animals
7. POST: http://homestead.test/api/owners/{id}/animals
   
1. GET: http://homestead.test/api/animals
2. POST: http://homestead.test/api/animals
3. GET: http://homestead.test/api/animals/{id}
4. PUT: http://homestead.test/api/animals/{id}
5. DELETE: http://homestead.test/api/animals/{id}

1. GET: http://homestead.test/api/users