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
    $page = array();
    
    if (file_exists('organization-list.xml')) {
        $xml = simplexml_load_file('organization-list.xml');
     //print_r($xml);
    } else {
        exit('Failed to open test.xml.');
    }
    
    //put xml into array
    foreach($xml->children() as $org) {
        $page[] =  $org;
    }
    
    //sort list
    ksort($page, SORT_STRING );
    
    foreach($page as $organization ) {

        echo "<a href='$link?org=$organization->name' >$organization->name</a> <br>";
        
    }
?>
    
    
</body>
    
</html>