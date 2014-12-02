<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                //create introduction paragraph form
                var introForm = document.getElementById("form");
                /*introForm.setAttribute('method', "post");
                introForm.setAttribute('action', "submitoutline.php");
		introForm.id = "form";
		introForm.role = "form";
		introForm.className = "form-horizontal";*/
                //create div
		var div = document.createElement("div");
		div.class = "form-group";
		//create label + input in div
		var label = document.createElement("label");
		//label.className ="control-label col-sm-2";
		label.innerHTML = "Thesis: ";
                var e = document.createElement("input");
                e.type = "text";
                e.name = "thesis";
		e.className = "form-control";
                e.id = "thesis";
                //form -> div -> (label + input)
		var outline = document.getElementById("outline");
		outline.appendChild(introForm);
		introForm.appendChild(div);
		div.appendChild(label);
		div.appendChild(e);
		

		//now loop through #body paragraphs appending inputs to the form for each iteration
		for(var i=0; i< <?php echo $_POST["quantity"] ?>; i++){
			var j = i + 1;
			var div = document.createElement("div");
			div.className = "form-group";
			var div2 = document.createElement("div");
			div2.className = "form-group";
			var label = document.createElement("label");
			//label.className ="control-label col-sm-2";
			label.innerHTML = "Paragraph " + j + " topic sentence:";
			var input = document.createElement("input");
			input.type = "text";
			input.name = "topic" + j;
			input.className = "form-control";
			var evidence = document.createElement("label");
			var evidenceInput = document.createElement("input");
			evidence.innerHTML = "Paragraph " + j + " evidence:";
			//evidence.className = "control-label col-sm-2";
			evidenceInput.type = "text";
			evidenceInput.name = "evidence" + j;
			evidenceInput.className = "form-control";
			var form = document.getElementById("form");
			form.appendChild(div);
			form.appendChild(div2);
			div.appendChild(label);
			div.appendChild(input);
			div2.appendChild(evidence);
			div2.appendChild(evidenceInput);
		}
		//create submit button for the form
		var button = document.createElement("button");
		button.innerHTML = "submit";
		button.type="submit";
		button.className ="btn btn-default";
		introForm.appendChild(button);
		//add hidden forms to carry over previous input
            });
        </script>
    </head>              
    <body>
	<nav id="nav01" class ="navbar navbar-inverse"></nav>
	<div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center">Outline</h1>
                <p style="text-align: center">Fill in the thesis and the topic sentence and evidence for each paragraph</p>
            </div>
        </div>
	<div id="outline" class="container">
        	Essay type: <?php echo $_POST["style"]?>
		<form class="form-horizontal" id="form" role="form" action="paragraph.php" method="post">
			<input type="hidden" name="style" value="<?php echo $_POST["style"]?>">
			<input type="hidden" name="quantity" value="<?php echo $_POST["quantity"]?>">
		</form>
	</div>

	<script src="header.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
