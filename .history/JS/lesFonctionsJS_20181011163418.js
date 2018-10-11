function creerConference()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/main/creerConference",
        success:function()
        {
            $('#conference').empty();
            $('#conference').append();
        },
        error:function()
        {
            alert('Erreur');
        }
    }
    );
}

