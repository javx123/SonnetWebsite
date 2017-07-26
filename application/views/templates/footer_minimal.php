<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="/js/common/main.js"></script>
<?php foreach ($js_files as $index => $js_file): ?>
<script src="<?=$js_file?>"></script>
<?php endforeach ?>
</body>
</html>
