# PROrgsAirtables

* There's a Dockerfile to deploy the code to any Cloud Service provider. Tested to work with Amazon ECS, fails in Heroku.
* Uses NginX PHP FPM Docker image to run https://github.com/richarvey/nginx-php-fpm
* Uses Composer to get libraries http://getcomposer.org
* Uses Airtable PHP to read from Airtables https://github.com/sleiman/airtable-php

## Required Enviromental Vars:

* AIRTABLE_API_KEY=YOUR API KEY
* AIRTABLE_BASE_ID=YOUR BASE ID
                
You just need to build the image, deploy it to a server or run it locally. For it to run correctly you'll need to figure out your API KEY and API BASE ID and put it as the AIRTABLE_API_KEY and AIRTABLE_BASE_ID env vars in the container.
