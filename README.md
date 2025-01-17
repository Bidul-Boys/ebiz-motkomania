# Motkomania - E-commerce Project

## Overview
This is an e-commerce project built with PrestaShop for the Electronic Business course. The project recreates the https://motkomania.pl/ online store specializing in yarns and accessories for knitting and crochet.

## Technologies Used
- PrestaShop 1.7 - Open source e-commerce platform
- MySQL 5.7 - Database management system
- Docker & Docker Compose - Containerization and orchestration
- BeautifulSoup4 - Python library for data scraping
- Selenium - Python library for browser automation

## Key Features
- Scraped data from the original store (over 1000 products form 4 categories with 2 subcategories each, their pictures, descriptions and prices)
- SSL certificate and key for secure connections
- Automatic import of scraped data to the store
- Multiple payment methods integration
- Multiple delivery methods integration
- Product variations
- Product promotions
- Recreation of the original store design
- Automated tests for the store


## Installation & Setup
1. Clone the repository
2. Delete the prestashop directory
3. Create .env file
4. Run docker compose up
5. Create cert directory and place there your ssl certificate and key files
6. Run enable_ssh.sh
7. Run db_load.sh


## Team
- [@Michał-Sugalski](https://github.com/mikkelangelas)
- [@Lucjan-Gackowski](https://github.com/varrios)
- [@Jakub-Falk](https://github.com/kvba1337)
- [@Stanisław-Grochowski](https://github.com/Grochman)  