<?php
class Daos {
    public static function getArticles() {
        $conn = Db::connect();
        $sql = "SELECT a.id,
                a.name,
                a.description,
                t.name
            FROM articles a
                JOIN articles_type t on a.type = t.id
            WHERE a.active = 1
            ORDER BY a.id;";
        $res = $conn->prepare($sql);
        $res->execute();
        $data = $res->fetchall();
        return $data;
    }
}