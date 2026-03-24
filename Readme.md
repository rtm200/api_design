# Pokémon API Explorer

A modern, lightweight REST API and interactive explorer built with **Vanilla PHP** and **MySQL**. This project demonstrates clean API design, efficient database interaction with PDO, and a premium-inspired frontend for exploring Pokémon datasets.

## Features

### API Features
- **Dynamic Endpoints**: Search Pokémon by name or filter by legendary status.
- **CORS Enabled**: Ready for cross-origin requests from any frontend origin.
- **JSON Standard**: All responses are served in flat, ready-to-use JSON format.
- **Preflight Support**: Full handling of `OPTIONS` requests for modern browser compatibility.

---

## Tech Stack

- **Backend**: PHP 8.3 (Pure/Vanilla)
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Server**: WampServer / Apache

---


## API Endpoints

### Pokemon Resource
```
| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/pokemon/` | Fetch all Pokémon records |
| `GET` | `/api/pokemon/?name=pk_name` | Search by name |
| `GET` | `/api/pokemon/?legendary=true`| Filter by Legendary status |

```


## Quick Start

1. **Download and run wamp**
download and run the wampserver application
move the api_design folder to wamp/www
go to browser and visit http://127.0.0.1:8080/api_design/

2. **Setup Database**
open browser and visit http://localhost:8080/phpmyadmin/
login with username:root password:
note: password is empty by default
then go to import and import the api_design.sql file or you can copy data from api_design.sql and go to sql tab in phpmyadmin paste and click on go
   ```sql
   -- Import api_design.sql to create tables and indexes
   ```

3. **Access Dashboard**

   the app is made with wamp so depending on how you will run it the 8080 port might change
   ```
   http://127.0.0.1:8080/api_design/
   ```


## Dataset

Source: [Kaggle Pokemon](https://www.kaggle.com/datasets/mlomuscio/pokemon)
- i had to convert it from csv to sql using [this website](https://www.convertcsv.com/csv-to-sql.htm)

## Use Cases

- **API Design**: lightweight RESTful API practice
- **UI for interaction**: simple index.html page for fetching api datas
