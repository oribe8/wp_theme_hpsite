<?php get_header(); ?>
    <main>
        <div id="slidewrapper">
            <!-- スライドショー -->
            <div id="slideshow">
                <div class="slideimage">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/slideshow1.png')); ?>" alt="スライドショーの画像">
                </div>
                <div class="slideimage">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/slideshow2.png')); ?>" alt="スライドショーの画像">
                </div>
                <div class="slideimage">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/slideshow3.png')); ?>" alt="スライドショーの画像">
                </div>
            </div>
            <!-- スライドショーの前後ボタン -->
            <span id="prev"></span>
            <span id="next"></span>
            <!-- スライドショーのインジケーター -->
            <ul id="indicator">
                <li class="slidelist slide1 listfocus" value="1"></li>
                <li class="slidelist slide2" value="2"></li>
                <li class="slidelist slide3" value="3"></li>
            </ul>
        </div>
        <div id="indexbottom">
            <div class="indexitem">
                <h3>お知らせ</h3>
                <dl>
                    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <dt><time datetime="<?php echo get_the_date('Y-m-d') ?>"><?php the_date(); ?></time>：<?php the_title(); ?></dt>
                        <dd><?php the_content(); ?></dd>
                    <?php endwhile; else : ?>
                        <dt>投稿はありません。</dt>
                        <dd></dd>
                    <?php endif; ?>
                </dl>
            </div>
            <div class="indexitem">
                <h3>診療時間</h3>
                <div id="timetable">
                    <table>
                        <tr>
                            <th></th>
                            <th scope="col">月</th>
                            <th scope="col">火</th>
                            <th scope="col">水</th>
                            <th scope="col">木</th>
                            <th scope="col">金</th>
                        </tr>
                        <tr>
                            <th scope="row">9:00～12:00</th>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                        </tr>
                        <tr>
                            <th scope="row">14:00～17:00</th>
                            <td>○</td>
                            <td>○</td>
                            <td>&times;</td>
                            <td>○</td>
                            <td>○</td>
                        </tr>
                    </table>
                    <p>※水曜の午後、土、日、祝日はお休みです。</p>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>