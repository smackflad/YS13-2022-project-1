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
        <form method="POST" action="http://localhost:8001/modules/course_tools/course_tools.php?submit=yes&action=1" enctype="multipart/form-data">
            <p>Αν έχετε  δημιουργήσει κάποια σελίδα για το μάθημα σας σε μορφή HTML (π.χ. "my_page.htm"), τότε μπορείτε να χρησιμοποιήσετε την παρακάτω φόρμα για να κατασκευάσετε έναν σύνδεσμο στο μενού του μαθήματος (αριστερά). Η σελίδα σας με αυτό τον τρόπο  δημοσιεύεται (ανεβαίνει) στην πλατφόρμα και εμφανίζεται μαζί με τα υπόλοιπα εργαλεία του μαθήματος. <br/>Για μεγαλύτερη ευελιξία, ο σύνδεσμος αυτός μπορεί να γίνεται ενεργός/ανενεργός όπως τα υπόλοιπα εργαλεία.</p>
            <p>Αν θέλετε να δημιουργήσετε συνδέσμους για αρχεία που <u>δεν</u> είναι σε μορφή HTML (π.χ. PDF, Word, Power Point, Video, κ.λπ.) τότε χρησιμοποιήστε το υποσύστημα <a href='../document/document.php'>Έγγραφα</a>.</p>
            <br />
            <table width="99%" align='left' class='FormData'>
                <tbody>
                <tr>
                    <th class='left' width='220'>&nbsp;</th>
                    <td><b>Στοιχεία σελίδας</b></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th class='left'>Όνομα αρχείου της σελίδας</th>
                    <td><input type="file" name="file" size="35" accept="text/html" class='auth_input'></td>
                    <td><p align='right'><small>Σημ: Το μέγιστο επιτρεπτό μέγεθος του αρχείου της σελίδας είναι 20MB.</small></p></td>
                </tr>
                <tr>
                    <th class='left'>Τίτλος σελίδας</th>
                    <td><input type="Text" name="link_name" size="40" class='FormData_InputText'></td>
                    <td><p align='right'><small>Το όνομα που θα εμφανίζεται στο αριστερό μενού.</small></p></td>
                </tr>
                <tr>
                    <th class='left'>&nbsp;</th>
                    <input type='hidden' name='_token' value='58a5ae89eb9129d54a7664b7ec406be6'/>
                    <td><input type="Submit" name="submit" value="Προσθήκη"></td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
            <br></form>
    </body>
</html>

<?php
print_r(sprintf('%08x', time())."\n");
//print_r(time());
?>