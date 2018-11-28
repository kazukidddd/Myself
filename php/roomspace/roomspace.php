<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ROOMSPACE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php 
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson_kimura;host=localhost;","root","");
        //""の部分はプログラマカレッジ内だとパスワードいるので'mysql'にする
        $stmt = $pdo->query("select * from roomspace");
        
        
        ?>
    
        <header>
            <div class="logo">
                <img src="cooltext298885453601812.png">
                
            </div>
        </header>
        
        <main>
            <div class="home">
                <h1>部屋の大きさ計算</h1>
                
                <form method="post" action="insert.php">
                    <div class="contactform">
                        
                        <label>名前<br>
                            <input type="text" name="name" size="20">
                        </label>
                        
                        <p>部屋の幅、奥行きは？</p>
                        <label>幅<br>
                            <input type="text" name="width" size="20">cm
                        </label>
                        
                        <br>
                        
                        <label>奥行き<br>
                            <input type="text" name="depth" size="20">cm
                        </label>
                        <br>
                        
                        <input type="submit" class="button" value="計算する">

                    </div>
                </form>
                <div class="clear"></div>
                <?php
                
                while($row=$stmt->fetch()){
                    echo "<div class='contactform'>";
                    echo "<h3>計算日".$row['date']."</h3>";
                    echo "<div class='comments'>";
                    echo $row['width']."㎝X".$row['depth']."㎝=".$row['width']*$row['depth']."㎠(約".($row['depth']*$row['width'])/19404 ."畳)";
                    echo "<div class='handlename'>posted by".$row['name']."</div>";
                    echo     "</div>";
                    echo "</div>";
                    
                }
                ?>
            
            </div>
        
        
        
        </main>
    
    </body>
    
    

</html>  