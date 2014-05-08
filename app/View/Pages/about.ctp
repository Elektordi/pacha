<h1>P.A.CHA.</h1>
<?php
$options = array( 'alt'=>'Auteur des images: Iconka', 'title' => 'Prrrrr...' );
echo $this->Html->image('catpurr_white.gif', $options);
?>
<h2><b>P</b>lateforme d'<b>A</b>ccompagnement des <b>CHA</b>ts</h2>

<p>Ce logiciel est développé par Guillaume "Elektordi" Genty pour l'association ECLVYS (École du Chat Libre Vals d'Yerres et de Seine).
<br/>Site de l'association: <a href="http://www.chatlibre.org/">http://www.chatlibre.org/</a></p>

<p>Si vous trouvez des bugs, merci de les rapporter ici: <a href="https://github.com/Elektordi/pacha/issues/new">https://github.com/Elektordi/pacha/issues/new</a></p>

<p>Vous pouvez participer au développement de ce logiciel, l'utiliser librement ailleurs ou même vous en inspirer.
<br/>Pour cela, rendez-vous sur la page du projet PACHA sur Github: <a href="https://github.com/Elektordi/pacha">https://github.com/Elektordi/pacha</a></p>

<p><i>Pour me contacter: Guillaume Genty (guillaume arobase elektordi point net)</i></p>

<h3>Logiciel libre (open-source) sous la license <b>CeCILL-B</b>:</h3>
<pre style="width: 600px;"><?php echo file_get_contents(ROOT.'/LICENSE'); ?></pre>
