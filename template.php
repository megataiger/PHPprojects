<html>
<head>
<title> Test page </title>
<style>
header
{
margin: auto;
width: 40%;
border: 1px solid black;
text-align: center;
}

div
{
margin-left: 30%;
margin-right: 30%;
}

nav
{
width: 40%;
border: 1px solid black;
float: left;
}
article
{
height: 50%;
width: 59%;
border: 1px solid black;
float: left;
}

{
text-align:right;
}

.Body
{

}

</style>
</head>
<body>

<header>
<h1> CMS </h1>
</header>

<div>

<nav>
<?php 
    include 'model.php';
    print $menu;
?>
</nav>

<article>
<?php 
    include 'model.php';
    print $body;
?>
</article>
</div>
<div>
</div>

</body>
</html>
