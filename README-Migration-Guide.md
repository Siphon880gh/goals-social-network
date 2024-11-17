# Migration Guide

To make the app user friendly on a mixed VPS / Dedicated Server (mixed as in it can support php, nodejs, AND python) which helps reduce costs, reverse proxy is used to pass a friendly url's request to an internal port.

Here's how you replace the baseURL for this app:
- grep for `/app/goals-social-network/` and replace with your new baseURL. Or you may use sed