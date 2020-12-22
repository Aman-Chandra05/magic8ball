<?php
$userName="";
$randomNumber="";
$eightBall="";
$userQuestion="";
$response=array(
    "It is Certain.",
    "It is decidely so.",
    "Reply hazy try again.",
    "Can not predict now.",
    "Do not count on it.",
    "My sources say no.",
    "Outlook not so good.",
    "Signs point to Yes."
);
if(isset($_POST['ask']))
{
    $userName=isset($_POST['name'])?$username=$_POST['name']:'';
    $userQuestion=isset($_POST['ques'])?$username=$_POST['ques'].'?':'';
    $randomNumber=rand(0,7);
    if($randomNumber==0)
        $eightBall=$response[0];
    elseif($randomNumber==1)
        $eightBall=$response[1];
    elseif($randomNumber==2)
        $eightBall=$response[2];
    elseif($randomNumber==3)
        $eightBall=$response[3];
    elseif($randomNumber==4)
        $eightBall=$response[4];
    elseif($randomNumber==5)
        $eightBall=$response[5];
    elseif($randomNumber==6)
        $eightBall=$response[6];
    elseif($randomNumber==7)
        $eightBall=$response[7];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <link rel="stylesheet" href="mycss.css">
    <title>Magic 8 Ball</title>
</head>

<body>
    <div class="container p-3 mt-2 mb-2">
        <div>
            <h1 class="text-center">Magic 8 Ball</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Enter Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $userName;?>" />
                </div>
                <div class="form-group">
                    <label for="ques">Ask me anything</label>
                    <input type="text" class="form-control" id="ques" name="ques" value="<?php echo $userQuestion;?>" required />
                </div>
                <input type="submit" class="btn btn-primary" value="Ask a Question" name="ask">
            </form>
        </div>
        <div class="card mt-3 p-3">
            <div class="text-center">
                <img src="image.png" class="card-img-top img-responsive" alt="8 Ball">
            </div>
            <?php
            if(isset($_POST['ask']) && $_POST['ask']=="Ask a Question")
            {?>
            <div class="card-body">
                <p class="card-text text-center">
                    Hello<?php if($userName!="")echo ', <span id="username">'.$userName."</span>";?>! You asked
                    <?php if($userQuestion!="")echo '<span id="question">'.$userQuestion.'</span>';?></p>
                <p class="card-text text-center">My Answer :
                    <?php if($eightBall!="")echo '<span id="answer">'.$eightBall.'</span>';?></p>
            </div>
            <?php }?>
        </div>
    </div>
</body>

</html>