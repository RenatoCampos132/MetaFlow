<?php
/**Função que alterna as páginas*/
function pages(){
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
    // Verifica se existe a url
    $page = (!$page) ? "../views/home.php" : "../views/{$page}.php";
    if(!file_exists($page)){
        throw new \Exception("<p class='alert alert-danger text-center my-5'>A página não existe!</p>");
    }
    return $page;
}