<!DOCTYPE html>
<html lang="en-US">

<head> 
    <?php
        $orgpage = $_GET['org'];
    ?>
    <title> <?php echo $orgpage;  ?> </title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <div id="header" class="Header"></div>
    <div id="nav" class="navigation"></div>
    
    <script>
            $("#header").load("header.html");
            $("#nav").load("navbar.html");
    </script>

    <br>
    <meta charset = "utf-8" />
</head>


<body>
    <!-- page information load -->
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
    
    <center>
    <!-- organization header info -->
    <div id="content">   
        <div class="boxed">
            <h1>
                <center>
                    <font size="20">
                        <u><?php echo $organization->name; ?></u><br>
                    </font>
                </center>
            </h1>
            <h2>
                <div align="left">
                    <?php
                    if(strcmp($organization->icon , 'null') != 0) {
                        echo "<img src='$organization->icon'  style='width:304px;height:228px;'>"; 
                    }
                    ?>
                </div> 
                 <div align="right">
                    Advised by <br>
                    <?php echo $organization->advisor; ?>
                </div> 
            </h2>
        </div>
    </div>
    <br>
    
    <!-- organization description -->
    <div id="content">   
        <div class="boxed">
            <h1>
                <center> <u>About</u> </center>
            </h1>
            <h2>
                <center>
                <?php echo $organization->description; ?><br>
                </center>
            </h2>
        </div>
    </div>
    <br>    
    
    
    <!-- specific information -->
     <div id="content">   
        <div class="boxed">
            <h1>
                <center> <u>Organization Information</u> </center>
            </h1>
            <h2>
                
                <u> President </u> <br> 
                <?php echo $organization->president; ?><br>
                <br> <u> Officers </u> <br>
                <?php echo $organization->officers; ?><br>
                <br> <u> Members </u> <br>
                <?php echo $organization->members; ?><br>
            </h2>
        </div>
    </div>
 
    
   
        
    </center>
    
</body>
    
<footer>
    <br>
        <div id="footer" class="Footer"></div>
    <script>
            
            $("#footer").load("footer.html");
              
        </script>
</footer>
    
</html>