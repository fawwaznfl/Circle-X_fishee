

<!DOCTYPE html>
<html>


<head>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets_guests/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets_guests/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets_guests/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<style>



*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto';
    color: #cac7ff;
    text-align: center;
    src: url(assets_guests/fonts/Roboto/Roboto-Black.ttf);
}


.container{
    width:100%;
    min-height:100vh;
    padding:5%;
    background-image:linear-gradient(rgba(0,8,51,.7),rgba(0,8,51,0.7)), url(assets_guests/images/banners/ikan.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center; /* Center text horizontally */
}

.search-bar{
    width:100%;
    min-width: 500px;
    max-width: 700px;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    border-radius: 60px;
    padding: 10px 20px;
    backdrop-filter: blur(4px) saturate(180%);
}

::placeholder{
    color: #cac7ff;
}

.search-bar input{
    background: transparent;
    flex: 1;
    border: 0;
    outline: none;
    padding: 24px 20px;
    font-size: 20px;
    text-align: left;
    color: #cac7ff;
}

.search-bar button img{
    width: 25%;
}

.search-bar button{
    border: 0;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    background: #58629b;
    cursor: pointer;
}

</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12">
                <h1><b>Cari UMKM Perikanan</b></h1>
                <p>Temukan UMKM Perikanan yang kamu mau</p>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Mau cari apa.." name="q">
                    <button type="submit"><img src="assets_guests/images/icons/search_icon.png" alt="Search"></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>