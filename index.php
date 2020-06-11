<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <title>About Dog</title>
</head>
<body>
  <div class="container">
    <header>
      <h1>About Dog</h1>
      <nav>
        <ul class="header-right">
          <li>Top</li>
          <li>Latest</li>
          <li>Contact</li>
        </ul>
      </nav>
    </header>
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

    <footer>
      <small>@ 2019 ALL RIGHT RESERVED</small>
    </footer>

  </div>
</body>
</html>