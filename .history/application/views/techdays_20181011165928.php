
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
    <script type="text/javascript" src="JS/lesFonctionsJS.js"></script>
    <script type="text/javascript" src="JQUERY/jquery-3.1.1.min.js"></script>
    <title>Devoir TechDays</title>
    <script>
    $(document).ready(function() 
            {   
                $('#creerConference').click(creerConference);               
            }
        );
    </script>
</head>
<body>
    <h1>Devoir TechDays</h1>
    <button id='creerConference' >Créer une conférence</button><br>
    <button id='voterConference' >Voter pour une conférence</button><br>
    <div id='conference'></div>
</body>
</html>
