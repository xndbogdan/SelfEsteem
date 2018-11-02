Bucharest Polytechnic University Faculty of Engineering in Foreign Languages

## <center>Databases Project</center><br/>

# <center>HUBS SELF ESTEEM PLATFORM<center><br/>

Coordinator Asist. Drd. Ing. Iuliana Marin<br/>
Student Moșteanu Bogdan-Mihai<br/>



**Description**<br/>

The purpose of this project is to help people who have self esteem issues talk to other people who face similar problems in a friendly community.
 
 Users who have an account can post new topics or reply to existing ones while visitors are only able to view what is posted.
 In it's final version, this platform will allow you to take personality quizzes and upload images/videos directly. 
 The final version of the dashboard will show you metrics regarding your posting habits and tips based on your quiz results.
 
 To create such a project I am using mysql as the database, with a  PHP backend and bootstrap as the frontend framework.

Used packages:
- [Laravel Voyager (Admin panel)](https://laravelvoyager.com)
- [Chatter (For the forums/discussions)](https://github.com/thedevdojo/chatter)

**Database Design and Implementation**<br/>
![enter image description here](https://lh3.googleusercontent.com/ex915P4_liKIjwEhtkpyEnFFSU8yjnHw63CsYWiArZleOoDF1D3UKkGj_eMGAH8mHjjPekpWrxro "ERD")

With this platform you can define custom user roles. 
The default ones are user and admin, but you can easily add roles like "Moderator".

## Usage <br/>

**Requirements**<br/>
You will need to make sure your server meets the following requirements:

-   PHP >= 7.1.3
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Mbstring PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension
-   Ctype PHP Extension
-   JSON PHP Extension

**Installation** <br/>

1. Download the project
	- git clone https://github.com/xndbogdan/SelfEsteem
2. Install dependencies
	- composer install
	- npm install
3. Seed the tables
	 - php artisan db:seed
4. Run it
	- php artisan serve
	- npm run watch

> Written with [StackEdit](https://stackedit.io/).
