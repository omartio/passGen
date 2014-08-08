$(document).ready(
    function(){
        load_passwords(10);
    }
);

function load_passwords(len)
{
    $.get('passgen.php', {len : len}, function(data){
        $('.passwords-tabel tbody').html(data);
    });
    
}

function reloadPass()
{
    l = $('#lenInputLabel').val();
    if (isNaN(parseInt(l)) || l < 3 || l > 30)
	{
        
		return;
	}
    load_passwords(l);
}

