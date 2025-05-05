# my-mvc
Vanilla PHP MVC framework project

Notes:
Boiler plate MVC created in preparation for assessment: https://github.com/Zash22/my-mvc/tree/develop

All work for assessment in: https://github.com/Zash22/my-mvc/tree/shopping-list

Live url for assesment: http://16.16.144.240/list

Todo:

Deploy Process:
Install Deployer via composer and create github action. deploy.yml would look like:

==========================================================
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

==========================================================


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



