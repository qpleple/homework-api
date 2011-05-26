<?php
require_once("config.php"); // must be the first included
require_once("mashape/mashape.php");
require_once("src/sql.php");
require_once("src/model.php");
require_once("src/notification.php");
require_once("src/class.phpgmailer.php");

// The path of the XML configuration file required by Mashape:
define("CONFIGURATION_FILEPATH", "./api.xml");

// This is the server key for your component
define("SERVER_KEY", $server_key);

class ComponentAPI extends MashapeRestAPI
{
    public function __construct() {
        parent::__construct(dirname(__FILE__));
    }

    public function submitHomework($content, $email = "") {
        $id = rand();

        try {
            Model::storeHomework($id, $content, $email);
        } catch (Exception $e) {
            parent::addError(500, "Database problem", 500);
        }
        
        homeworkSubmittedNotification($id);
        
        return $id;
    }

    public function status($id) {
        $status = Model::getHomeworkStatus($id);
        if ($status == null) {
            parent::addError(404, "Homework not found.", 404);
        }
        return $status;
    }

    public function solution($id) {
        $status = Model::getHomeworkStatus($id);
        if ($status == null) {
            parent::addError(404, "Homework not found.", 404);
        }
        if ($status == "pending") {
            parent::addError(412, "Homework not found.", 412);
        }
        return Model::getHomeworkSolution($id);
    }

}

// Init the library
MashapeHandler::handleApi(new ComponentAPI(), SERVER_KEY);
