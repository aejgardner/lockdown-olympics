# API for 'Lockdown Olympics' project

## General

All requests should:

- Use the basename `https://olympics.developme.space/api`
- Be sent using JSON and with the `Accept: application/json` header
- No authentication currently required

## Requests

#### `GET /categories`

Will return a list of all categories, with the following fields included:

- `id`: integer
- `name`: string
- `img_pathway`: string - image pathway for use on frontend

#### `GET /competitors`

Will return a list of all the competitors, with the following fields included:

- `id`: integer
- `name`: string

#### `GET /<sportId>/competitors`

Will return a list of competitors as for Get /competitors, but will only return competitors that are competing in the sport with the given ID. 

#### Standard response for sports

When requests for sports are sent, the standard response will be as follows:

- `id`: integer
- `name`: string
- `description`: string
- `start_time`: string - start time and day
- `arena`: string
- `category_id`: integer
- `img_pathway`: string - image pathway for use on frontend

#### Standard response for competitors

When the below requests for competitors are sent, the standard response will be an object as follows:

- `id`: integer
- `name`: string
- `bio`: string
- `dob`: string - date format yyyy-mm-dd
- `sport`: string - determined by one to many relationship between sport and competitor
- `img_pathway`: string - image pathway for use on frontend

#### `GET /categories/<categoryId>/sports`

Will return a standard sports response containing the details of the sports with the given category id.          

#### `GET /competitors/<competitorId>`

Will return a standard competitors response containing the details of the competitor with the given competitor id. 

#### `POST /competitors`

Creates a new competitor. Request should contain:

- `name`: string with up to 50 characters
- `bio`: string
- `dob`: date formatted as a string yyyy-mm-dd
- `sport_id`: integer relating to the id of the relevant sport
- `img_pathway`: string with up to 200 characters

All fields required. Standard competitors response returned (for the competitor just posted).

#### `PATCH /categories`

Updates a category. Request should contain:

- `id`: integer
- `name`: string

All fields required. Same response as for the GET /categories (for the category just updated).

#### `PATCH /sports`

Updates a sport. Request should contain:

- `id`: integer
- `name`: string
- `description`: string
- `start_time`: string - start time and day
- `arena`: string
- `category_id`: integer
- `img_pathway`: string - image pathway for use on frontend

All fields required. Standard sports response returned (for the sport just updated).

#### `PATCH /competitors`

Updates a competitor. Request should contain:

- `name`: string with up to 50 characters
- `bio`: string
- `dob`: date formatted as a string yyyy-mm-dd
- `sport_id`: integer relating to the id of the relevant sport
- `img_pathway`: string with up to 200 characters

All fields required. Standard competitors response returned (for the competitor just updated).

## Installation

This API was created using Laravel. Follow these steps to install the project:
- Clone the repo and cd into the folder created
- vendor/bin/homestead make
- cp .env.example .env
- Change db name and password in .env
- vagrant up
- vagrant ssh
- cd code
- art key:generate
- art migrate


