# Migration Guide

To make the app user friendly on a mixed VPS / Dedicated Server (mixed as in it can support php, nodejs, AND python) which helps reduce costs, reverse proxy is used to pass a friendly url's request to an internal port.

Database: Adjust the DB_NAME, DB_USER, DB_PW, DB_PORT at the .env file for authenticating and accessing your MySQL database. The DB_PORT is usually the same port across all your MySQL apps on this same server.

Ports: Assign a unique port for your Express app. This needs to be unique from all your other Express apps on this same server.

Base URL - Here's how you replace the baseURL for this app:
- grep for `/app/goals-social-network/` and replace with your new baseURL. Or you may use sed