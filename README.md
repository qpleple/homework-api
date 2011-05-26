Homework API -- Getting Homework Done
=====================================

## DESCRIPTION

This API is an interface to order some homework to be done.

## USAGE

POST request on `/submitHomework` with the parameter `content` containing the exercise will issue a job id. An notification email is sent to the API host with the id of the new homework.

You can check the status (`pending` or `done`) of the job with a GET request on `/status/{id}`.

You can get the solution of the exercise when the job is done with a GET request on `/solution/{id}`.

powered by mashape.com API Framework (http://www.mashape.com/)

