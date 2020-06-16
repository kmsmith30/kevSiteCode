
    <div id="content">

      <div id="content-left">

        <div id="projects-left">
          <ul id="project-nav">
            <li><a href="<?= BASE_URL ?>/projects/cpp">C++</a></li>
          </ul>
        </div><!-- #projects-left -->

        <div id="projects">

        <?php foreach ($projects as $project): ?>

          <div id="projID-<?= $project->id ?>" class="project">
          <?php if ($project->img_name != ''): ?>
            <img src="<?= BASE_URL ?>/public/images/<?= $project->img_name ?>" alt="" width="100">
          <?php endif; ?>
            <h3 class="title"><a href="<?= BASE_URL ?>/projects/<?= $project->id ?>"><?= $project->title ?></a></h3>
            <p class="description"></p>
          </div><!-- #project-id -->
        <?php endforeach; ?>
        </div><!-- #projects -->
      </div><!-- #content-left -->

      <div id="content-right">
      </div><!-- #content-right -->
    </div><!-- #content -->
