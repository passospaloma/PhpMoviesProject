<?php
require_once('config.php');

//Listing Functions 

function listUser($login, $password)
{
    $link = getConnection();

    $query = "select * from tb_user where login = '{$login}' and password = md5('{$password}')";

    $result = mysqli_query($link, $query); 

    mysqli_close($link);

    return mysqli_fetch_assoc($result);
}


function listMovies()
{
    $link = getConnection();

    $query = "select * from tb_movies";

    $rs = mysqli_query($link, $query);

    $movies = array();

    while ($row = mysqli_fetch_assoc($rs)) {
        array_push($movies, $row);
    }

    return $movies;
}

function listMoviesById($id)
{
    $link = getConnection();

    $query = "select * from tb_movies where id_movie = {$id}";

    $rs = mysqli_query($link, $query);

    $movies = array();

    while ($row = mysqli_fetch_assoc($rs)) {
        array_push($movies, $row);
    }

    return $movies;
}

function listCommentByIdMovie($id)
{
    $link = getConnection();

    $query = "select * from tb_comment where movie_id = {$id}";

    $rs = mysqli_query($link, $query);

    $comments = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        array_push($comments, $row);
    }

    return $comments;
}

function listCommentByLogin($login)
{
    $link = getConnection();

    $query = "select * from tb_comment where user_login = '{$login}'";

    $rs = mysqli_query($link, $query);

    $comments = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        array_push($comments, $row);
    }

    return $comments;
}

function listWannaWatch($idUser)
{
    $link = getConnection();

    $query = "select movie_id from tb_wanna_watch where user_id = {$idUser}";

    $result = mysqli_query($link, $query);

    $wannaWatch = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($wannaWatch, $row);
    }

    return $wannaWatch;
}


function listWatched($idUser)
{
    $link = getConnection();

    $query = "select movie_id from tb_watched where user_id = {$idUser}";

    $result = mysqli_query($link, $query);

    $watched = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($watched, $row);
    }

    return $watched;
}

function listRecentMovies()
{
    $link = getConnection();

    $query = "SELECT * FROM tb_movies order by id_movie desc LIMIT 5;";

    $result = mysqli_query($link, $query);

    $movies = array();

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($movies, $row);
    }

    return $movies;
}

// Add Functions 

function addUser($name, $email, $login, $password) 
{
    $link = getConnection();

    $query = "insert into tb_user (name, email, login, password) values ('{$name}', '{$email}', '{$login}', md5('{$password}'));";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}


function addCommentById($comment, $idMovie, $loginUser)
{
    $link = getConnection();

    $query = "insert into tb_comment (comment, user_login, movie_id) VALUES ('{$comment}', '{$loginUser}', {$idMovie});";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}


function addWannaWatch($idMovie, $idUser)
{
    $link = getConnection();
    
    $query = "insert into tb_wanna_watch (movie_id, user_id) values ({$idMovie}, {$idUser});";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}

function deleteWannaWatch($idMovie)
{
    $link = getConnection();

    $query = "DELETE FROM tb_wanna_watch WHERE movie_id = {$idMovie}";
    
    if(!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}

function addWatched($idMovie, $idUser)
{
    $link = getConnection();
    
    $query = "insert into tb_watched (movie_id, user_id) values ({$idMovie}, {$idUser});";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}

function deleteWatched($idMovie)
{
    $link = getConnection();

    $query = "DELETE FROM tb_watched WHERE movie_id = {$idMovie}";
    
    if(!mysqli_query($link, $query)) {
        throw new \Exception("Error", 1);
        return false;
    }
    return true;
}

//Seach Function

function search($movie) 
{
    $link = getConnection();

    $query = "select id_movie from tb_movies where name = '{$movie}'";

    $result = mysqli_query($link, $query);

    $search = array();

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($search, $row);
    }

    return $search;
}

