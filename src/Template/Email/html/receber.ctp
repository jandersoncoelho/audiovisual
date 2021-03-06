<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php
$content = explode("\n", $content);

foreach ($content as $line):
    
	echo '<p> Equipamento: '. $nomeEquipamento . "</p>\n";
	
	echo '<p> Número Patrimônio: ' . $numeroPatrimonio . "</p>\n";
	
	echo "Acessórios:";
	foreach ($acessorios as $acessorio) {
		echo "<p> " . $acessorio->nome . "</p>";
	}
	
	echo "\n<p> Data de retirada: " . date('d/m/Y H:i', strtotime($dataRetirada)) . "</p>\n";
	echo "\n<p> Data de devolução: " . date('d/m/Y H:i', strtotime($dataDevolucao)) . "</p>\n";
	echo "\n<p> " . $nomeDevolveu . " efetuou a devolução deste equipamento.</p>\n";
	echo "<p> Instituto Federal de Educação, Ciência e Tecnologia do Triângulo Mineiro </p>\n";
endforeach;
?>
