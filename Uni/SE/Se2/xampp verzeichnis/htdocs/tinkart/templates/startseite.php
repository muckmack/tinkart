<div class="container">

    <a href="#" id="tinkart">
        <img src="<?php echo base_url() ?>/img/logo.png" id="logo" alt=""/>
        Tinkart
    </a>

    <h1><?php echo $heading ?></h1>

    <h2>Featured</h2>

    <div class="row">
        <?php foreach($projects as $project): ?>
        <div class="col-md-6">
            <?php echo View::make('projectbox')->set('project', $project) ?>
        </div>
        <?php endforeach; ?>
    </div>


    <div class="row">

        <div class="col-md-3">
            <h2>Best</h2>

            <div class="projectbox">
                <img src="img/Bild1.jpg" alt="" class="img-responsive"/>
                <div class="description">
                   In diesem Projekt geht es um folgende glohreiche Idee...
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>

            <div class="projectbox">
                <img src="img/Bild2.jpg" alt="" class="img-responsive"/>
                <div class="description">
                   Diese verrückte Idee stammt aus Norwegen. Hier haben sich Bastler einen Kicker Tisch gebaut...
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>

            <div class="projectbox">
                <img src="<?php echo base_url() ?>/img/Bild3.jpg" alt="" class="img-responsive"/>
                <div class="description">
                   Jeder kennt das Problem Eiswürfel nur mit Schwierigkeiten aus der Form herauszuquetschen....
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h2>Newest</h2>

            <div class="projectbox">
                <img src="<?php echo base_url() ?>/img/Bild4.jpg" alt="" class="img-responsive"/>
                <div class="description">
                  Dieser selbstgebaute elektronische cityroller ist die Erfüllung eines Traumes von Lisa Kukalu...
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>

            <div class="projectbox">
                <img src="<?php echo base_url() ?>/img/strand1.jpg" alt="" class="img-responsive"/>
                <div class="description">
                  Sie erleben viel Stress im Bürdo? Sie kennen das Gefühl von Rückenschmerzen durch zu langes sitzen? Dann schauen sie sich...
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>

            <div class="projectbox">
                <img src="img/strand1.jpg" alt="" class="img-responsive"/>
                <div class="description">
                  Ein fliegender Teppich, der bis zu 4 Personen tragen kann. Das halten sie nicht für möglich? Dass lassen sie sich überraschen mit...
                </div>
                <div class="meta">
                    <div class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 133</div>
                    <div class="upvote"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> 4</div>
                    <div class="downvote"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> 12</div>
                </div>
            </div>
        </div>

    </div>


</div> <!-- /container -->
