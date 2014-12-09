
            var num_paragraphs;
            var essay;
            //for introduction
            var introduction;
            var outlines;
            var thesis;

            //for body paragraphs
            var transitions = [];
            var topics = [];
            var evidences = [];
            var analysis = [];
            var closings = [];

            //for conclusion
            var introductionC;
            var restatement;
            var summary;
            var final;

            function outline() {
                //create introduction paragraph form
                essay = document.getElementById("title").value;
                num_paragraphs = document.getElementById("out").value;
                document.getElementById("outline").innerHTML = "";
                var form = document.createElement("div");
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
                outline.appendChild(form);
                form.appendChild(div);
                div.appendChild(label);
                div.appendChild(e);


                //now loop through #body paragraphs appending inputs to the form for each iteration
                for (var i = 0; i < num_paragraphs; i++) {
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
                    input.id = "topic" + i;
                    var evidence = document.createElement("label");
                    var evidenceInput = document.createElement("input");
                    evidence.innerHTML = "Paragraph " + j + " evidence:";
                    //evidence.className = "control-label col-sm-2";
                    evidenceInput.type = "text";
                    evidenceInput.name = "evidence" + j;
                    evidenceInput.className = "form-control";
                    evidenceInput.id = "evidence" + i;
                    form.appendChild(div);
                    form.appendChild(div2);
                    div.appendChild(label);
                    div.appendChild(input);
                    div2.appendChild(evidence);
                    div2.appendChild(evidenceInput);
                }
                //create submit button for the form
                var button = document.createElement("button");
                button.innerHTML = "Next";
                //button.type = "submit";
                button.className = "btn btn-default";
                button.onclick = "paragraphs()";
                button.addEventListener('click', paragraphs);
                form.appendChild(button);

                //change header
                document.getElementById("header").innerHTML = "Outline";
                document.getElementById("description").innerHTML = "Fill in the thesis and the topic sentence and evidence for each paragraph";
            }

            function paragraphs() {
                thesis = document.getElementById("thesis").value;
                for (var i = 0; i < num_paragraphs; i++) {
                    topics[i] = document.getElementById("topic" + i).value;
                    evidences[i] = document.getElementById("evidence" + i).value;
                }
                document.getElementById("header").innerHTML = "Paragraphs";
                document.getElementById("description").innerHTML = "Fill out each part of the paragraph";
                document.getElementById("outline").innerHTML = "";
                //create introduction paragraph form
                var form = document.createElement("div");
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
                e.value = thesis;
                //form -> div -> (label + input)
                var outline = document.getElementById("outline");
                var label2 = document.createElement("label");
                label2.innerHTML = "Introduction: ";
                var intro = document.createElement("input");
                intro.id = "intro";
                intro.className = "form-control";
                var label3 = document.createElement("label");
                label3.innerHTML = "Outline: ";
                var out = document.createElement("input");
                out.id = "out";
                out.className = "form-control";
                
                var div2 = document.createElement("div");
                var div3 = document.createElement("div");
                
                outline.appendChild(form);
                form.appendChild(div);
                form.appendChild(div2);
                form.appendChild(div3);
                div.appendChild(label2);
                div.appendChild(intro);
                div2.appendChild(label3);
                div2.appendChild(out);
                div3.appendChild(label);
                div3.appendChild(e);


                //now loop through #body paragraphs appending inputs to the form for each iteration
                for (var i = 0; i < num_paragraphs; i++) {
                    var j = i + 1;
                    var div = document.createElement("div");
                    div.className = "form-group";
                    var div2 = document.createElement("div");
                    div2.className = "form-group";
                    var div3 = document.createElement("div");
                    div2.className = "form-group";
                    var div4 = document.createElement("div");
                    div2.className = "form-group";
                    var div5 = document.createElement("div");
                    div2.className = "form-group";
                    var label = document.createElement("label");
                    //label.className ="control-label col-sm-2";
                    label.innerHTML = "Paragraph " + j + " topic sentence:";
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "topic" + j;
                    input.className = "form-control";
                    input.id = "topic" + i;
                    input.value = topics[i];
                    var evidence = document.createElement("label");
                    var evidenceInput = document.createElement("input");
                    evidence.innerHTML = "Paragraph " + j + " evidence:";
                    evidenceInput.value = evidences[i];
                    //evidence.className = "control-label col-sm-2";
                    evidenceInput.type = "text";
                    evidenceInput.name = "evidence" + i;
                    evidenceInput.id = "evidence" + i;
                    evidenceInput.className = "form-control";
                    var analysis = document.createElement("label");
                    var analysisInput = document.createElement("input");
                    analysis.innerHTML = "Paragraph " + j + " analysis:";
                    //evidence.className = "control-label col-sm-2";
                    analysisInput.type = "text";
                    analysisInput.name = "analysis" + i;
                    analysisInput.id = "analysis" + i;
                    analysisInput.className = "form-control";
                    var transition = document.createElement("label");
                    var transitionInput = document.createElement("input");
                    transition.innerHTML = "Paragraph " + j + " transition:";
                    //evidence.className = "control-label col-sm-2";
                    transitionInput.type = "text";
                    transitionInput.name = "evidence" + i;
                    transitionInput.id = "transition" + i;
                    transitionInput.className = "form-control";
                    var closing = document.createElement("label");
                    var closingInput = document.createElement("input");
                    closing.innerHTML = "Paragraph " + j + " closing:";
                    //evidence.className = "control-label col-sm-2";
                    closingInput.type = "text";
                    closingInput.name = "evidence" + i;
                    closingInput.id = "closing" + i;
                    closingInput.className = "form-control";

                    form.appendChild(div3);
                    form.appendChild(div);
                    form.appendChild(div2);
                    form.appendChild(div4);
                    form.appendChild(div5);
                    div3.appendChild(transition);
                    div3.appendChild(transitionInput);
                    div.appendChild(label);
                    div.appendChild(input);
                    div2.appendChild(evidence);
                    div2.appendChild(evidenceInput);
                    div4.appendChild(analysis);
                    div4.appendChild(analysisInput);
                    div5.appendChild(closing);
                    div5.appendChild(closingInput);
                }
                //conclusion paragraph
                var div1 = document.createElement("div");
                var div2 = document.createElement("div");
                var div3 = document.createElement("div");
                var div4 = document.createElement("div");
                
                var label1 = document.createElement("label");
                var label2 = document.createElement("label");
                var label3 = document.createElement("label");
                var label4 = document.createElement("label");
                
                var input1 = document.createElement("input");
                var input2 = document.createElement("input");
                var input3 = document.createElement("input");
                var input4 = document.createElement("input");
                
                input1.className = "form-control";
                input2.className = "form-control";
                input3.className = "form-control";
                input4.className = "form-control";
                
                input1.id ="con_introduction";
                input2.id = "con_restatement";
                input3.id = "con_summary";
                input4.id = "con_final";
                
                label1.innerHTML = "Restatement of introduction";
                label2.innerHTML = "Restatement of thesis";
                label3.innerHTML = "Summarize essay";
                label4.innerHTML = "Final sentence";
                
                div1.appendChild(label1);
                div1.appendChild(input1);
                div2.appendChild(label2);
                div2.appendChild(input2);
                div3.appendChild(label3);
                div3.appendChild(input3);
                div4.appendChild(label4);
                div4.appendChild(input4);
                
                form.appendChild(div1);
                form.appendChild(div2);
                form.appendChild(div3);
                form.appendChild(div4);
                
                //create submit button for the form
                var button = document.createElement("button");
                button.innerHTML = "submit";
                //button.type = "submit";
                button.className = "btn btn-default";
                //button.onclick = "paragraphs()";
                button.addEventListener('click', finish);
                form.appendChild(button);
            }

            function finish() {
                thesis = document.getElementById("thesis").value;
                outlines = document.getElementById("out").value;
                introduction = document.getElementById("intro").value;
                for (var i = 0; i < num_paragraphs; i++) {
                    transitions[i] = document.getElementById("transition" + i).value;
                    topics[i] = document.getElementById("topic" + i).value;
                    evidences[i] = document.getElementById("evidence" + i).value;
                    analysis[i] = document.getElementById("analysis" + i).value;
                    closings[i] = document.getElementById("closing" + i).value;
                }
                
                introductionC = document.getElementById("con_introduction").value;
                restatement = document.getElementById("con_restatement").value;
                summary = document.getElementById("con_summary").value;
                final = document.getElementById("con_final").value;
                
                document.getElementById("header").innerHTML = "Essay";
                document.getElementById("description").innerHTML = "The structure is complete. Edit and copy.";
                document.getElementById("outline").innerHTML = "";
                //var text = document.createElement("textarea");
                essay += "\n\n\t";
                essay += introduction + " ";
                essay += outlines + " ";
                essay += thesis + "\n\t";
                for (var i = 0; i < num_paragraphs; i++) {
                    essay += transitions[i] + " ";
                    essay += topics[i] + " ";
                    essay += evidences[i] + " ";
                    essay += analysis[i] + " ";
                    essay += closings[i] + "\n\t";
                }
                essay += introductionC + " ";
                essay += restatement + " ";
                essay += summary + " ";
                essay += final;
                //essay.concat() conclusion
                //text.appendChild(essay);
                
                var form = document.createElement("div");                
                var box = document.createElement("textarea");
                var button = document.createElement("button");                

                box.cols = "110";
                box.rows = 20;
                box.id = "essaybox";
                box.name ="essaybox";
                box.value = essay;
                box.className= "form-control";
                button.className = "btn btn-success";
                button.name = "submit";
                button.type = "submit";
                button.innerHTML = "Upload";
                var outline = document.getElementById("outline");
                outline.appendChild(form);
                form.appendChild(box);                
                form.appendChild(button);
                
            }
