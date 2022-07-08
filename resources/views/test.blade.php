<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Simple jsTree using ajax and load nodes on demand</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.8/themes/default/style.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.8/jstree.min.js"></script>
    <script type="text/javascript">
        $(function () {
			$('#SimpleJSTree').jstree({
				'core' : {
					'data' : {
						'url' : "/", 
						'data' : function (node) { 
							return { 'id' : node.id }; 
						} 
					} 
				} 
			});
        });
    </script>
</head>
<body>
    <div id="SimpleJSTree"></div>
</body>
</html>