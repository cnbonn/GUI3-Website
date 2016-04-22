<!DOCTYPE html>
<html lang="en-US">

<head> 
    <title> today.php </title>
    <meta charset = "utf-8" />
    <script src="organization-js.js"></script>

</head>


<body>
    
    
    

    
    
    
    
 
<?php


//link to new page
$link = 'organization-page.php';
    
if (file_exists('organization-list.xml')) {
    $xml = simplexml_load_file('organization-list.xml');
 
    //print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
    
//$xml=simplexml_load_file('organizaton-list.xml') or die("Error: Cannot create object");
foreach($xml->children() as $organization ) {
        //echo "<a href='$link' name='$organization->name'>$organization->name</a> <br>";
       // $_POST[]
        //echo "<a href=\"javascript:formSubmit($organization->name);\">$organization->name</a>\n <br>";
    //echo "<a href=\"javascript:formSubmit('$organization->name);\">$organization->name</a>";
        
         //echo $organizaton->name . ", ";
    
        //echo "<form action='$link' method=POST>";
        //echo "<input type='hidden' name='name' value='$organization->name' class='inline'>";
        
        //echo "<a type='submit' href='$link' name='$organization->name'>$organization->name</a>";
        //echo "<input type='text' size='10' name='name' value='$organization->name'>";
        //echo "<input type=submit name=submit value=''>";
        //echo "</form>";
    
        //echo "<FORM METHOD='get' NAME='myForm' id='$$organization->name'>";
        //echo "<INPUT TYPE='HIDDEN' NAME='bob' VALUE='value1'>";
        //echo "<INPUT TYPE='HIDDEN' NAME='NAME2' VALUE='value2'>";
        //echo "</FORM>";
    
                                        //document.forms[\"myForm\"].submit();return false;
        echo "<a href='$link?var=$organization->name'>$organization->name</a> <br>";
        
    
       
    
          
    }
?>
    
    
</body>
    
</html>