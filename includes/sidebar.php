                            <div class="block">
                              <h3>Big Brother</h3>
                              <div class="block__content">
                                <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
                              </div>
                            </div>

                            <div class="block">
                              <h3>Где вы?</h3>
                              <div class="block__content">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae7cd38520ece781cd09a4bf47873e701a0a9c63d69dff2c0679382986a1dc961&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>

                              </div>
                            </div>


                            <div class="block">
                              <h3>Красивая галерея</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">
                                  <article class="article">
                                    <div class="article__image" style="background-image: url(/media/images/javascriptizer.jpg);"></div>
                                    <div class="article__info">
                                      <a href="/pages/galery.php">Галерея JS</a>

                                    </div>
                                </div>
                              </div>

                            </div>


                            <div class="block">
                              <h3>Веб приложение на jQuery</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">
                                  <article class="article">
                                    <div class="article__image" style="background-image: url(/media/images/generator.png);"></div>
                                    <div class="article__info">
                                      <a href="/pages/text-shadow-generator.php">Генератор стилей CSS </a>

                                    </div>
                                </div>
                              </div>

                            </div>

                            <div class="block">
                              <h3>Красивая визитка</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">
                                  <article class="article">
                                    <div class="article__image" style="background-image: url(/media/images/accordion1.jpg);"></div>
                                    <div class="article__info">
                                      <a href="/isolation/accord.php">Аккордеон на jQuery </a>

                                    </div>
                                </div>
                              </div>

                            </div>

                            <div class="block">
                              <h3>Использование технологии Ajax</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">
                                  <article class="article">
                                    <div class="article__image" style="background-image: url(/media/images/ajaxic1.jpg);"></div>
                                    <div class="article__info">
                                      <a href="/pages/relation.php">Форма обратной связи с AJAX</a>

                                    </div>
                                </div>
                              </div>

                            </div>



                            <div class="block">
                              <h3>Топ читаемых статей</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">
                                  <?php
                                  $articles = mysqli_query($connection, "SELECT * FROM `articles`  ORDER BY   `views` DESC LIMIT 5"); ?>

                                  <?php

                                  while ($art = mysqli_fetch_assoc($articles)) {

                                  ?>

                                    <article class="article">
                                      <div class="article__image" style="background-image: url(/static/images/<?php echo $art['image']; ?>);"></div>
                                      <div class="article__info">
                                        <a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?> </a>
                                        <div class="article__info__meta">
                                          <?php
                                          $art_cat = false;
                                          foreach ($categories as $cat) {
                                            if ($cat['id'] == $art['categorie_id']) {
                                              $art_cat = $cat;
                                              break;
                                            }
                                          }
                                          ?>
                                          <small>Категория: <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']; ?></a></small>
                                        </div>
                                        <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']), 0, 100, 'utf-8') . ' ... '; ?></div>
                                      </div>
                                    </article>
                                  <?php
                                  }
                                  ?>

                                </div>
                              </div>
                            </div>

                            <div class="block">
                              <h3>Комментарии</h3>
                              <div class="block__content">
                                <div class="articles articles__vertical">

                                  <article class="article">

                                    <?php
                                    $comments = mysqli_query($connection, "SELECT * FROM `comments`  ORDER BY   `id` DESC LIMIT 5");



                                    while ($comment = mysqli_fetch_assoc($comments)) {

                                    ?>

                                      <article class="article">
                                        <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email']); ?> );"></div>
                                        <div class="article__info">
                                          <a href="/article.php?id=<?php echo $comment['articles_id']; ?>"><?php echo $comment['author']; ?> </a>
                                          <div class="article__info__meta"></div>


                                          <div class="article__info__preview"><?php echo mb_substr(strip_tags($comment['text']), 0, 100, 'utf-8') . ' ... '; ?></div>
                                        </div>
                                      </article>
                                    <?php
                                    }
                                    ?>


                                </div>
                              </div>
                            </div>