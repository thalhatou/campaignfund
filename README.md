## Install CampaignFund
Before installing CampaignFund you will need to make sure you have the minimum server requirements and then you'll want to clone the repo to your machine.

### Clone the Repo
You can clone the repo onto your local machine with the following command:

```
git clone https://github.com/thalhatou/campaignfund.git

 ```

Change project_name with the name of your project. Optionally, you may want to create a new Github Repo for your project.

Ok, now we can easily install Wave with these 4 simple steps:

### 1. Create a New Database
During the installation we need to use a MySQL database. You will need to create a new database and save the credentials for the next step.

### 2. Copy the .env.example file
We need to specify our Environment variables for our application. You will see a file named .env.example, you will need to duplicate that file and rename it to .env.

Then, open up the .env file and update your DB_DATABASE, DB_USERNAME, and DB_PASSWORD in the appropriate fields.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=campaigndb
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Add Composer Dependencies
Next, we will need to install all our composer dependencies by running the following command:

```
composer install
```
### 4. Run Migrations 
We need to migrate our database structure into our database, which we can do by running:

```
php artisan migrate
```

🎉 And that's it! You will now be able to visit your URL and see your CampaignFund application up and running.

For security measures you may want to regenerate your application key, be sure to run the following command below to secure your site before going live.
```
php artisan key:generate
```
Build With  ❤️ in by Thalhatou Yahya
