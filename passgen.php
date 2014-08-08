<?php

$l = $_GET['len'];
$n = 10;

function getPass($len, $strength)
{
    $alph_set = array('0123456789',
                  'ABCDEFGHJKMNPQRSTUVWXYZ',
                  '!@#$%&*?',
                 );
    
    $alph = "abcdefghjkmnpqrstuvwxyz";
    $pass = "";
    
    for ($i = 0; $i < $strength; $i++)
    {
        $alph .= $alph_set[$i];
        
        $pass .= $alph_set[$i][array_rand(str_split($alph_set[$i]))]; 
    }
    
    for ($i = 0; $i < $len - $strength; $i++)
    {
        $pass .= $alph[rand() % strlen($alph)];
    }
    
    $pass = str_shuffle($pass);
    
    return $pass;
        
}

for ($i = 0; $i < 10; $i++)
{
    echo "<tr>";
    for ($s = 1; $s <= 3; $s++)
    {
        echo "<td><span class='click-to-copy' data-toggle='tooltip' data-placement='top' title='Tooltip on top'>" . getPass($l, $s) . "</span></td>";
    }
    echo "</tr>";
}

?>
<script>
var client = new ZeroClipboard( $(".click-to-copy"), {
              moviePath: "js/ZeroClipboard.swf",
              debug: false
} );

client.on( "load", function(client)
{
    client.on( 'dataRequested', function ( client, args ) {
        client.setText( $(this).text() );
    } );
    
    client.on( "complete", function(client, args) {
        $('.alert').fadeIn(200);
        setTimeout(function(){$('.alert').fadeOut()}, 1500);
    } );
    
} );
</script>