# Just GitNotes

## Your own REPO man

### Step 1

```code
git clone https://github.com/jraymondt/portfolio.git
cd  <repo dir>
```

### Step 2

To update to the latest version of the main branch

```code
git checkout main  
git pull origin main  
```

### step 3

Start a new branch for editing

```code
git checkout -b new-version
```

### step 4

- Modify files as needed, then stage and commit your changes

```code
git add .
git commit -m "Describe your changes"
```

### step 5: push new branch to github

```code
git push origin new-version
```

### step 6: Create a pull request on GitHub

- Go to your repository on GitHub.
- Click Compare & pull request.
- Add details about the changes and click Create pull request.

### step 7: Merge the branch (keeping the old version if needed)

- If you want to retain the old version alongside the new one, ensure you don't overwrite old files—consider keeping them in a dedicated folder like old-version/.
- If everything looks good, merge the pull request on GitHub.

### step 8: Pull the changes back to your local repository

```code
git checkout main
git pull origin main
```

### step 9: became willing to make further changes to my lifes work

```code
git checkout -b new-feature-branch
```

### step 10: conintued to make changes

### step 11: sought through further committed changes and meditation

```code
git add .
git commit -m "Made updates to portfolio"
```

### step 12: push changes

```code
git push origin new-feature-branch
```

Trolley bus

## Working on someone elses REPO - steps (maybe)

### Step 1: Fork the Repository

- If you’re not the project owner, start by forking the repository. This creates your own copy of the project under your GitHub account.
- You can do this by navigating to the original repo and clicking the Fork button.

### Step 2: Clone Your Fork Locally

- Open your terminal and clone your fork using:

```code
git clone https://github.com/jraymondt/virtual-hotel-bootstrap.git
```

### Step 3: Set Up the Original Repo as an Upstream

- This allows you to fetch and sync changes from the main project. Run:

```code
git remote add upstream https://github.com/Azzo-1/virtual-hotel-bootstrap.git
```

### Step 4: Create a Branch for Your Work

- Never work directly in the main branch. Instead, create a separate branch for your changes:
  
```code
git checkout -b james-features
git checkout james-features
```

### Step 5: Make Changes and Commit

- Modify files as needed, then stage and commit your changes

```code
git add .
git commit -m "Describe your changes"
```

### Step 6: Push Your Branch to Your Fork

- Send your changes to your forked repository:
  
```code
git push origin james-features
```

### Step 7: Create a Pull Request (PR)

- On GitHub, navigate to your fork and click "Compare & Pull Request".
- Provide a clear description of your changes and submit the PR for review.

### Step 8: Keep Your Fork Updated

- Regularly sync with the main repository to avoid conflicts

```code
git fetch upstream
git merge upstream/main
git fetch main
git merge main
```

### Step 9: Push changes to the main upstream branch

```code
git push upstream james-features
```

### Step 10: Merge Your Pull Request

- Once your pull request has been reviewed and approved by maintainers, it's ready to be merged

- Typically, the repository owner or maintainer will handle the merge, but if you have appropriate permissions:

1. Navigate to your pull request on GitHub
2. Click the "Merge pull request" button
3. Choose the appropriate merge method (merge commit, squash and merge, or rebase and merge)
4. Confirm the merge

After merging, you can delete your feature branch since the changes are now in the main branch:

```code
git checkout main
git branch -d james-features
```

## more grits

```code
git branch
git status
git branch -a
git branch -d branch-name
git checkout -b branch-name
git checkout main
git merge branch-name
git push origin branch-name
git push origin --delete branch-name
git checkout branch-name
```

```code
git config --global user.email "james@jraymondt.com"
git config --global user.name "jraymondt"
```
