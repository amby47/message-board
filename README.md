# PHP Coding Project

## How to setup

### Pre-requisites
 - PHP
 - Laravel 8.8.0
 - MySQL Database
 - PHP Composer

### Setup
- Download the project into the folder and run the following commands within the folder:
 > `composer install`

 > `cp .env.example .env`
 
 > `php artisan key:generate`

 - Open .env file and enter your database details within the DB section. Once completed, run the following commands within the project folder
 > `php artisan migrate`

- The above command should create the database schema and tables.


### Endpoints
|  Endpoint  |  Method  |  JSON Body  | Description
|---|---|---|----|
| `/messages`  |  GET  | none |   Retrive all messages
| `/message`   | POST  | message:string, user_email:string, user_name:string   |   Post a new message | 
| `/message/{messageId}/replies`  |  GET  | none  | Retrieve all the message replies for a message   
| `/message/{messageId}/reply`  |  POST  | message:string, user_email:string, user_name:string  | Reply to a particular mesage   


## Trade-offs and Improvments

### Trade-offs
Due to time constraints, many trade-offs are made for this application. As the test was limited to 1 hour, the robustness of this application is missing. This is due to lack of unit/integration tests which make this application prone to future changes. Given more time, I would've written unit/integration tests to cover basic functionality and edge-cases for this application which would give the developers more confidence when extending or refactoring code in the future and catch any breaking changes.

Another massive trade-off I made was that I missed out the detailed validation done when the user submits to create a message or a message reply. Currently, a basic validation is being done to make sure the required fields are being submitted as part of the request but those fields are not being validated to ensure they are in a correct format (such as email address). This makes the application more prone to errors if the user submits a badly formatted email address and that email address is then used in another feature of the application down the line.

To make this application completely production ready, the above features/fixes should be implemented before the deployment of this system.
