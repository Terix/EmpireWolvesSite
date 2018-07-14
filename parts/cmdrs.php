<?php
require_once 'functions.php';

$founders = getFounders();
$cmdrs = getAvatars();

?>
						<!-- About -->
								<h2 class="major">I Comandanti</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
							<div class="f-box">
                            <?php
                            foreach ($founders as $name => $image) {
                                echo '<div class="founders">'."\r\n";
                                echo '<span class="image"><img src="founders/'.$image.'" alt="" /></span>'."\r\n";
                                echo '<span class="label">'.$name.'</span>'."\r\n";
                                echo '</div>'."\r\n";
                            }
                            ?>
							</div>
							<div class="c-box">
                            <?php
                            foreach ($cmdrs as $cmdr) {
                                echo '<div class="cmdrs">'."\r\n";
                                echo '<span class="image"><img src="cmdrs/'.$cmdr['file'].'" alt="" /></span>'."\r\n";
                                echo '<span class="label">'.$cmdr['label'].'</span>'."\r\n";
                                echo '</div>'."\r\n";
                            }
                            ?>
							</div>
