# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game
## Github Link: [https://github.com/wantley/IT202-450/tree/prod/public_html/Project](https://github.com/wantley/IT202-450/tree/prod/public_html/Project)
## Project Board Link: 
## Website Link: https://lr22-prod.herokuapp.com/Project
## Your Name: Leyki Reynoso jr

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 
 
### Proposal Checklist and Evidence

- Milestone 1
    - [X] \(07/01/2022 of completion) User will be able to register a new account
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/01/2022 of completion) User will be able to login to their account (given they enter the correct credentials)
      -  Link to related .md file: [Link Name](link url)
  - [X] \(07/02/2022 of completion)User will be able to logout
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/02/2022 of completion) Basic security rules implemented
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/05/2022 of completion) Basic Roles implemented
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/05/2022 of completion) Site should have basic styles/theme applied; everything should be styled
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/05/2022 of completion) Any output messages/errors should be “user friendly”
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/03/2022 of completion)User will be able to see their profile
      -  Link to related .md file: [Milestone1](milestone1.md)
  - [X] \(07/03/2022 of completion) User will be able to edit their profile
      -  Link to related .md file: [Milestone1](milestone1.md)
- Milestone 2
  - [X] \(07/17/2022 of completion) What game will you be doing?
        [asteroids simplified]
        Briefly describe it.
        [you are in the middle of the screen and you shoot circles that come your way]
      -  Link to related .md file: [Milestone2](milestone2.md)
  - [X] \(07/01/2022 of completion) The system will save the user’s score at the end of the game only if the user is logged in
      -  Link to related .md file: [Milestone2](milestone2.md)
  - [X] \(07/17/2022 of completion) The user will be able to see their latest 10 scores
     -  Link to related .md file: [Milestone2](milestone2.md)
  - [X] \(07/17/2022 of completion) Create function(s) that output the following scoreboards
      -  Link to related .md file: [Milestone2](milestone2.md)
  - [X] \(07/17/2022 of completion) Create a Homepage (i.e., index.php)
      -  Link to related .md file: [Milestone2](milestone2.md)
- Milestone 3
  - [X] \(07/18/2022 of completion) Users will have credits associated with their account.
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/18/2022 of completion) Create a CreditsHistory table (id, user_id, credit_diff, reason, created, modified)
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/18/2022 of completion)Competitions table should have the following columns (id, name, duration, expires (value = now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean default false), did_calc (boolean default false), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created_by (user_id ref), created, modified)
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/21/2022 of completion) User will be able to create a competition
     -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/21/2022 of completion) Each new participant causes the Reward value to increase by 50% of the joining fee rounded up (i.e., at least 1)
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/22/2022 of completion) Have a page where the User can see active competitions (not expired)
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/22/2022 of completion) Create an association table CompetitionParticipants (id, comp_id, user_id, created, modified)
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/23/2022 of completion)User can join active competitions
      -  Link to related .md file: [Milestone3](milestone3.md)
  - [X] \(07/27/2022 of completion) Create function that calculates competition winners (clearly comment each step in the code)
      -  Link to related .md file: [Milestone3](milestone3.md)
- Milestone 4
  - [X] \(07/27/2022 of completion) User can set their profile to be public or private (will need another column in Users table)
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/27/2022 of completion) Anywhere a username is displayed should link to that user’s profile
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/27/2022 of completion)Viewing an active or expired competition should show the top 10 scoreboard related to that competition
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/27/2022 of completion)User will be able to see their competition history (active and expired)
     -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/28/2022 of completion) Add pagination to the Active Competitions view
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/28/2022 of completion) User’s score history will include pagination
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/28/2022 of completion) User with the role of “admin” can edit a competition where paid_out = false
      -  Link to related .md file: [Milestone4](milestone4.md)
  - [X] \(07/28/2022 of completion)Game should be fully implemented/completed by this point
      -  Link to related .md file: [Milestone4](milestone4.md)


### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board