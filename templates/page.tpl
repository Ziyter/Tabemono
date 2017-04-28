<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>{$TITLE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="img/logofavapple.png" />
        <link rel="shortcut icon" type="image/png" href="img/logofav.png" />
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
           <link type="text/css" rel="stylesheet" href="css/icons.css" />-->
        <link type="text/css" rel="stylesheet" href="/min/b=css&amp;f=bootstrap.min.css,style.css,icons.css" />
        {$CSS}
        {$JS_HEAD}
    </head>
    <body>
        <div class="container-full">
            {include file='menu.tpl'}
            <div id="blockA"> 
                {include file='header.tpl'}  
                <div id="blockB">
                    <div id="contentB">  
                        {include file="$TPL_NAME.tpl"}  
                    </div>
                    {include file='footer.tpl'}  
                </div>
            </div>
        </div>
    </body>
</html>