<?php get_header(); ?>

    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="犬" class="top-image">
    </div>

    <section>
      <h2 class="sub-title">Latest</h2>

      <ul class="articles">

        

           <li class="article">
             <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
            
               <p class="article-content">ここに記事の内容が表示されます。
                 <br>ここに記事の内容が表示されます。</p>
               <p class="read-more"> <a href="">Read More</a></p>
             
           </li>

           <li class="article">
             <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
             <p class="article-content">ここに記事の内容が表示されます。
              <br>ここに記事の内容が表示されます。</p>
             <p class="read-more"> <a href="">Read More</a></p>
           </li>

          <li class="article">
             <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
             <p class="article-content">ここに記事の内容が表示されます。
              <br>ここに記事の内容が表示されます。</p>
             <p class="read-more"> <a href="">Read More</a></p>
          </li>

       

          <li class="article">
            <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
            <p class="article-content">ここに記事の内容が表示されます。
              <br>ここに記事の内容が表示されます。</p>
            <p class="read-more"> <a href="">Read More</a></p>
          </li>

          <li class="article">
            <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
            <p class="article-content">ここに記事の内容が表示されます。
              <br>ここに記事の内容が表示されます。</p>
            <p class="read-more"> <a href="">Read More</a></p>
          </li>

         <li class="article">
            <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
            <p class="article-content">ここに記事の内容が表示されます。
              <br>ここに記事の内容が表示されます。</p>
            <p class="read-more"> <a href="">Read More</a></p>
         </li>

    


      </ul>
    </section>

    <section>

     <h2 class="cotact-title">Contact</h2>

     <form action="" class="cotact-main">

      <input type="text" placeholder="お名前" class="contact-text">
      <input type="text" placeholder="メールアドレス" class="contact-text">
      <textarea name="t_name1" placeholder="お問い合わせ内容" class="contact-text"></textarea>

       <button>送信</button>

     </form>

    </section>

<?php get_footer(); ?>