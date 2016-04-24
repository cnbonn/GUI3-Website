<!DOCTYPE html>
<html lang="en-US">

<head> 

    <meta charset = "utf-8" />
    <script src="organization-js.js"></script>

</head>


<body>

<?php


    //link to new page
    $link = 'organization-page.php';
    $page = array();
    $gopage= array("A","B","C","D","E","F","G","H","I","J","K","J","M","N","O","P","Q","R","S","T","U","V","W","Z","Y","Z");
    
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
    function xsort(&$nodes, $child_name, $order = SORT_ASC)
    {
        $sort_proxy = array();

        foreach ($nodes as $k => $node)
        {
            $sort_proxy[$k] = (string) $node->$child_name;
        }

        array_multisort($sort_proxy, $order, $nodes);
    }

    xsort($page, 'name', SORT_ASC);
    
    echo "<center>";
    
    
    //print list of possable letters
    foreach($gopage as $letter) {
        echo "| <a href='#$letter'>$letter</a>";
    }
    
    echo "|<br>";
    
    foreach($gopage as $letter){
        echo "<a name='$letter''>";
            
        foreach($page as $organization ) {
            //echo " $letter , $organization->name ";
            if( strncmp( strtolower($letter), strtolower($organization->name), 1) == 0){
                echo "<a href='$link?org=$organization->name' >$organization->name</a> <br>";
            }
            

        }
    }
    
    echo "</center>";
    
?>
    
    
</body>
    
</html>