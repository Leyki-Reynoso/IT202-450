<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Leyki Reynoso jr(lr22)</td></tr>
<tr><td> <em>Generated: </em> 7/5/2022 11:31:07 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone1-deliverable/grade/lr22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177436668-59b27aaa-99b3-4442-a6b0-c6a39dd70297.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177437138-37bf521e-84a9-426e-9f6d-7e067e9ef8f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177437263-518883a1-d37d-43b1-85bc-282c7f816854.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords must match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177437326-d1f6bf0b-a5f6-4913-b05b-6e3f42e9e7da.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177437471-6ef737ed-8e06-42b5-8113-89ca8dea7360.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not avalible<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177437673-b2a6d5b5-eb31-4810-8f8e-65d8cbcca32f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid data form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177438906-8dddf4d4-2979-4dff-8301-fb036d59310f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>a form its submitted with the inputted data, then it is check for<br>all the validation requirements, like password match, passwords length, existing username, etc. If<br>all conditions are met the data is saved on the database as a<br>new user.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177438421-821257fc-1f12-4005-b580-c255aad4c00d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password missmatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177438480-168412d4-1e90-4e2f-ac75-bd4166ea7b3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177438828-eeb20ba3-042d-42c5-a247-12bbbbb62426.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successfull login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The user inputs username or email and password then they are tested against<br>known credentials on the database. If these credentials exist and the match the<br>user is given access to the account.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177448455-b0aa2b30-630f-4b3e-8b2d-c128bc1560a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can log our<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177448617-df1e7877-0638-44bb-b721-a1b28f9488f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>must be logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The session is deleted and the user is sent back to the login<br>page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177448617-df1e7877-0638-44bb-b721-a1b28f9488f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>must be logged in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177453574-9edd47f5-084f-4e2b-a178-97ec0886a300.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>no permissions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177451431-a1586120-1456-4078-83fe-6c582063f1c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177451810-7ad68ae4-3333-4386-aeb9-67457bec31c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>the session variable user is checked if there is no session false is<br>returned and the user is sent to login page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>the session variable roles is used to check the users current role. if<br>the role is not what is required to access the page, the user<br>is sent back home.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177454005-7fd6a90a-5f83-4499-9976-06aa7823d1f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>styles.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I added a background with 2 colors that blend into each other,&nbsp; a<br>hover transition for the nav and the submit button, centered the menus and<br>changed font style and margins between things.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177454331-0814066c-ac0a-4ce6-a890-0b40571cd040.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error for changing password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>whenever an error occurred I called the flash function that was made to<br>simplify user end errors.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177454696-42d38515-1ea2-4624-a6e0-2d8170b9ab84.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>the data that is shown to the user(the username and email) is extracted<br>from the session variables. Then everything is allowed be changed through a form.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177458812-bef5bef0-9751-436d-8696-d60ec1567a43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177458562-163587de-118f-4366-b295-472d91c18638.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177458970-fae6d85f-f58e-426d-ba68-3398cffe2b3b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177459068-dc4a3144-c1d1-450e-9148-c05d80260cc1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password missmatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177459212-6506079c-f402-4189-982f-a1203b028253.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already in used<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177459356-a7610fe0-d6a1-4a39-b55c-baee8ed2bcad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email already in use<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177438906-8dddf4d4-2979-4dff-8301-fb036d59310f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177459554-b0482f0d-8243-443f-84a7-3b53d973152b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after username changed for user id 16<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/pull/45">https://github.com/wantley/IT202-450/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>An update query is called on the user columns with the new values<br>inputted in the input boxes.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/66690518/177460023-68052d5a-ffb6-4ce3-a7a8-3a6ca0aca77c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issue<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/wantley/IT202-450/projects/1">https://github.com/wantley/IT202-450/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://lr22-prod.herokuapp.com/Project/login.php">https://lr22-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone1-deliverable/grade/lr22" target="_blank">Grading</a></td></tr></table>