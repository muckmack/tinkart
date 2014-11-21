<div class="projectbox">
    <img src="<?php echo @$project['previewlink'] ?>" alt="" class="img-responsive"/>
    <div class="description">
        <?php echo @$project['description'] ?>
    </div>
    <div class="meta">
        <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo @$project['comments'] ?></div>
        <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> <?php echo @$project['upvotes'] ?></div>
        <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> <?php echo @$project['downvotes'] ?></div>
    </div>
</div>