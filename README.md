# PROrgsAirtables

* Uses NginX PHP FPM Docker image to run https://github.com/richarvey/nginx-php-fpm
* Uses Composer to get libraries http://getcomposer.org
* Uses Airtable PHP to read from Airtables https://github.com/sleiman/airtable-php

## Required Enviromental Vars:

* WEBROOT=/var/www/html/public
* RUN_SCRIPTS=1
* AIRTABLE_API_KEY=YOUR API KEY
* AIRTABLE_BASE_ID=YOUR BASE ID
                
You just need to copy this code to /var/www/html, figure out your API KEY and API BASE ID and put it as the AIRTABLE_API_KEY and AIRTABLE_BASE_ID env vars and it will run.
