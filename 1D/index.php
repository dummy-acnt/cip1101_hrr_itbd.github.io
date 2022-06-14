<!DOCTYPE>
<html>
    <head>
        <title>Basic Concepts</title>
        <meta charset="utf-8">
        <link rel ="stylesheet" href="HONTIVEROS_BasicConcept.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Student Name</th>
                <td>
                    <?php
                    //Declaring and Concatenating variables
                    $first_name = "Rachel Ritz ";
                    $middle_initial = "M. ";
                    $last_name = "Hontiveros";
                    $full_name = $first_name.$middle_initial.$last_name;
                    echo $full_name;
                    ?>
                </td>
            </tr>
            <tr>
                <th>Subject/Section</th>
                <td>
                    <?php
                    /*defining constants for the
                    Section and Subject code
                    */
                    define("SUBJECT_CODE", "CIP 1102");
                    define("SECTION", "1D");
                    echo SUBJECT_CODE. "-". SECTION;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><h2>Things I have learned so far...</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
                        //creating an array for things i learned
                        $learn = array("Creating Variable with the dollar sign $", 
                        "Defining Constant with the 'define()' function",
                        "Adding Line Comments using //", 
                        "Block Comments by using /* */",
                        "Concatenating using the '.' symbol");
                        echo "<ul> 
                        <li>
                            $learn[0];
                        </li>
                        <li>
                            $learn[1];
                        </li>
                        <li>
                            $learn[2];
                        </li>
                        <li>
                            $learn[3];
                        </li>
                        <li>
                            $learn[4];
                        </li>
                        </ul>"
                    ?>
                </td>
            </tr>
        </table>
        <br>
    </body>
</html>