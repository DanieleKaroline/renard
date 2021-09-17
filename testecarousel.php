 <!-- Principal Section with the gallery code. If you want use only gallery code,
             you can copy all code bellow, with gallery-container.-->
			

<!--Slide-->
<?php
        include("functions/conexao.php");
    ?>
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Gallery System</h1>
            <a href="index.php"><i class="fas fa-image"></i>Gallery</a>
    	</div>
    </nav>


<div class="content home">
	<h2>Gallery</h2>
	<p>Welcome to the gallery page, you can view the list of images below.</p>
	<a href="upload.php" class="upload-image">Upload Image</a>
  <?php 
                                    /*INICIO GALERIA*/

                                        $query2 = mysqli_query($conexao, "SELECT * FROM blogimagem WHERE BlogImagem_Blog_Codigo = 3 AND BlogImagem_Destaque = 'n'");

                                        if(mysqli_num_rows($query2) < 1){
                                            echo "Não há imagens na galeria<hr>"; 
                                       }

                                        while($exibe2 = mysqli_fetch_array($query2)){
									?>
									
                                           
                                            <div class="images">
													
                                            <img class="img-fluid" src="img/blog/<?php echo $exibe2[1] ?>" width="300" height="200">
												
                                            </div>
</div>
<div class="image-popup"></div>
                                    <?php
                                        }
                                    /*FIM GALERIA*/
									?>
		<a href="#">
		<img class="img-fluid" src="img/blog/<?php echo $exibe2[1] ?>" width="300" height="200">
		
		</a>

	</div>
</div>
<div class="image-popup"></div>

<style>

* {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #FFFFFF;
    margin: 0;
}
.navtop {
    background-color: #3f69a8;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #ecf0f6;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c5d2e5;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.image-popup {
    display: none;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 99999;
}
.image-popup .con {
    display: flex;
    flex-flow: column;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 5px;
}
.image-popup .con h3 {
    margin: 0;
    font-size: 18px;
}
.image-popup .con .edit, .image-popup .con .trash {
    display: inline-flex;
    justify-content: center;
    align-self: flex-end;
    width: 40px;
    text-decoration: none;
    color: #FFFFFF;
    padding: 10px 12px;
    border-radius: 5px;
    margin-top: 10px;
}
.image-popup .con .trash {
    background-color: #b73737;
}
.image-popup .con .trash:hover {
    background-color: #a33131;
}
.image-popup .con .edit {
    background-color: #37afb7;
}
.image-popup .con .edit:hover {
    background-color: #319ca3;
}
.home .upload-image {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    font-size: 14px;
    border-radius: 5px;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 15px 0;
}
.home .upload-image:hover {
    background-color: #32a367;
}
.home .images {
    display: flex;
    flex-flow: wrap;
}
.home .images a {
    display: block;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    width: 300px;
    height: 200px;
    margin: 0 20px 20px 0;
}
.home .images a:hover span {
    opacity: 1;
    transition: opacity 1s;
}
.home .images span {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: absolute;
    opacity: 0;
    top: 0;
    left: 0;
    color: #fff;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 15px;
    transition: opacity 1s;
}
.upload form {
    padding: 15px 0;
    display: flex;
    flex-flow: column;
    width: 400px;
}
.upload form label {
    display: inline-flex;
    width: 100%;
    padding: 10px 0;
    margin-right: 25px;
}
.upload form input, .upload form textarea {
    padding: 10px;
    width: 100%;
    margin-right: 25px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
}
.upload form textarea {
    height: 200px;
}
.upload form input[type="submit"] {
    display: block;
    background-color: #38b673;
    border: 0;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    cursor: pointer;
    width: 200px;
    margin-top: 15px;
    border-radius: 5px;
}
.upload form input[type="submit"]:hover {
    background-color: #32a367;
}
.delete .yesno {
    display: flex;
}
.delete .yesno a {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 15px 10px 15px 0;
    border-radius: 5px;
}
.delete .yesno a:hover {
    background-color: #32a367;
}
</style>
<script>
// Container we'll use to show an image
let image_popup = document.querySelector('.image-popup');
// Loop each image so we can add the on click event
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container if user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>