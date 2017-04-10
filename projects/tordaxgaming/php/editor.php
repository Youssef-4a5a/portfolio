 <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databse = "tordax";
            
            $conn = new PDO("mysql:host=$servername;dbname=$databse",$username,$password);
            
            $edit = "select DISTINCT id from message";
            $menu = $conn->query($edit);
            
            echo "<br><form method=post>";
            echo "<select name=message class=editselect onchange=submit()>";
            echo "<option value=''>message</option>";

            foreach($menu as $row) {
                echo "<option value='".$row["id"]."' onchange='submit()'>".$row["id"]."</option>";
            }
            echo "</select>";
            echo "</form><br><br>";

            $bla = $_POST["message"];
            $select = "select id,head,content from message where id =".$bla;
            
            $result = $conn->query($select);
            
            if($bla != ""){
                foreach($result as $row)
                    echo        "<form method='post'>
                                    <input type=hidden name='id' value=". $row['id'].">
                                    <input name='head' class=edittitle value='" . $row["head"]. "'><br><br>
                                    <textarea name='content' class=editmessage>".$row["content"]."</textarea><br><br>
                                    <input type='submit' class=editsubmit name='update' value='update'>
                                </form>";
            }
            else{
                echo    "<form>
                            <input type=hidden name='id' value=>
                            <input name='head' class=edittitle value=><br><br>
                            <textarea name='content' class=editmessage></textarea><br><br>
                            <input type ='submit' class=editsubmit name='update' value='update'>
                        </form>";
                
            };

            if(isset($_POST['update'])){
                $head = $_POST["head"];
                $message = $_POST["content"];
                $id = $_POST["id"];
                $sql = "UPDATE message SET head = '".$head."',content ='".$message."' WHERE id = '".$id."'";
                $execute = $conn->exec($sql);
            }
        ?>