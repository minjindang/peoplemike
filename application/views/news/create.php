<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="/application/libraries/css/bootstrap.css" rel="stylesheet" >
    <link href="/application/libraries/css/bootstrap-responsive.css" rel="stylesheet" >
  </head>
  <body>
    
    <?php echo form_open('news/create') ?>
    <h2><?php echo $title ?></h2>
    <label for="title">開團商品名稱</label>
    <input type="input" name="title" /><br/>
    <label for="text">開團商品描述</label>
    <textarea name="text"></textarea><br/>
    <label for="price">開團價</label>
    <input type="input" name="price" /><br/>
    <input type="submit" name="submit" value="我要開團" />
    </form>
    <script src="/application/libraries/js/bootstrap.min.js"></script>
  </body>
</html>