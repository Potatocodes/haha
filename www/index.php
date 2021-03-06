<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />

        <script type="text/javascript" charset="utf-8" src="phonegap-0.9.2.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2"></script>

        <script type="text/javascript" src="js/processing/processing.min.js"></script>  
        <script type="text/javascript" src="js/iscroll.js"></script>

        <title>GROCER'S BUDDY</title>
    </head>
    <body>
        <a class="gb-menu-items" href="add.php"><div>ADD ITEM</div></a>
        <a class="gb-menu-items" href="available.php"><div>SHOP</div></a>
        <a class="gb-menu-items" href="list.php"><div>LIST CATEGORY</div></a>
        <button id="cleardata" onclick="myFunction()">CLEAR DATA</button>

    </div>
 <script type="text/javascript">
function myFunction() {
    location.reload();
}
</script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();

            var test = document.getElementById("cleardata");

            function whatClicked(evt) {
                if(evt.target.id=="cleardata"){
                    window.localStorage.clear();
                }
            }

            test.addEventListener("click", whatClicked, false);
        </script>

        
    </body>
</html>
