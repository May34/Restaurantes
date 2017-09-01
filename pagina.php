<?php
if(isset($_POST['valor'])){
			echo '
			<!doctype html>
			<html>
			<head>
				<script type="text/javascript">
						document.addEventListener("DOMContentLoaded", function(){ 
							setTimeout(function() {
								$("#goaway").fadeOut().empty();
							}, 5000);
						}, false);
			    </script>
			</head>
				
				<body>
					<div id=""teste">
						<h1>O pedido de número '.$_POST['valor'].' está pronto</h1>
					</div>
				</body>
			</html>
				';
		}
?>