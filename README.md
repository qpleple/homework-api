Homework API -- Getting Homework Done
=====================================

## DESCRIPTION

This API is an interface to order some homework to be done.

Limitations :
 * high school level only
 * languages english or french
 * 1000 characters per exercise

## USAGE

POST request on `http://homeworkapi.com/submitHomework` with the parameter `content` containing the exercise will issue a job id.

You can check the status (`pending` or `done`) of the job with a GET request on `http://homeworkapi.com/status/{id}`.

You can get the solution of the exercise when the job is done with a GET request on `http://homeworkapi.com/solution/{id}`.

## LIBRAIRIES

Coming soon : PHP, Python, Ruby, Java, Objective-C

powered by mashape.com API Framework (http://www.mashape.com/)

