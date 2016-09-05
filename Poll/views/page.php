<?php
return "
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>$pageData->title</title>
  $pageData->externalCss
  $pageData->css
  $pageData->embeddedStyle
</head>
<body>


<div class=\"container-fluid\">
        <div class=\"row\">
            $pageData->header
        </div>


        <div class=\"row\">

            <div class=\"col - sm - 12\">

            $pageData->navigation


            </div>

        </div>





    </div>



       <div class=\"container\">




        <div class=\"row\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-6\">$pageData->content
            </div>
            <div class=\"col-sm-3\"></div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">

        </div>
    </div>













</body>
</html>
";
