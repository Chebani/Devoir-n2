function creerConference()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/main/creerConference",
        data:"conference="+conference,
        success:function()
        {
            $('#conference').empty();
            $('#conference').append(conference);
        },
        error:function()
        {
            alert('Erreur');
        }
    }
    );
}

