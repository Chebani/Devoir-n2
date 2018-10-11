var numF;

function AfficherFormation(idActivite)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherFormations",
        data:"idActivite="+idActivite,
        success:function(data)
        {
            $('#divFormations').empty();
            $('#divAgents').empty();
            $('#divFormations').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
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
