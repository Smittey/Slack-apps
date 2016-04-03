
# Slack Slash Command to Recommend Music

### Requirements

* A web server running PHP5 with cURL enabled. Cloud services such as Heroku will do!
* A slack team and the ability to install custom integrations

### Installation

* Place this script on a server running PHP5 with cURL. Note: It must be served over https with a valid non-self signed certificate.
* Set up a new custom slash command on your Slack team: 
      http://my.slack.com/services/new/slash-commands
* Under "Choose a command", enter whatever you want for the command. This slash command plugin was written with `/similarMusic` as the command. 
* Under `URL`, enter the URL for the script on your server.
* Leave `Method` set to `Post`.
* Decide whether you want this command to show in the autocomplete list for slash commands.
* If you do, enter a short description and usage hint.
* Create an [incoming webhook](https://slack.com/apps/A0F7XDUAZ-incoming-webhooks)
* Copy the **Webhook URL** into the clipboard and replace the following line with yours




`$webhookUrl = "https://hooks.slack.com/services/this-will-be-unique-to-your-webhook"`


### Usage

    /similarMusic Radiohead
    

### Sample Output

![Sample output from slash command](http://i.imgur.com/mq17th9.png "Sample output from slash command")


