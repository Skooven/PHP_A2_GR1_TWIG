<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

$articles = getArticles($link);

$isConnected = isConnected();

$username = getSession()['username'];

require __DIR__.'/_footer.php';

echo $twig->render('articles.html.twig', [
    'articles' => $articles,
    'isConnected' => $isConnected,
    'username' => $username,
]);