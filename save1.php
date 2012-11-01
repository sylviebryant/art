<html>
<body>

<?php
function save()
{
if (move_uploaded_file("images/mashup1.jpg", "gallery/saved1.jpg")) {
}
header("Location: index.php"); 
echo "Saved!";
}
?>

</body>
</html>


