# my-mvc

The Challenge:

================================================================
Vanilla PHP MVC framework project test

Today you will be creating a little shopping list tool.
Even though it's a simple exercise, the deliverable tells us a lot about your technical abilities.
Please make sure the shopping list can do the following:
● Add items
● Delete items
● Edit items
● Mark items as checked

SUBMISSIONS
Once you are ready you will be required to submit your:
● git repository URL
● publicly accessible URL where the solution is deployed
● any database DDLs
● any database DMLs (if the database requires seeding)
● Anything else you think will be valuable for us to consider when reviewing your submission

CONSIDERATIONS
● This is a timed 3 hour assessment
○ Please make sure you send your submission within the allocated time whether
working or not.

● NO USE OF ANY FRAMEWORKS
○ YES - this means no Laravel, CodeIgniter, Symfony or any other siblings.
○ We pride ourselves on our custom codebase, and what it has achieved and we want
you to add to its footprint/value
○ You are allowed to pull in third-party libraries via composer (if needed) as well as
npm (or similar JS dependency/package manager)

● Create your own mini MVC-type framework
○ By now you should have been exposed to several frameworks and although we do
not use any frameworks we still apply framework-type thinking in our solution and
everyday approach
● Use a git version control system
○ You can use any publicly hosted git repository platform (such as Bitbucket, Github,
GitLab) to commit your code.
○ When submitting please ensure that your git repository is set to public and that your
commits and code are available for cloning

● Use Object Orientated Principles (OOP)
○ Nothing more to say here....
● A publicly accessible URL where your project/solution is deployed
○ We need you to be able to access your solution and view your implementation

================================================================

My solution:

================================================================

All work for assessment in master branch

Live url for assesment: http://16.16.144.240/list

To Fix:

Deploy Process:
Install Deployer via composer and create github action. deploy.yml would look like:

+++++++++++++++++++++++++++++++++++++++++++++++
name: Deploy to EC2

on:
push:
branches: [main]

jobs:
deploy:
runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Setup SSH
        run: |
          mkdir -p ~/.ssh
          echo "${{ secrets.EC2_SSH_KEY }}" > ~/.ssh/id_rsa
          chmod 600 ~/.ssh/id_rsa
          ssh-keyscan -H ${{ secrets.EC2_HOST }} >> ~/.ssh/known_hosts

      - name: Deploy via SSH
        run: |
          ssh ${{ secrets.EC2_USER }}@${{ secrets.EC2_HOST }} << 'EOF'
            cd /var/www/html/myapp
            git pull origin main
            composer install --no-dev --optimize-autoloader
            sudo systemctl reload apache2
          EOF

+++++++++++++++++++++++++++++++++++++++++++++++

Install and implement Monologger

Install and implement Guzzle

Implement .env and configuration files

Implement secure way of handling secrets

Better names for shopping list classes and methods.

Consistency of methods, parameters and php8 standards across all branches

Implement exception handling

DB migration for 'items' table

Implement GrumpPHP & PHP unit & Dusk

Implement a template framework

Add vendor dir to gitignore

Implement validation

Implement Dependancy Injection

================================================================


