<?php if($url): ?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="<?=$url?>"></script>
<script>
    $(function() {
        new ZammadChat({
            title: 'Duvidas? Fale conosco',
            background: <?=json_encode($background)?>,
            fontSize: '12px',
            chatId: 1
        });
    });
</script>
<?php endif ?>
