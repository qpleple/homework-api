<?php
class Model {
    public function storeHomework($id, $content, $email = "") {
        $req = SQL::prepare("INSERT INTO works (id, content, status, email) VALUES (?, ?, ?, ?)");
        $req->execute(array($id, $content, "pending", $email));
    }
    
    public function getHomeworkStatus($id) {
        $req = SQL::prepare("SELECT status FROM works WHERE id = ?");
        $req->execute(array($id));
        
        $res = $req->fetch();
        if (!$res) {
            return null;
        }
        
        return $res['status'];
    }
    
    public function getHomeworkSolution($id) {
        $req = SQL::prepare("SELECT status, solution FROM works WHERE id = ?");
        $req->execute(array($id));
        
        $res = $req->fetch();
        if ($res && $res['status'] == "done") {
            return $res['solution'];
        }
        
        return null;
    }
}



