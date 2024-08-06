<html>
    <head><title>Send the POST Data</title></head>
    <body>
        <h1>Send the User Information</h1>
        <?=session('message')?>
        <form method="POST" action="<?=url('get-userdata')?>">
            <label >Name:<input type="text" name="name"></label><br>
            <label >Age:<input type="number" name="age"></label><br>
            <label >Phone<input type="number" name="phone"></label><br>
            <input type = "hidden" name="_token" value="<?=csrf_token()?>">
           <input type = "submit" value="Send">
        </form>
    </body>
</html>