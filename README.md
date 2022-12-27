<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Guest Book API
First time experimenting with PHP and Laravel. Any feedback is greatly appreciated :)

## Goal
- Create an API that stores guest book entries containing the name and message of users. 
- API should be able to support CRUD operation.

## Tasks
1) Create and seed database (EST: 15 min, Recorded: 15 min)
    - Define model, create factory, and migrate database
2) Create V1 Routes (EST: 10 min, Recorded: 10 min)
	- Defined unique route for V1 of API and organized file structure
3) Refactor JSON data (EST: 10 min, Recorded: 10 min)
	- Convert database data to JSON format 
	- GET Request for all entries
4) Create entry with POST request (EST: 10 min, Recorded: 20 min)
	- Create Request class, define rules, perform test cases
5) Update entries with PUT and PATCH request (EST: 10 min, Recorded: 20 min)
	- Create Request class, define rules, perform test cases
6) Delete entries (EST: 10 min, Recorded: 5 min)
	- Delete entry from id and perform test cases
7) Create filtered GET request (EST: 20 min, Recorded: 30 min) 
	- Get entries with matching name or message based on query
    - ### `http://localhost:8000/api/v1/guestbook?name[eq]=Prof.%20Lincoln%20Schinner`
	    -  Will return all entries with name 'Prof. Lincoln Schinner'
8) Refactor code and check completion of test cases/requirements (EST: 20 min, Recorded: 35 min)

## What I learned
- Laravel and PHP application structure
- How to create a REST API using Laravel
- Use cases for factories and resources
