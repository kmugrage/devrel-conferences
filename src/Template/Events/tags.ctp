<h1>
    Bookmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
<?php foreach ($events as $event): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($event->title, $event->url) ?></h4>
        <small><?= h($event->url) ?></small>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph(h($event->description)) ?>
    </article>
<?php endforeach; ?>
</section>
