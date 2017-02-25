<h4>Danh sách sản phẩm</h4>
<div class="category">
    <ul class="category">
    <?php foreach($categories as $node): ?>
        <?php echo StaticFunc::renderNodeLink($node); ?>
    <?php endforeach; ?>
    </ul>
</div>
