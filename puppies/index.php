<html>
    <body>
        <h1><?= "Puppies!" ?></h1>
        <img src="https://i.ytimg.com/vi/DhpYAyVsFXQ/hqdefault.jpg"></img>
        <form method="post" action="http://localhost:8001/modules/profile/profile.php?submit=yes">

            <input class='FormData_InputText' type="text" size="40" name="prenom_form" value="$prenom_form"><br />
            <input class='FormData_InputText' type="text" size="40" name="nom_form" value="user1l"><br />
            <input class='FormData_InputText' type="text" size="40" name="username_form" value="drunkadmin"><br />
            <input class='FormData_InputText' type="text" size="40" name="email_form" value="webmaster@localhost.uoa.gr"><br />
            <!-- <input class='FormData_InputText' type="text" size="40" name="am_form" value=""><br />
            <input class='FormData_InputText' type="text" size="40" name="persoStatus" value="yes"><br />
            <input class='FormData_InputText' type="text" size="40" name="userLanguage" value="el"><br /> -->
            <input type="Submit" name="submit" value="$langModify">

        </form>
    </body>
</html>
