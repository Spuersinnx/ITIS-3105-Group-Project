<?php


?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Rent a Book - Search</title>
    <link type="text/css" rel="stylesheet" href="css/mainstyle.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        /* $(document).ready(function () {
         $('#search-button').click(function (e) {

         e.preventDefault();

         var bookName = $("[name='bookName']").val();
         var ISBN = $("[name='ISBN']").val();


         if (bookName == "" || bookName.length < 2 || bookName == " " || ISBN == " " || ISBN == "" || !(ISBN.length >= 10)) {
         alert('There were errors encountered with your form, please review the fields');
         return false;
         }


         }

         }); */
    </script>

</head>

<body>

<!--Main Search Form Content Image-->
<div id="search-Main">


    <!-- May move to external db_search.php -->
    <form id="search-form" action="../db/db_search.php" method="post">

        <label><b>Search:</b>
            <input type="text" name="userSearch"></label>
        <button type="submit" id="search-button" class="searchButton">Search</button>
    </form>

    <form method="post" action="browseBooks.php">
        <button type="submit" id="search-button" class="browseButton">Browse Available</button>
    </form>



</div>


</body>
</html>

