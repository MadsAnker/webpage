---
layout: single
classes: wide
title: Welcome!
header:
    overlay_image: /assets/img/htmlstockphoto.jpg
    overlay_filter: 0.6
sidebar:
    nav: "webworkshop"
---
Welcome to the IMADA Web workshop!
The purpose of this workshop is to introduce you to the basics of web development.
We will be using HTML, CSS and JavaScript along with some PHP.

After the workshop you will (hopefully):

- Understand the role of the server and the client in web development.
- Know how to set up a local development environment.
- Be able to build static websites using HTML and CSS.
- Be able to use JavaScript to add functionality to your site.
- Be able to build sites with dynamic content using PHP.
- Know where to find further resources on web development.

## Agenda 
The agenda for today:

1. Setting up the environment
2. Web basics - Clients and servers in the context of web development.
3. HTML 101 - The building blocks.
4. CSS 101 - Doing it in style.
6. PHP 101 - Adding the back end.
5. JavaScript 101 - Adding functionality.
7. Conclusion and evaluation.

Meanwhile: eat all the cake you want.

## Getting started
Before we go any further, let's set up a local development environment using Docker.
If you do not already have Docker installed, please follow these [instructions]({% link webworkshop/install-docker.md %}).

Once you have Docker installed, go ahead and create the directory that we will be using for this workshop
{% highlight bash %}
mkdir webworkshop && cd webworkshop
{% endhighlight %}

Now, you can start the development server using:
{% highlight bash %}
docker run -v "$PWD:/var/www/html" -p 80:80 php:8.1.10-apache
{% endhighlight %}
It'll take a while the first time since it has to download the PHP Docker image.

That's all the setup we need. Docker is awesome right?

## What we are building
Today, we'll be building a simple number guessing game where users can accumulate "internet points" by guessing numbers.
This (somewhat contrived) example will allow us to introduce essential concepts of web development in a simple environment.
The page will include the following features:

- There exists some number which the user must guess. This number shall be between 1 and 10.
The number does no change until the user guesses it.
- Users can input a number and submit it as a guess.
- When a user correctly guesses the number, they are awarded with an "internet point".
- Users can ask for "hints" in the form of a statement like "the number is between x and y".

We will be developing this in several steps, introducing important concepts of HTML, CSS, JavaScript and PHP along the way.
We will start by implementing the user interface using HTML, then we will add some style to it using CSS.
Then, we will implement the logic running on the server of our application using PHP and lastly implement the "hint" feature using PHP and JavaScript in conjunction.

## Evaluation
[Click here](https://docs.google.com/forms/d/e/1FAIpQLSdSMIWLF3e-BN5QBVLFve5E4h3sBj-iEOwOMPsJnKrNpg1M5w/viewform?usp=sf_link) to open the evaluation formula.
