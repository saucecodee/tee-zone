<?php

 $con= "msqli_connect('localhost', 'source', '123source' teezone')";

if ($con)
{
	echo 'connected successfuly';
}
else
{
	echo 'not connected';
}

?>