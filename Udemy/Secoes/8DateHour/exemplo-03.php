<?php
//funcao para traduzir tudo para portugues
//porem um do jeito normal o outro do linux e outro do windows

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//ucwords é para primeira letra maiuscula
//strftime para mostrar dia e mes (Constantes do site Php)
echo ucwords(strftime("%A %B"));





 ?>
