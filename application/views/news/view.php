<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="/css/bootstrap.css" rel="stylesheet" >
        <link href="/css/bootstrap-responsive.css" rel="stylesheet" >
    </head>
    <body>
        <?php
            echo '<h2>'.$news_item['title'].'</h2>';
            echo $news_item['text'];
            echo $news_item['price'];
        ?>
        </br>
        </br>
        <?php echo form_open('News/orders') ?>
            <label for="ordername">   輸入訂購人姓名:</label><input type="input" name="ordername"/><br/>
            <label for="orderphone">  輸入電話:      </label><input type="input" name="orderphone"/><br/>
            <label for="orderaddress">輸入地址:      </label><input type="input" name="orderaddress" /><br/>
            <label for="orderemail">  輸入E-MAIL:    </label><input type="input" name="orderemail" /><br/>
            <input type="hidden" name="itemid" value="<?php echo $news_item['slug']?>"><br/>
            <input type="hidden" name="title" value="<?php echo $news_item['title']?>"><br/>
            <input type="hidden" name="price" value="<?php echo $news_item['price']?>"><br/>
            <input type="submit" name="submit" value="我要跟團" />
        </form>

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>