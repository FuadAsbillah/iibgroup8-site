# iibgroup8-site (DS1202 AS03 Group Project)

# Team Members & Roles
* Member 1 (Repository Owner): Fuad - Developed the Homepage and Order page
* Member 2: Amzar - Developed the Culture page and Parts page
* Member 3: Amreen - Developed the Gallery page and Join Us page
---
# About the website
JDM Zone is a fan site for Japanese Domestic Market car culture. A dark, red-accented "street/tuning" aesthetic aimed at enthusiasts who like Skylines, Supras, drifting, and aftermarket builds.
* Pages included: Homepage, Order, Culture, Parts, Gallery, and Join Us.
---
# How to clone and run it locally with Laravel Herd
1. Clone the repository into your local Laravel Herd directory
   ```bash
   git clone https://github.com/FuadAsbillah/iibgroup8-site.git

2. Open Laravel Herd and ensure the project path is linked. Herd will automatically serve it at
   ``` bash
   https://iibgroup8.test

3. Open your browser and navigate to https://iibgroup8.test to verify the green SSL padlock icon.
---
# Git Workflow Used
Our team adhered to a strict feature-branch workflow with a protected main branch:
* No direct commits were made to main.
* All changes were developed on feature-branches (e.g., feature/homepage, feature/order-page).
* Every changes was merged through reviewed and approved Pull Requests (PRs).
---
# Merge Conflict Resolution
While our team did not encounter a live merge conflict during this project, we understand the proper Git procedure to resolve one if it were to occur:
1. Identify the Conflict: If two team members edit the the exact same line of code on separate branches, attempting to merge the second branch into `main` will result in a conflict prompt from GitHub.
2. Pull Latest Changes: Switch to your local `main` branch, pull the latest updates, switch back to your feature branch, and merge `main` into it:
   ``` bash
   git switch main
   git pull origin main
   git switch feature/your-branch
   git merge main
3. Resolve in Code Editor: Open the conflicting file in your editor (like Visual Studio Code). Git will insert conflict markers (<<<<<<<, =======, >>>>>>>). Manually edit the file to keep the correct code and delete the markers.
4. Complete the Merge: Stage the resolved file, commit the changes, and push them to complete the merge:
   ``` bash
   git add .
   git commit -m "Resolve merge conflict"
   git push origin feature/your-branch
---
# Merged Pull Requests Links 
* Link to PR #1: https://github.com/FuadAsbillah/iibgroup8-site/pull/1
* Link to PR #2: https://github.com/FuadAsbillah/iibgroup8-site/pull/2
* Link to PR #3: https://github.com/FuadAsbillah/iibgroup8-site/pull/3
* Link to PR #4: https://github.com/FuadAsbillah/iibgroup8-site/pull/4
* Link to PR #5: https://github.com/FuadAsbillah/iibgroup8-site/pull/5
* Link to PR #6: https://github.com/FuadAsbillah/iibgroup8-site/pull/6
* Link to PR #7: https://github.com/FuadAsbillah/iibgroup8-site/pull/7
* Link to PR #8: https://github.com/FuadAsbillah/iibgroup8-site/pull/8
* Link to PR #9: https://github.com/FuadAsbillah/iibgroup8-site/pull/9

# Individual Reflection
* Fuad: I contributed on making the homepage and order page of our website. What I learned from Git collaboration is that it makes project work easier in a more organized manner. It also helps us learn to work on projects in a professional way. Furthermore, I understand why enforcing a feature-branch workflow and utilizing Pull Requests is important to keep the codebase clean. By communicating clearly and testing our local setups, I managed to do this project without facing any major problems.

* Amreen: I contributed by making the Gallery and Join Us pages and fixing bugs on our website. What I learned from GitHub collaboration is that it makes project work easier and more organised. It also taught me how to resolve merge conflicts and work as a team.

* Amzar: I was responsible for developing the Culture and Parts pages for our JDM website. Through this project, I gained experience using Laravel and GitHub to develop and manage my work. One challenge was making sure my pages matched the existing website design without affecting other members' work. Overall, I improved my understanding of version control, collaboration and teamwork.

