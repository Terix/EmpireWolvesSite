<?php
$struct = array();
$struct['lore']=array('label'=>'Storia','file'=>'story');
$struct['faction']=array('label'=>'Fazione','file'=>'faction');
$struct['contact']=array('label'=>'Arruolati','file'=>'enroll');
$struct['commanders']=array('label'=>'I lupi','file'=>'cmdrs');

echo '<ul>';
foreach ($struct as $item => $data) {
    echo '<li><a href="#'.$item.'">'.$data['label'].'</a></li>';
}
echo '</ul>';
