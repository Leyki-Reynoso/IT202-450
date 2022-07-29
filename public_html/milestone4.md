<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Leyki Reynoso jr(lr22)</td></tr>
<tr><td> <em>Generated: </em> 7/29/2022 12:37:03 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-4-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181668396-77c35085-9c68-447c-bf1b-236d864a25e7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with visibility attribute<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181668787-3a966d88-7b75-41c7-9cad-e382faa938d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181668882-e8297b94-866e-4f90-a987-a80acc06ce07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile view view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/profile.php">https://lr22-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>If an user its checking its own profile they will automatically be sent<br>to the view section but they will be given the option to enter<br>the edit section, which will be hidden from other users. To make the<br>server public or private they can toggle the public box option and submit<br>which will modify the visibility attribute in the database.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Anywhere a username is display should link to the user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the home page scoreboards with the proper links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181674103-f8423d39-5c27-4cc8-a7d6-b5b3926494bb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the users can be clicked on<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181670622-e559757a-b716-4058-97d4-f36ea25814fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clicked on lr22 link(not the current user)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to the related pages on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Game_menu.php">https://lr22-prod.herokuapp.com/Project/Game_menu.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>the Date created, score, and use rare all extracted from the data base.<br>Then the user are all embedded as links with the a tag. When<br>the link is clicked the user is sent to the profile page with<br>a parameter on the link defined as ?id=(id of clicked user).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Viewing an Active or Expired competition should show a related top 10 scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing competition scoreboards</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181671401-a7f614a0-4128-4b3d-80b2-fc194a798fd4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page to see competitions<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181674389-7246af10-a6a8-471f-9622-496484ac18c8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition scoreboard after you chose which one to see<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to an active or expired competition</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Competitions_History.php?page=2">https://lr22-prod.herokuapp.com/Project/Competitions_History.php?page=2</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>a table is used to output the id expiration date and name of<br>competition after they are queried from the database. The user can then send<br>a form with the id of the competition the wish to see. Once<br>submitted they will be redirected to a competition scoreboard showing the best 10<br>scores with the users attached to it.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to see their competition history (active and expired) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181674751-664289f1-e436-410a-84da-792eb874f65a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page one of the competition history<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181674954-95d968e6-e711-410e-b02d-e0ad2af13625.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 2 of  competition history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Competitions_History.php?page=1">https://lr22-prod.herokuapp.com/Project/Competitions_History.php?page=1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>a query is done to get the total amount of records. That is<br>then divided by the offset(10 in this case) Another query is then executed<br>to get all competition records from (page-1)*10 to 10 records after it, using<br>the LIMIT&nbsp; keyword. By default 1 is chosen and if the user clicks<br>on any page box, then the value of page is updated to that<br>value and the page is updated.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to the Active Competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181675688-33ab24f7-9c0d-47f2-8bfc-928627dd5543.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181675728-422f4b43-8ff4-4b14-ac6c-7f47dff66d0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181675747-9747a91b-a328-49a6-9bd7-2ba50ecd008e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Active Competitions page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/active_competitions.php?page=3">https://lr22-prod.herokuapp.com/Project/active_competitions.php?page=3</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181682858-7172c36b-7c14-47de-a980-0e15f7154c1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181682924-9ea2dc2c-09cf-498f-b3ad-29e6f17163e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181682960-c0feb146-43bb-43ac-9e1d-cbafd0e9585b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>page 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add url to user profile (might want to use a public profile)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/profile.php?id=20">https://lr22-prod.herokuapp.com/Project/profile.php?id=20</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181677070-0603b4f8-3bd3-4186-b88d-5cff3e728fe5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>To edit a competition the user types the id on the box bellow.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181677160-b4513891-8de3-400d-84fc-17dcc99cb50e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>editing a competition(id is readonly)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181677381-5bab18fc-bbe6-4be3-9f14-c147bb819068.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows message at the top<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition (db view)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181677560-a509f694-1159-48a3-b550-5b0c023436cd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181677618-224caeca-0d1a-4744-8d37-dd3eb59389e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/admin/Alter_competitions.php">https://lr22-prod.herokuapp.com/Project/admin/Alter_competitions.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>for pagination and outputting I used the same methods as i did in<br>active competitions. The difference being that submitting the id of a competition brings<br>you to a page to alter a competition instead of a scoreboard. For<br>updating a form is created that is populated with the values that it<br>has at the moment. If the user wishes to change anything, they can<br>modify it and submit the form. Submitting the form will update the values<br>in the database.&nbsp; using the update keyword.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the message showing a score can't be generated when logged in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181678066-21ea9390-5cf5-4a7c-b967-cb329df7420f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message at the top<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181679472-6c013493-4b2f-47ed-9abe-f60eeabe8336.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message during game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181678239-58f8e2ca-8516-4fc1-b6fd-60a2574cb69d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Game in progress<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181679561-5cf8a920-3aac-45d8-af3b-b1385bc155ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Game was saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/Game_menu.php">https://lr22-prod.herokuapp.com/Project/Game_menu.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/115">https://github.com/wantley/IT202-450/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>when the game is over an ajax request is done to save the<br>scores. In the file to save the scores it is checked if the<br>user is logged in or not. If the user is not logged in<br>the message &quot;not saved&quot; is returned and displayed to the user as an<br>alert else the message &quot;saved&quot; is returned and displayed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181680102-3d88b4ee-6d9a-4aa7-9a64-9c37b913c6e1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues done part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181680184-96a4d712-848e-44b1-8e7d-687bb279d694.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues done part 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181680278-d31617fe-34c3-4d79-b392-5906081752fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues done part 3<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-4-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>