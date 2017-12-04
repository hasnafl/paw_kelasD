<!doctype html>
   
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Autocomplete dari database <a href="#">dengan</a> jQuery dan PHP | <a href="#">Jin Toples Programming</a></title>
 <link rel="stylesheet" href="b/style.css" />
    <link rel="stylesheet"
    href="b/jquery-ui.css" />
    <script src="b/jquery-1.8.3.min.js"></script>
    <script src="b/jquery-ui.js"></script>
  
    <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() { 
        $( "#nama" ).autocomplete({
         source: "get_obat.php", 
           minLength:2,
        });
    });
    </script>
</head>
<body>
<div class="wrap">
 <h1><a href="#">Jin Toples Programming</a></h1>
    <h1>Autocomplete dari database <a href="#">dengan</a> jQuery dan PHP</h1>
 <div class="ui-widget">
  <label for="nama">Nama obat : </label>
  <input id="nama"  />
 </div>
 <p class='copy'>Copyright &copy <a href="http://www.jintoples.blogspot.com"><a href="#">Jin Toples Programming</a></a> 2015</p>
</div>
</body>
</html>


Sumber : http://jintoples.blogspot.co.id/2015/03/cara-membuat-autocomplete-dari-database-dengan-jquery-php.html#ixzz4hR0gGCC6 
Follow us: @jin_toples on Twitter | JinToplesBlogger on Facebook