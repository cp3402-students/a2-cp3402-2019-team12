# a2-cp3402-2019-team12
a2-cp3402-2019-team12 created by GitHub Classroom
# The Coffee Can
Assignment 2 - CP3402, 2019 - Team 12

Theme developed by using the starter theme 'underscores'.

### Authors
* [Nickolas Jucker](https://github.com/Nickolasjucker)
* [Akash Gupta](https://github.com/akash30g)
* [Ankit Jakhar](https://github.com/akki101)
* [Harsh Dhadwal](https://github.com/Harsh-Dhadwal)
* [Bonnie Gilsenan](https://github.com/BonnieGilsenan)
### Server
* Address: [54.252.178.92](http://54.252.178.92/)
### Wordpress
* Version: [5.2.1](https://wordpress.org/support/wordpress-version/version-5-2-1/)
* Base theme credit: [Underscores](http://underscores.me/)
* Plugins: 
  - [WP forms](https://wpforms.com/)
  - [elementor](https://elementor.com/)
  - [All-in-One WP Migration](https://en-au.wordpress.org/plugins/all-in-one-wp-migration/)
### Workflow
* Development: [Phpstorm](https://www.jetbrains.com/phpstorm/)
* Collaboration:
  - [Slack](https://slack.com/intl/en-au/)
    - [Trello Integration](https://trello.com/en-AU/platforms/slack)
    - [Github Integration](https://slack.github.com/)
  - [Github](https://github.com/)
  - [Trello](https://trello.com/)
* Deployment:
  - [Git](https://gitforwindows.org/) for Git Bash command line.
  - [Docker](https://www.docker.com/)
### Local Development Setup
This is how you set up docker to develope changes and manage the theme before submitting it to the public server.
* Intall docker
* Launch your Command line input
* Make a directory for wordpress:
`mkdir "directory name"`
* Add the `docker-compose.yml` to the directory
* Run the file by executing this command: `docker-compose up`
* Add the theme to the directory in the directory you made: `\wp_data\wp-content\themes`
* Go to either `localhost:8000` or `http://127.0.0.1:8000`
* Set up the wordpress through the famous 5-minute installation screen.
* Go to Appereance > themes and select the `CoffeeCan`
* The websites contents will be empty, you can either extract and import from the public server using `All-in-One WP Migration` or start anew.
* Now you can edit the theme through any php editor and change the contents accordingly
* If using Phpstorm make sure to use a file watcher with scss
* To end the local server execute `docker-compose stop` in the commandline input

### AWS Setup
