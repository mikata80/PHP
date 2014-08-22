<head>
    <style>
        a{
            text-decoration: none;
        }
        table,td{
            border: 1px solid;
            width: 250px;
        }
        thead{
            text-align: center;
            font-weight: bold;
        }

    </style>
</head>
<body>
   <?php

            function validateText($data,$flag){
                $res = "";
                $lenData = strlen($data);
//                echo("data = ".$data."<br>");
//                echo("flag = ".$flag."<br>");
                if($data !="" && $flag =='name') {
                    $lenData = strlen($data);
                    if (!preg_match("/^[a-zA-Z ]*$/",$data)) {
                        $res = "Only letters";
                    }elseif($lenData>0 &&($lenData<2 || $lenData >20)){
                        $res = "Between 2 and 20 symbols";
                    }
                     return $res;
                }
                if($data !="" && $flag =='email') {
                    if (!filter_var($data, FILTER_VALIDATE_EMAIL)){
                        $res =  "Invalid email";
                    }
                  return $res;
                }

                if($data !="" && $flag =='phone') {
                    if (!preg_match("/^([0-9\/\+ \-]*)$/",$data)){
                        $res =   "Numbers and +, -, '_'";
                    }
                    return $res;
                }

               if($data !="" && $flag =='comp') {
                   //echo($lenData);
                   if (!preg_match("/^[a-zA-Z0-9 ]*$/",$data)){
                     $res =   "Letters and Numbers";
                   }elseif($lenData>0 &&($lenData<2 || $lenData >20)){
                     $res = "Between 2 and 20 symbols";
                   }
                   return $res;
               }

                return $res;
            }

            //CONSTRAINTS  ==============================================================

            //Constraint01 *****************************************************************
            $arrERR = array();
            if(isset($_GET['pinfo'])){
                $arrPinfo =$_GET['pinfo'];
               foreach ($arrPinfo as $key => $value) {
                   //echo("key = ".$key."<br>");
                   if($key == 'First_Name' || $key == 'Last_Name'){
                       array_push($arrERR,validateText($value,'name'));
                   } elseif($key == 'email'){
                       array_push($arrERR,validateText($value,'email'));
                   }elseif($key == 'phone'){
                       array_push($arrERR,validateText($value,'phone'));
                   }
                  // echo("<===================================>"."<br>");
               }
            }
            // language
            if(isset($_GET['lang'])){
                $lang = $_GET['lang'];
                //echo($lang[0]);
                if(strlen($lang[0]) != 0){
                $langErr = validateText($lang,'name');
                }
            }
           if(isset($_GET['lwp'])){
               $arrLWinfo =$_GET['lwp'];

               foreach ($arrLWinfo as $key => $value) {

                   if($key == 'Company_Name'){
//                       echo("key = ".$key."<br>");
//                       echo("value = ".$value."<br>");
                       array_push($arrERR,validateText($value,'comp'));
                   }
                   // echo("<===================================>"."<br>");
               }
           }
        //var_dump($arrERR);

    ?>
    <!--    Constraint 02 **********************************************************************-->
    <script language="JavaScript">
        var nextId = 1;
        function addPLang(){
            nextId++;
            var newDiv= document.createElement('div');
            newDiv.setAttribute('id','inputBox'+ nextId);
            newDiv.innerHTML =
            "<input type=\"text\" name=\"plang[]\">"+
            "<select name=\"level[]\">"+
                "<option value=\"Begginer\">Begginer</option>"+
                "<option value=\"Intermediate\">Intermediate</option>"+
                "<option value=\"Expert\">Expert</option>"+
            "</select>";
            document.getElementById('plang').appendChild(newDiv);
        }
        function removePLang(){
            //nextId;
            var inputBox = document.getElementById('inputBox'+ nextId);
            document.getElementById('plang').removeChild(inputBox);
            nextId--;
        }
        var Id = 1;
        function addLang(){
            Id++;
            var newDiv= document.createElement('div');
            newDiv.setAttribute('id','inputLBox'+ Id);
            newDiv.innerHTML =
            "<input type=\"text\" name=\"lang[]\"><span style=\"color: red\"> <?php echo $langErr;?></span>"+
            "<select name=\"spec\">"+
            "<option value=\"#\">--Comprehension--</option>"+
            "<option value=\"Low\">Low</option>"+
            "<option value=\"High\">High</option>"+
            "<option value=\"Fluently\">Fluently</option>"+
            "</select>"+
            "<select name=\"read\">"+
            "<option value=\"#\">--Reading--</option>"+
            "<option value=\"Low\">Low</option>"+
            "<option value=\"High\">High</option>"+
            "<option value=\"Fluently\">Fluently</option>"+
            "</select>"+
            "<select name=\"write\">"+
            "<option value=\"#\">--Writing--</option>"+
            "<option value=\"Low\">Low</option>"+
            "<option value=\"High\">High</option>"+
            "<option value=\"Fluently\">Fluently</option>"+
            "</select>"
            document.getElementById('lang').appendChild(newDiv);
        }
        function removeLang(){
            //nextId;
            var inputLBox = document.getElementById('inputLBox'+ Id);
            document.getElementById('lang').removeChild(inputLBox);
            Id--;
        }

    </script>

    <!--    *************************************************************************************-->


    <form method="GET" >

        <fieldset name="perInfo" style="width: 600px">
            <legend name="legPI">Personal info:</legend>
            <input type="text" name="pinfo[First_Name]" placeholder="First Name"><span style="color: red"> <?php echo $arrERR[0];?></span><br />
            <input type="text" name="pinfo[Last_Name]" placeholder="Last Name"><span style="color: red"> <?php echo $arrERR[1];?></span><br />
            <input type="text" name="pinfo[email]" placeholder="Email"><span style="color: red"> <?php echo $arrERR[2];?></span><br />
            <input type="text" name="pinfo[phone]" placeholder="Phone number"><span style="color: red"> <?php echo $arrERR[3];?></span><br />
            Female<input type="radio" name="pinfo[gender]" value="Female">
            Male<input type="radio" name="pinfo[gender]" value="Male"><br />
            Birth Date:
            <input type="text" name="pinfo[bdate]" placeholder="dd/mm/yyyy"><br />
            Nationality:
            <select name="pinfo[nation]">
                <option value="Bulgarian">Bulgarian</option>
                <option value="Indian">Indian</option>
                <option value="Serbian">Serbian</option>
                <option value="American">American</option>
            </select>
        </fieldset>
        <fieldset name="lastWork" style="width: 600px">
            <legend>Last work position:</legend>
            Company Name:<input type="text" name="lwp[Company_Name]"><span style="color: red"> <?php echo $arrERR[4];?></span><br />
            From Date<input type="text" name="lwp[From_Date]" placeholder="dd/mm/yyyy"><br />
            To Date<input type="text" name="lwp[To_Date]" placeholder="dd/mm/yyyy"><br />
        </fieldset>
        <fieldset name="compSkills" style="width: 600px">
            <legend>Computer skills:</legend>
            Programing languages:
            <div id="plang" ">
                <div id="inputBox1">
                    <input type="text" name="plang[]">
                    <select name="level[]">
                        <option value="Begginer">Begginer</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>
            </div>
            <a href="javascript:removePLang()">
                <input type="button"name="removePLang" value="Remove language">
            </a>
            <a href="javascript:addPLang()">
                <input type="button"name="addPLang" value="Add language">
            </a>
        </fieldset>
        <fieldset name="othSkills" style="width: 600px">
            <legend>Other skills:</legend>
            Languages:
            <div id="lang">
                  <div id="inputLBox1">
                    <input type="text" name="lang[]"><span style="color: red"> <?php echo $langErr;?></span>
                    <select name="spec">
                        <option value="#">--Comprehension--</option>
                        <option value="Low">Low</option>
                        <option value="High">High</option>
                        <option value="Fluently">Fluently</option>
                    </select>
                    <select name="read">
                        <option value="#">--Reading--</option>
                        <option value="Low">Low</option>
                        <option value="High">High</option>
                        <option value="Fluently">Fluently</option>
                    </select>
                    <select name="write">
                        <option value="#">--Writing--</option>
                        <option value="Low">Low</option>
                        <option value="High">High</option>
                        <option value="Fluently">Fluently</option>
                    </select>
                </div>
            </div>
            <a href="javascript:removeLang()">
                <input type="button"name="removeLang" value="Remove language">
            </a>
            <a href="javascript:addLang()">
                <input type="button"name="addLang" value="Add language">
            </a>
            <br />
            Driving License:<br />
            B:<input type="checkbox" name="drvB">
            A:<input type="checkbox" name="drvA">
            C:<input type="checkbox" name="drvC">
        </fieldset>
        <input type="submit" value="Generate CV">
    </form>
   <?php

    //Personal info
   if(isset($_GET['pinfo'])){
       $arrTablePI =$_GET['pinfo'];
     //  var_dump($arrTablePI);
       echo("<table><thead><tr><td colspan = \"2\">Personal Info</td></tr></thead>");
       foreach ($arrPinfo as $key => $value) {
           $keyStr = str_replace("_"," ",$key);
           $keyStr = str_replace("phone","Phone number",$keyStr);
           $keyStr = str_replace('email','Email',$keyStr);
           $keyStr = str_replace('bdate','Birth Date',$keyStr);
           $keyStr = str_replace('nation','Nationality',$keyStr);
           $keyStr = str_replace('gender','Gender',$keyStr);
           echo("<tr><td>$keyStr</td><td>$value</td></tr>");
       }
       echo("</table>"."<br />"."<br />");
   }
   if(isset($_GET['lwp'])){
       $arrTableLWP =$_GET['lwp'];
      // var_dump($arrTableLWP);
       echo("<table><thead><tr><td colspan = \"2\">Last Work Place</td></tr></thead>");
       foreach ($arrTableLWP as $key => $value) {
           $keyStr = str_replace("_"," ",$key);
           echo("<tr><td>$keyStr</td><td>$value</td></tr>");
       }
       echo("</table>");
   }





    //var_dump($_GET['lang']);

   ?>
</body>