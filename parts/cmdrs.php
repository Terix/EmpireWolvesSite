<?php
$founders = array();
$content = 'http://via.placeholder.com/500x500';
$founders['name1'] = $content;
$founders['name2'] = $content;

$cmdrs = array();
$content = 'http://via.placeholder.com/300x300';
$cmdrs['name1'] = $content;
$cmdrs['name2'] = $content;
$cmdrs['name3'] = $content;
$cmdrs['name4'] = $content;
$cmdrs['name5'] = $content;
$cmdrs['name6'] = $content;
$cmdrs['name7'] = $content;
$cmdrs['name8'] = $content;
$cmdrs['name9'] = $content;
$cmdrs['name0'] = $content;
?>
						<!-- About -->
								<h2 class="major">I Comandanti</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
							<div class="f-box">
                            <?php
                            foreach ($founders as $name => $image) {
                                echo '<div class="founders">'."\r\n";
                                echo '<span class="image"><img src="'.$image.'" alt="" /></span>'."\r\n";
                                echo '<span class="label">'.$name.'</span>'."\r\n";
                                echo '</div>'."\r\n";
                            }
                            ?>
							</div>
							<div class="c-box">
                            <?php
                            foreach ($cmdrs as $name => $image) {
                                echo '<div class="cmdrs">'."\r\n";
                                echo '<span class="image"><img src="'.$image.'" alt="" /></span>'."\r\n";
                                echo '<span class="label">'.$name.'</span>'."\r\n";
                                echo '</div>'."\r\n";
                            }
                            ?>
							</div>
