<?php
    $getWorkId = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <link rel="shortcut icon" href="myicon.png" type="image/png">
    <title>Recent Works</title>

</head>
<body>

    <?php
        if($_GET["work"] == 1)
        {

            $getWorkId = 1;
    ?>
        <div class="works-page">
            <div class="work-container">
                <div class="work-img">
                    <div class="img-box">
                        <img class="img" src="proj1/img1.png" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button class="controls" onclick="prev()">Prev</button>
                    <button class="controls" onclick="next()">Next</button>
                </div>
                <div class="info">
                    <h1 class="work-title">Login System</h1>
                    <p class="details">
                        I build a login system to promote security in a website and prevent
                        SQL Injection that could potentially destroy a system.
                    </p>
                    <p class="details">
                       Procedural programming with classes is being used in this project
                       for neat and systematical flow of the codes.
                    </p>
                    <p class="details">
                       Focused in security and responsiveness throughout different platforms
                       to make it more engaging for the users.
                    </p>
                    <p class="details">
                       
                    </p>
                    <a href="index.html" class="back">Go back</a>
                </div>
            </div>
        </div>
    <?php
        }
        else if ($_GET["work"] == 2)
        {
            $getWorkId = 2;
    ?>
        <div class="works-page">
            <div class="work-container">
                <div class="work-img">
                    <div class="img-box">
                        <img class="img" src="proj2/img1.png" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button class="controls" onclick="prev()">Prev</button>
                    <button class="controls" onclick="next()">Next</button>
                </div>
                <div class="info">
                    <h1 class="work-title">Tic-Tac-Toe</h1>
                    <p class="details">
                        Simple game using Javascript to show my logical skills, DOM manipulation
                        and interacting the back-end to the front-end while making fun stuffs
                        in making some interacting games.
                    </p>
                    <a href="index.html" class="back">Go back</a>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    

    <script>

        var jsvar = '<?php echo $getWorkId; ?>';
        
        var sliderImage = document.querySelector('.img');
        //console.log(sliderImage);


        var images = [ 'img1.png', 'img2.png', 'img3.png'];
        var imgCtr = 0;
        
        function prev()
        {
            if(imgCtr <= 0) imgCtr = images.length;
            imgCtr--;
            return setImg();
        }
        
        function next()
        {
            if(imgCtr >= images.length-1) imgCtr = -1;
            imgCtr++;
            return setImg();
        }

        function setImg()
        {
            
            if(jsvar == 1)
            {
               sliderImage.setAttribute('src', 'proj1/'+images[imgCtr]);
            }

            else if(jsvar == 2)
            {
                sliderImage.setAttribute('src', 'proj2/'+images[imgCtr]);
            }
           
        }
    </script>
</body>
</html>