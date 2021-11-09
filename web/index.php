<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <input type="text" name="search" placeholder="search for members" onkeyup="searchq()">
    <input type="submit" value="Submit">
</form>


<div id="output">

</div>

<?php //print("$output"); ?>

<script src="jquery-3.4.1.min.js"></script>

<script>

function searchq(){
    var searchTxt = $("input[name='search']").val();

    $.post("search.php", {searchVal: searchTxt}, function(output){
        $("#output").html(output);
    });
}
</script>

</body>
</html>