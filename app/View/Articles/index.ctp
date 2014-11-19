<?php
// JS
echo $this -> Html -> script(array('jquery_1.3.2', 'jqueryui', 'easing', 'jquery.cycle.all', 'custom'));
// superfish
echo $this -> Html -> script(array('/superfish-1.4.8/js/hoverIntent', 'superfish-1.4.8/js/superfish'));
// css
//echo $this -> Html -> css(array('style', 'spring'));
// cufon
echo $this -> Html -> script(array('cufon-yui.js', 'bebas_400.font.js'),array('inline'=>false));
?> 
<!-- MAIN -->
  <div id="main">
    <!-- posts -->
    <div id="posts">
      <!-- single -->
      <div class="single">
        <p class="post-title custom"><?php echo $article['Article']['title']; ?></p>
        <p class="post-meta"><?php echo $article['Article']['created']; ?><span> by Admin</span></p>
        <div class="post-img"><?php echo $this -> Html -> image('dummies/dummy-post-img.jpg', array('alt' => '#'));?><span></span></div>
        <!-- <div class="post-img"><a href="#"><img src="img/dummies/dummy-post-img.jpg" alt="" /></a><span></span></div> -->
        <p class="brief">
        	<?php echo $article['Article']['body']; ?>
        </p>
        <p class="brief">Morbi sagittis, dolor nec tempor condimentum, libero quam euismod quam, sed sodales purus nisl eget felis. Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante, ac tristique orci. …</p>
        <p class="brief">Morbi sagittis, dolor nec tempor condimentum, libero quam euismod quam, sed sodales purus nisl eget felis. Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante, ac tristique orci. …</p>
        <p class="brief">Morbi sagittis, dolor nec tempor condimentum, libero quam euismod quam, sed sodales purus nisl eget felis. Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante, ac tristique orci. …</p>
      </div>
      <!-- ENDS single -->
      <!-- comments -->
      <div class="comments">
        <p class="post-comments custom">12 <span class="custom">Comments</span></p>
        <!-- comments list -->
        <ol class="comments-list">
          <li>
            <p><a href="#"><?php echo $this -> Html -> image('dummies/dummy-avatar.jpg', array('alt' => '','class'=>'avatar'));?></a></p>
            <p class="meta">Posted Jan 1, 2010 1:20pm <span>by Admin</span></p>
            <p class="brief">Feugiat a turpis. Cum sociis natoque penatibus et magnis Cum sociis natoque penatibusmontes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante.</p>
          </li>
          <li>
            <p><a href="#"><?php echo $this -> Html -> image('dummies/dummy-avatar.jpg', array('alt' => '','class'=>'avatar'));?></a></p>
            <p class="meta">Posted Jan 1, 2010 1:20pm <span>by Admin</span></p>
            <p class="brief">Feugiat a turpis. Cum sociis natoque penatibus et magnis Cum sociis natoque penatibusmontes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante.</p>
          </li>
          <li>
            <p><a href="#"><?php echo $this -> Html -> image('dummies/dummy-avatar.jpg', array('alt' => '','class'=>'avatar'));?></a></p>
            <p class="meta">Posted Jan 1, 2010 1:20pm <span>by Admin</span></p>
            <p class="brief">Feugiat a turpis. Cum sociis natoque penatibus et magnis Cum sociis natoque penatibusmontes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante.</p>
          </li>
          <li>
            <p><a href="#"><?php echo $this -> Html -> image('dummies/dummy-avatar.jpg', array('alt' => '','class'=>'avatar'));?></a></p>
            <p class="meta">Posted Jan 1, 2010 1:20pm <span>by Admin</span></p>
            <p class="brief">Feugiat a turpis. Cum sociis natoque penatibus et magnis Cum sociis natoque penatibusmontes, nascetur ridiculus mus. Sed enim massa; pretium ac accumsan in, feugiat ac magna. Morbi ut lectus ante.</p>
          </li>
        </ol>
        <!-- ENDS comments list -->
      </div>
      <!-- ENDS comments -->
      <!-- leave comment -->
      <div class="leave-comment">
        <h3 class="custom">LEAVE A COMMENT</h3>
        <!-- form -->
        <form id="comment-form" action="#" method="post">
          <fieldset>
            <p>
              <label>NAME:</label>
              <input name="name"  id="name" type="text" />
            </p>
            <p>
              <label>EMAIL:</label>
              <input name="email"  id="email" type="text" />
            </p>
            <p>
              <label>WEB:</label>
              <input name="web"  id="web" type="text" />
            </p>
            <p>
              <label>COMMENT:</label>
              <textarea  name="comments"  id="comments" rows="5" cols="20"></textarea>
            </p>
            <br/>
            <br/>
            <p>
              <input type="button" value="" name="send" id="send" />
            </p>
          </fieldset>
          <p id="error">Error Message</p>
        </form>
        <p id="success">Thanks for your comments.</p>
        <!-- ENDS form -->
      </div>
      <!-- ENDS leave comment -->
    </div>
    <!-- ENDS posts -->
    <!-- sidebar -->
    <div id="sidebar">
      <!-- side-block -->
      <ul class="side-block">
        <li><a href="#" class="custom">Categories</a></li>
        <li><a href="#" class="custom"><span>Drawings</span></a></li>
        <li><a href="#" class="custom">Painting</a></li>
        <li><a href="#" class="custom">Logos</a></li>
        <li><a href="#" class="custom">Videos</a></li>
        <li><a href="#" class="custom">Misc</a></li>
      </ul>
      <!-- ENDS side-block -->
      <!-- side-block -->
      <ul class="side-block">
        <li><a href="#" class="custom">Archives</a></li>
        <li><a href="#" class="custom">2010</a></li>
        <li><a href="#" class="custom">2009</a></li>
        <li><a href="#" class="custom">2008</a></li>
        <li><a href="#" class="custom">2007</a></li>
      </ul>
      <!-- ENDS side-block -->
      <!-- side-block -->
      <ul class="side-posts">
        <li><a href="#" class="custom">Recent posts</a></li>
        <li> <a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="" /></a>
          <p class="title">Lorem ipsum dolor</p>
          <p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
        </li>
        <li> <a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="" /></a>
          <p class="title">Lorem ipsum dolor</p>
          <p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
        </li>
        <li> <a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="" /></a>
          <p class="title">Lorem ipsum dolor</p>
          <p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
        </li>
        <li> <a href="single.html"><img src="img/dummies/dummy-side-thumb.jpg" alt="" /></a>
          <p class="title">Lorem ipsum dolor</p>
          <p class="brief">Pellentesque elit massa, cursus id venenatis quis; feugiat a turpis. </p>
        </li>
      </ul>
      <!-- ENDS side-block -->
    </div>
    <!-- ENDS sidebar -->
  </div>
  <!-- ENDS MAIN -->