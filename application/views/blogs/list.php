<nav class="sub-navigation navbar navbar-default" role="navigation" >
    <div class="wrapper">
        <div class="navbar-header">
            <a class="navbar-brand" href="/<?=$type_slug?>"><?=$title?></a>
        </div>

        <?php if ($user['logged_in'] && $user['is_admin']): ?>
            <ul class="nav nav-pills navbar-right l-margin-15">
                <li role="presentation" class="active"><a href="/admin/edit/#/blog">New Blog</a></li>
            </ul>
        <?php endif ?>

        <div class="clearfix"></div>
    </div>
</nav>

<section class="section t-padding-130 b-padding-100">
    <div class="wrapper">
        <div class="row">

            <?php if (sizeof($post_list) === 0): ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="watermark text-center v-margin-100">Blog coming soon!</h2>
                </div>
            <?php endif; ?>

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <?php foreach ($post_list as $post): ?>
                    <div class="blog-list-item">
                        <h2 class="blog-title"><a href="/<?=$type_slug?>/<?=$post['slug']?>"><?=$post['title']?></a></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="blog-meta b-margin-15">Posted by <?=$post['userName']?>, <time class="timeago" datetime="<?=$post['createdAt']?>"><?=$post['createdAt']?></time></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right blog-tags">
                                <?php foreach (explode(',', $post['tags']) as $tag): ?>
                                    <?php if ($tag != ''): ?>
                                        <span>&nbsp;<a href="/<?=$type_slug?>?tags=<?=$tag?>">[<?=$tag?>]</a></span>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <img class="img-responsive b-margin-15" src="<?=$post['cover']?>" />
                        <p><?=$post['summary']?></p>
                        <p class="blog-read-more"><a href="/<?=$type_slug?>/<?=$post['slug']?>">Read More</a></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        
        <div class="text-center">
            <?=$pagination?>
        </div>
    </div>
</section>