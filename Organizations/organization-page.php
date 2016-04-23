<!DOCTYPE html>
<html lang="en-US">

<head> 
    <title> <?php echo $_GET['org'];  ?> </title>
    <meta charset = "utf-8" />
</head>


<body>
    
    
    <?php
        //load correct page data
        $orgpage = $_GET['org'];

        if (file_exists('organization-list.xml')) {
            $xml = simplexml_load_file('organization-list.xml');
            //print_r($xml);
        } else {
            exit('Failed to open test.xml.');
        }
    
        foreach($xml->children() as $organization) {
            if ( strcmp( $organization->name , $orgpage) == 0){
                break;
            }
        }
    ?>
    
    name <?php echo $organization->name; ?><br>
    icon <?php echo $organization->icon; ?><br>
    advisor <?php echo $organization->advisor; ?><br>
    president <?php echo $organization->president; ?><br>
    officers <?php echo $organization->officers; ?><br>
    members <?php echo $organization->members; ?><br>
    description <?php echo $organization->description; ?><br>
    
    Welcome <?php echo $_GET['org']; ?><br>
    <?php
        echo "hello $organization->name";
    ?>

    
</body>
    
</html>