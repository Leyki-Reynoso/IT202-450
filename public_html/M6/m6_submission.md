<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Leyki Reynoso jr(lr22)</td></tr>
<tr><td> <em>Generated: </em> 7/6/2022 7:59:28 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/hw-html5-canvas-game/grade/lr22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>Arcade shooter<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/M6/html5.html">https://lr22-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/50">https://github.com/wantley/IT202-450/pull/50</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I made the ship move in 2 dimensions instead of one, and removed<br>the shooting.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177659936-f875a602-961a-42b8-9b06-e0d5c71417c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ship in the middle of the screen<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177660696-3090ae28-fb51-45d7-80a7-8b0f6037f774.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>setting up the movement variables.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177660660-4fefca8b-edef-4d47-a0bd-1dd88a3621c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>keydown and keyup detection<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177660990-9555276b-7376-4f66-a70a-1bdc5f2e99e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>movement and avoid ship from going out of bounds<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>generated little boxes that gives point to the player like in the collect<br>game.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177659936-f875a602-961a-42b8-9b06-e0d5c71417c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the green boxes are the collectable ones.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177661294-724e8fdd-7db0-4470-b919-24a7688ea319.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>function to create the boxes<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177661442-aba02faa-cad3-48a1-99f4-45504c4a200c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>sets up spawn interval for boxes and creates the first box<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177661602-73671588-411a-418c-a20b-82011ee333db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>creates the boxes on the canvas and sets up box collisions<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned how to use the draw() to show already created objects on<br>screen. I also learned how to&nbsp; set up time intervals with the set<br>Interval function. And finally the most interesting thing I learned was how to<br>use arrays and foreach() loops to play around with already created objects, that<br>one was very interesting.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/hw-html5-canvas-game/grade/lr22" target="_blank">Grading</a></td></tr></table>