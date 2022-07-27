<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Leyki Reynoso jr(lr22)</td></tr>
<tr><td> <em>Generated: </em> 7/27/2022 9:20:42 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-3-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will have credits associated with their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's table with the new credits column with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/180847874-b9e3c545-6587-4230-bd63-657ec8be6241.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users_table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code/sql that properly updates the credit/balance value based on CreditHistory</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181057772-742b949f-aa77-49a8-962d-b350aeb3b70e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>update credit balance through the CreditHistory table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the credits displaying on the user's profile page (a value > 0 must show)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/180885656-bd741035-5143-48a7-a126-22ce07ddf8fb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Credits in the profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the code snippet of how the credits are fetched/displayed on the profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181058393-df941e17-d480-4623-b142-45f5e25dc0b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>html chunk<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181059137-e9f102f3-4e7e-4e4b-9e1f-422cb356f442.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>js section to update the code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181127297-f31c403b-8653-403d-ad05-a184c606649e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>server extraction of the credit through php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process for updating the credit/balance value and displaying it on the profile page</td></tr>
<tr><td> <em>Response:</em> <p>I created a span tag to display a credits: 0 and then I<br>modify the value by accessing the innerHTML of the span tag and modifying<br>to the current credit of the user. Credit which I get doing an<br>ajax call to a php file that extracts the credit from the user<br>database.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file (profile page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/profile.php">https://lr22-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Create a CreditHistory Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the CreditHistory table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181135873-0261d430-43bc-49c1-ad6a-2f5a933fd20a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>creditHistory table with values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Competitions Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Competitions table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181147287-9ec4695b-fb9e-477a-a43b-36c64ed4564c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition table part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181135552-733d9ad1-8f97-45bb-a981-224395c454fb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition table part 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181135577-59ec547d-0a9f-49ac-8708-494081593e87.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Competition table part 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to create a competition </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Create Competition form with valid date filled in (including the expected cost)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181056422-982100af-54b9-4c8f-8fa3-fa04dfb0a5ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>form to create competition<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot(s) showing success and error messages of the creation process</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181132510-c9b734e3-8f71-4448-baf1-36d11d7e4cd0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>all warning appearing upper part of the form<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181132750-c75700f5-64dc-4542-9e84-99a2d9f0112c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>all warning appearing lower part of the form<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181133416-bb6ef74d-7663-4846-a03e-cdc338ae9b9a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the new record in the Competitions table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181147765-bf7860ff-1d20-460e-8f11-bb657df1bbc2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>new created competition part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181136520-797ba1f7-5021-40e2-be9e-1a91005a6e35.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>new created competition part 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181136587-e55309b0-ea09-42e4-aca0-324ecc2364d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>new created competition part 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the CreditHistory related to creating this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181136672-3bda508a-6726-4fd3-aa59-5f5c765708e7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the last record is the recently added one<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of the CompetitionParticipants table with the new record for this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181168174-94b4ca1c-715c-47cd-a99c-7a3026c9dbbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>table of 2 people that joint the competition<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code flow for the creation process</td></tr>
<tr><td> <em>Response:</em> <p>A for is called that on Submit calls the function validate which cchecks<br>all the requirements that the data has to meet for the competition to<br>be created the data is then the php section of the code is<br>called to insert into the competition table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file (create competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/create_competition.php">https://lr22-prod.herokuapp.com/Project/create_competition.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Each new participant causes the Reward value to increase by 50% of the joining fee rounded up </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add before and after screenshots of the Competition record in the DB when a user joins (showing the reward change)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181151315-94dd7a6a-85a1-4028-bf99-f905e35bf841.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181151664-6fc598b1-8e13-4daa-89d6-550d958a52a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the reward calculation logic (code)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181151898-4ce81e41-d5bb-4366-a680-1aaad3d292bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logic for the reward calculation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the calculation</td></tr>
<tr><td> <em>Response:</em> <p>join fee is divided by 2 and multiplied by the ammount of current<br>participants then the starting_reward is added. The result of this is retrieved from<br>the database and then inserted into the database with an update.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (join competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/active_competitions.php">https://lr22-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Have a page where the user can see active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions page list with a few active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181161222-4989a648-cb05-4127-844e-059c5f170b5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>active competitions output<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the query including the WHERE clause</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181167166-353b504f-3754-4854-9488-fa0ed4b20e27.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code that calls and displays the data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the query and the code used to display this data</td></tr>
<tr><td> <em>Response:</em> <p>the query retrieves expiration date, name and id of the first ten competitions<br>where the current day is smaller than the expiration day. The data is<br>then saved as an array and display one by one.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (list competitions)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/active_competitions.php">https://lr22-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> CompetitionParticipants table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181168174-94b4ca1c-715c-47cd-a99c-7a3026c9dbbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can join active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of the CreditHistory table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181168821-9957015e-3c7c-4d67-920d-72f03614bead.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181168950-87fb77ec-a10e-4a6f-a1a5-07b043341019.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of the Competitions table showing the participant count update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181169412-270845d1-954c-420a-b59b-ff602c5877f9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181170009-58ff313e-fd2f-456a-a580-d82a8cf45c3b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot(s) showing proper error and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181170610-7b122b9d-c352-464d-a5ed-15929d537008.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user already registered and can&#39;t afford errors.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181171001-30fbdfca-fc56-41ad-88dd-317919dd4db6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful submission message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/active_competitions.php">https://lr22-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the logic/code for joining a competition and the involved steps</td></tr>
<tr><td> <em>Response:</em> <p>from the active participation window there is a simple form that allows the<br>user to join a competition by typing the id of the competition and<br>submitting it.&nbsp;<div><br></div><div>The id is sent to a php file through an ajax POST<br>request.&nbsp;</div><div><br></div><div>the php file checks if the competition exists.&nbsp;</div><div><br></div><div>if the competition exist the file<br>checks if the user is signed up and if it has enough money.<br></div><div><br></div><div>If<br>all three conditions are met the user is inserted into the participation table,<br>the join_fee is charged to the user and the reward and current participants<br>of the competition are updated.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file (any join page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/active_competitions.php">https://lr22-prod.herokuapp.com/Project/active_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Create a function to calculate winners </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the whole code process with the clear comments (ensure your ucid and date are shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181250874-2a5e1d42-e002-4642-a702-05c5127ad0d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>querying the needed values from competitions table and setting up arrays to save<br>those values<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181250981-cd27f3c1-f163-4495-ade5-74483de2af8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>going through each competition and checking that the minimum amount of participants are<br>joined, if requirement is met the values are saved in the array otherwise<br>the did_calc value is set to true and the code stops<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181252182-72715ace-1f31-479e-927f-0a1fba778bf3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>for loop 1: the for loop goes through all competitions and gets the<br>winners<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181252481-2c4faff7-b148-441d-ab62-8daa7d747eda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>for loop 2: for saves values on the creditHistory table for the winners<br>then calls the update credit function. Finally it set the paid_out and did_calc<br>values to true<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mention which winner calculation you chose (copy the text from the proposal for your choice)</td></tr>
<tr><td> <em>Response:</em> <p>Option 1: Scores are calculated by the sum of the score from the<br>Scores table where it was earned/created between Competition start and Competition expires timestamps<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add before and after screenshots of the Competitions table of valid and invalid competitions being successfully processed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181247564-7aa452b7-1965-4d9e-ade3-60945ebb4ce1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181247856-7ca859c1-6c8e-4b21-bf82-db61170d9db0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the calculation steps and payout process</td></tr>
<tr><td> <em>Response:</em> <div>first the code queries the needed values from competitions table and setting up<br>arrays to save those values.</div><div><br></div><div><div>then the code goes throug each competition and checks<br>that the minimum amount of participants are joined, if requirement is met the<br>values are saved in the array otherwise the did_calc value is set to<br>true and the code stops.</div></div><div><br></div><div><div>a for loop then goes through all 10 competitions<br>gets the winners, and updates the credit History table for each winner. Finally<br>the did_calc and paid_out values are updated for the affected competition records.</div></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/85">https://github.com/wantley/IT202-450/pull/85</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/181254708-eb717086-a424-4993-87f7-fbbc9108e9c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Projects page <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone-3-arcade-project/grade/lr22" target="_blank">Grading</a></td></tr></table>