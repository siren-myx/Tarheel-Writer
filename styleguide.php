<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Style guide</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	

<body>
	<!-- first div starts-->
	<div id="navigation">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">								
					<span class="navbar-barnd">
					   <a href="index.php"><img src="./home_files/unc_icon.png" style="margin-top:0.6%; width:8%">
                            <strong>Tarheel Writer</strong> 
                            </a>
				        <a href="styleguide.php"><img src ="./home_files/paragraph.png" width="50px" height="auto"></a>     
				        <a href="essaywriter.php"><img src ="./home_files/write_essay.png" width="50px" height="auto"></a>
                <a href="essaysearcher.php"><img src ="./home_files/search.png" width="50px" height="auto"></a>
   
				  	</span>
			    </div>

                <span id="useraccount">Hello, <?php echo $_SESSION['sess_user']; ?></sapn>
                <img src="./home_files/user.png" height="auto" width="50px">
			    <button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
			</div>
		</nav>
	</div>
	<!-- first div ends-->


	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Step 1. Think of a Topic
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       Hold on! Before you start your essay, you need to think of a topic.
       Sit down somewhere cozy and comfortable (e.g. your room), silent (e.g. library), or 
       somewhere with lots of background noise, like your local coffee shop.
       Grab a sheet of paper and write down a single word for every topic that interests you.
       Narrow it down to one.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Step 2. Hone Your Thesis
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        The <b>thesis</b> is a statement that states that point you are trying to prove.
        Should be narrow but not too narrow. Think of statement that you are trying to prove
        and how you will prove it. That will be your thesis.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Step 3. Prepare an Outline
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
     	Outline is the key to a great essay. Grab a sheet of paper and write your thesis at the top.
      Now write out the points you would use to prove your thesis. 
        <p> For example </p>
        <ul>
          <li><b>Thesis:</b> The key to a great essay is to outline since it provides structure and allows you to lay out your thoughts.</li>
          <ol>
            <li>Provides Structure. How? Why?</li>
                <ul>
                  <li>Point 1</li>
                  <li>Point 2</li>
                  <li>etc.</li>
                </ul>
            <li>Laying out your thoughts. How? Why?</li>
                <ul>
                  <li>Point 1</li>
                  <li>Point 2</li>
                  <li>etc.</li>
                </ul>
            </ol>
            </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Step 4. Look at That Body!
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
 			You are ready. Sit down, take a sip of a drink of your choice, and write your body paragraphs. Remember, don't get caught up on the small details, the grammar, the word choices, just write. 

      <p><b>Don't forget to look back at your outline you just made!</b></p>
       </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Step 5. Introduction
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
     	You have your thesis, you have your own outline, and your body paragraphs. You are now ready to tackle on the introduction paragraph.

      <p>It's important to note that introduction paragraph is to be written last, not first. Why? Because you don't want to get carried away in your introduction paragraph and steal the limelight from the body paragraphs.</p>

      <p>Now, let's get started! Ask yourself why anyone would want to read this. Think of a hook, an idea, a thought, or a statement that would lure an unsuspecting reader into reading the paper. Once you got that down, use that to hook your reader in and write a short and sweet teaser. <b>Not a summary</b></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Step 6. Conclusion
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
     	  Write a short and sweet summary of your body paragraphs. Leave your reader with something satisfying to think about.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Step 7. Finishing Touches
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
     	 Add your work cited page. Print out your essay and revise revise revise! Give it to a friend, a teacher, a neighbor, or the whole world to read and get feedback. Don't be hurt if they don't like it at first. Use their feedback to fix weaknesses in your essay. You can never be too perfect ;)
      </div>
    </div>
  </div>
</div>

</body>
</html>
