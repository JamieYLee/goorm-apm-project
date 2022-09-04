<?php
    header('Content-type: text/css; charset:UTF-8');
?>

* {
    box-sizing: border-box;
    background-color: #d9d9d9;
}

body {
    font-family: Helvetica, Arial, sans-serif;
}

header {
    padding: 10px;
    color: white;
    font-size: 30px;
    text-shadow: 2px 2px #666;
}

nav {
    float: left;
    width: 30%;
    padding: 20px;
    color: white;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav a {
    text-decoration: none;
    color: #4d4d4d;
}

article {
    float: left;
    width: 70%;
    padding: 20px;
}

.main h1 {
    font-size: 25px;
}

form input[type="text"] {
    box-sizing: border-box;
    outline: none;
    display: block;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #333;
    background: transparent;
    margin-bottom: 10px;
    font: 10px Arial, Helvetica, sans-serif;
    height: 45px;
}

form input[type="submit"] {
    position: relative;
    display: block;
    padding: 8px 18px;
    color: #fff;
    background: #79a3d2;
    font-size: 18px;
    text-align: normal;
    font-style: normal;
    border: 1px solid #6696cc;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
    cursor: pointer;
}

footer {
    padding: 10px;
}

footer ul {
    list-style-type: none;
}

footer li {
    float: right;
    margin: 5px;
}

footer img {
    border-radius: 50%;
}