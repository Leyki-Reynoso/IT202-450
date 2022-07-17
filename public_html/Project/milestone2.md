<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Leyki Reynoso jr(lr22)</td></tr>
<tr><td> <em>Generated: </em> 7/17/2022 5:10:55 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-2-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>A similar game to asteroids but you are stuck in the middle of<br>the screen.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>you are in the middle of the screen and you can shoot with<br>your mouse. The enemies come from outside of the screen and if you<br>shoot them they die, if they touch you, you die.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179421909-78b80c78-981e-425c-ae86-3758fec62737.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the game during gameplay<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/61">https://github.com/wantley/IT202-450/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Game.html">https://lr22-prod.herokuapp.com/Project/Game.html</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179422176-eb86377e-d462-4079-bdaa-9b32904086f5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>score saved confirmation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179422503-a83d13f4-1da1-4f40-9354-8433f2f34592.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>score entries in the database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>when the game over state is reached, the function gameover() calls the function<br>save() which does an ajax post request to save_scores.php. This file Inserts the<br>score and user_id into the the Scores table.&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/61">https://github.com/wantley/IT202-450/pull/61</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179422691-a121ab3a-9f35-46da-be89-935b8dec2a2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the 10 most recent scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>when you enter the profile page a php code is executed that queries<br>the database. It queries the scores table for the values where the user<br>id is equal to the current user id. Then orders the results by<br>created in descending order and limits the output to 10.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/61">https://github.com/wantley/IT202-450/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/profile.php">https://lr22-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179422343-fbd51bab-bfac-46cf-a579-6e5b22bd73bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>sql set up for the function<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179422452-45c753d1-4cfa-4fd5-8912-d2f05c658904.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>outputting the results<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>the function is executed when an html form is submitted. This send the<br>php file a post request with the a string that holds what scores<br>you want to see(&#39;week&#39;, &#39;month&#39;, &#39;life&#39;). Then the function decides which query to<br>do execute in order to get the appropriate result. What changes amongst the<br>three queries in the&nbsp; INTERVAL in the function date_sub(now(),INTERVAL) where I call week<br>to get the week records, month to get the month records and I<br>don&#39;t call the function at all to get the life time.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/61">https://github.com/wantley/IT202-450/pull/61</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179424260-d3893647-8e90-4f3a-bdfc-8fae72155704.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>lifetime scoreboard screenshot <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179424164-c16d1452-0e67-435e-8fe0-48c039a59d74.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>weekll scoreboard screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179424240-dbaa97fe-f523-48cd-b0bf-c277b96b7792.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>monthly scoreboard screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>the play button its an link to the game.html file the description its<br>a paragraph, and the Menu title its an h2 tag. The scoreboard its<br>shown by calling the previously shown function and they are changed by a<br>form that recalls the function with a different parameter. The form being the<br>three buttons at the bottom of the screen.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/61">https://github.com/wantley/IT202-450/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Game_menu.php">https://lr22-prod.herokuapp.com/Project/Game_menu.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/179424932-dfb88973-cfaa-4375-8c86-6f8b424cd3b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I forgot about this until last minute and didn&#39;t have time to make<br>it. Sorry about that<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/login.php">https://lr22-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-2-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>