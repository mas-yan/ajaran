<?php 
echo date("l m d y");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>index</title>
 </head>
 <body>
 	<br/>
 		<div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <div class="bp"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
            <form action="login.php" method="POST" onsubmit="return validasi()">
                <div class="grup">
                    <label for="Username">Username</label>
                    <input type="email" name="username" placeholder="Masukkan Username Anda" id="username" >
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password Anda" name="password" id="password">
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
                <a href="registrasi.php">saya belum registrasi !</a>
            </form><br/><br>
            <div class="mr">
    <p class="ar">Copyright 2019. By Riyan Alfian</p>
</div>
        </div>
    </div>
    <style type="text/css">
	*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
 
body{
    background: #c0c0c0;
}
 
div.konten{
    background: #ffffff;
    width: 450px;
    margin: 100px auto 0;
    border-radius: 16px;
    height: 450px;
    overflow: hidden;
}
 
div.kepala{
    background: #f85252;
    padding: 10px 22px;
    height: 60px;
}
 
div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}
 
div.lock{
    background-image: url("lock.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 8px;
    float: left;
    margin-right: 10px;
}
div.bp{
    background-image: url("photo.jpg");
    background-size: 100px;
    width: 100px;
    height: 100px;
    margin-top: 60px;
    margin-left: 150px;
    border-radius: 25%;
    position: absolute;
    border-radius: 25%;
}

div.artikel{
    padding:100px 22px 0;
    color: #808080;
}
 
div.artikel div.grup{
    margin: 16px 0;
}
 
div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}
 
div.artikel div.grup label{
    font-size: 13px;
    margin-bottom: 10px;
}
 
div.artikel div.grup input[type="email"],
div.artikel div.grup input[type="password"]{
    width: 100%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}
 
div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    padding: 4px 16px;
    margin: 0 auto;
    margin-top: 25px;
    border: 1px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}
 
div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
.mr{
    background-color: blue;
}
.mr .ar{
    color: white;
    text-align: center;
    font-size: 15px;
}
</style>
 	</form>
 </div>
 </body>
 <script type="text/javascript">
 	function validasi() {
 		var Username = document.getElementById("username").value;
 		var Password = document.getElementById("password").value;
 		if (Username !="" && Password!="") {
 			return true;
 		}else{
 			alert('Username dan password harus di isi !');
 			return false;
 		}
 	}
 </script>
 </html>