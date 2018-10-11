var numF;

function creerConference()
{
    $.ajax(
    {
        type:"get",
        url:"index.php/main/creerConference",
        data:"conference="+conference,
        success:function(data)
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

function AfficherAgents(idFormation)
{
    numF=idFormation;
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherAgents",
        data:"idFormation="+idFormation,
        success:function(data)
        {
            $('#divAgents').empty();
            $('#divAgents').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}

function ValiderPresence()
{
    var tabCode = Array();
    var tabPresence = Array();

    $('input[type=checkbox]').each
    (
        function(){
            tabCode.push($(this).val());
            tabPresence.push($(this).is(':checked'));
        }
    )

    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/UpdatePresence",
        data:"tab1="+tabCode+"&tab2="+tabPresence+"&numF="+numF,
        success:function(data)
        {
            alert('Mise à jour Ok');
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
