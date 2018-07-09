<?php 
	echo '<div class="box">';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="second-heading">News from our blog</div>';
		echo '<div class="box-content">';
               echo '<div class="latest-news v2 row">';
                    foreach($module['content']['articles'] as $article) {
                         echo '<div class="col-sm-4">';
                              echo '<div class="image">';
                                   if($article['thumb']) {
                                        echo '<a href="' . $article['href'] . '"><img src="' . $article['thumb'] . '" alt="Blog"></a>';
                                   }
                              echo '</div>';
                              echo '<div class="overflow">';
                                   echo '<div class="left">';
                                        if ($article['date_published']) {
                                             echo '<div class="article-date-added">' . date('d', strtotime($article['date_published'])) . '<br><span>' . date('M', strtotime($article['date_published'])) . '</span></div>';
                                        }
                                        echo '<div class="comments">' . $article['comments_count'] . '</div>';
                                   echo '</div>';
                                   
                                   echo '<div class="tags">';
                                        $s = 0; foreach($article['tags'] as $tag):
                                             if($s < 2) echo '<a href="' . $tag['href'] . '">' . $tag['tag'] . '</a>';
                                        $s++; endforeach;
                                   echo '</div>';
                                   
                                   echo '<div class="title"><a href="' . $article['href'] . '">' . $article['title'] . '</a></div>';
                                   echo '<a href="' . $article['href'] . '" class="readmore">' . $article['readmore'] . '</a>';
                              echo '</div>';
                         echo '</div>';
                    }
               echo '</div>';
		echo '</div>';
	echo '</div>';	
?>