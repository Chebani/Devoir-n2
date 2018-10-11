function creerConference()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/main/creerConference",
        success:function(data)
        {
            $('#conference').empty();
            $('#conference').append(data);
        },
        error:function()
        {
            alert('Erreur');
        }
    }
    );
}

